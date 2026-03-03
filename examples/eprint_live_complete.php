<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use DPD\Config\Config;
use DPD\DPDClient;
use DPD\Exceptions\TransportException;
use DPD\Models\EPrint\Address\AddressDTO;
use DPD\Models\EPrint\CustomerDTO;
use DPD\Models\EPrint\Enum\LabelTypeEnum;
use DPD\Models\EPrint\Enum\ReferenceTypeEnum;
use DPD\Models\EPrint\Labels\LabelTypeDTO;
use DPD\Models\EPrint\ReferenceInBarcodeDTO;
use DPD\Models\EPrint\Service\SlaveRequestDTO;
use DPD\Models\EPrint\Service\SlaveServicesDTO;
use DPD\Models\Request\EPrint\CreateCollectionRequestBcDTO;
use DPD\Models\Request\EPrint\CreateMultiShipmentBcRequestDTO;
use DPD\Models\Request\EPrint\CreateShipmentBcRequestDTO;
use DPD\Models\Request\EPrint\CreateShipmentWithLabelsBcRequestDTO;
use DPD\Models\Request\EPrint\GetLabelBcRequestDTO;
use DPD\Models\Request\EPrint\GetShipmentBCRequestDTO;
use DPD\Models\Request\EPrint\GetShippingRequestDTO;
use DPD\Models\Trace\CustomerDTO as TraceCustomerDTO;

function out(string $message): void
{
    fwrite(STDOUT, $message . PHP_EOL);
}

function section(string $title): void
{
    out('');
    out('=== ' . $title . ' ===');
}

function envString(string $key, ?string $default = null): ?string
{
    $value = getenv($key);

    if ($value === false || $value === '') {
        return $default;
    }

    return $value;
}

function requireIntEnv(string $key): int
{
    $value = envString($key);

    if ($value === null || !preg_match('/^\d+$/', $value)) {
        fwrite(STDERR, 'Missing or invalid env var: ' . $key . PHP_EOL);
        exit(1);
    }

    return (int) $value;
}

function buildFrenchAddresses(): array
{
    $receiver = new AddressDTO('Jean Dupont', 'FR', '75008', 'Paris', '10 Rue de la Paix', '0601020304');
    $shipper = new AddressDTO('Acme Expédition', 'FR', '69002', 'Lyon', '25 Rue de Brest', '0472001122');

    return [$receiver, $shipper];
}

function extractIdentifiers(array $shipmentBcList): array
{
    if (isset($shipmentBcList['Shipment'])) {
        $first = $shipmentBcList;
    } else {
        if (isset($shipmentBcList['ShipmentBc'])) {
            $shipmentBcList = $shipmentBcList['ShipmentBc'];
        }

        $first = $shipmentBcList[0] ?? null;
        if ($first instanceof stdClass) {
            $first = get_object_vars($first);
        }
    }

    if (!is_array($first)) {
        throw new RuntimeException('Invalid CreateShipmentBc response shape.');
    }

    $shipment = $first['Shipment'] ?? null;
    if ($shipment instanceof stdClass) {
        $shipment = get_object_vars($shipment);
    }

    if (!is_array($shipment)) {
        throw new RuntimeException('Invalid Shipment payload.');
    }

    $barcode = (string) ($shipment['BarCode'] ?? '');
    $barcodeSource = (string) ($shipment['BarcodeSource'] ?? '');
    $barcodeId = (string) ($shipment['BarcodeId'] ?? '');

    if ($barcode === '' || $barcodeSource === '' || $barcodeId === '') {
        throw new RuntimeException('Missing BarCode / BarcodeSource / BarcodeId in response.');
    }

    return [
        'barcode' => $barcode,
        'barcodeSource' => $barcodeSource,
        'barcodeId' => $barcodeId,
    ];
}

$countryCode = requireIntEnv('DPD_LIVE_COUNTRYCODE');
$centerNumber = requireIntEnv('DPD_LIVE_CENTERNUMBER');
$customerNumber = requireIntEnv('DPD_LIVE_CUSTOMER_NUMBER');
$shippingDate = envString('DPD_LIVE_SHIPPING_DATE', date('d.m.Y'));

$client = new DPDClient(new Config());

$customer = new CustomerDTO();
$customer->countrycode = $countryCode;
$customer->centernumber = $centerNumber;
$customer->number = $customerNumber;

$traceCustomer = new TraceCustomerDTO($countryCode, $centerNumber, $customerNumber);
[$receiverAddress, $shipperAddress] = buildFrenchAddresses();

section('EPrint isAlive/getInfo');
try {
    $isAlive = $client->eprint()->isAlive();
    out('isAlive: ' . var_export($isAlive, true));

    $info = $client->eprint()->getInfo();
    out('getInfo: OK (' . gettype($info) . ')');
} catch (TransportException $e) {
    out('getInfo skipped/error: ' . $e->getMessage());
}

section('CreateShipmentBc');
$createShipment = new CreateShipmentBcRequestDTO();
$createShipment->customer_countrycode = $countryCode;
$createShipment->customer_centernumber = $centerNumber;
$createShipment->customer_number = $customerNumber;
$createShipment->receiveraddress = $receiverAddress;
$createShipment->receiverinfo = null;
$createShipment->shipperaddress = $shipperAddress;
$createShipment->shipperinfo = null;
$createShipment->retourAddress = null;
$createShipment->services = null;
$createShipment->weight = '1.20';
$createShipment->referencenumber = 'EX-LIVE-' . date('YmdHis');
$createShipment->reference2 = 'ORDER-' . date('Ymd');
$createShipment->reference3 = null;
$createShipment->Reference4 = null;
$createShipment->shippingdate = $shippingDate;

$created = $client->eprint()->createShipmentBc($createShipment);
$shipmentBc = $created->getShipmentBc() ?? [];
$ids = extractIdentifiers($shipmentBc);
out('Created barcode: ' . $ids['barcode']);
out('Created barcodeId: ' . $ids['barcodeId']);

section('GetShipmentBc');
$getShipmentRequest = new GetShipmentBCRequestDTO(
    $ids['barcode'],
    $ids['barcodeSource'],
    $ids['barcodeId'],
    $traceCustomer
);
$shipmentResult = $client->eprint()->getShipmentBc($getShipmentRequest);
out('GetShipmentBc barcodeId: ' . (string) $shipmentResult->getBarcodeId());
out('GetShipmentBc parcelnumber: ' . (string) $shipmentResult->getParcelnumber());

section('GetLabelBc');
$getLabelRequest = new GetLabelBcRequestDTO(
    $traceCustomer,
    $ids['barcode'],
    null,
    new LabelTypeDTO(LabelTypeEnum::PDF),
    null,
    new ReferenceInBarcodeDTO(ReferenceTypeEnum::REFERENCE_NUMBER)
);
$labelResult = $client->eprint()->getLabelBc($getLabelRequest);
$labels = $labelResult->getLabels() ?? [];
out('GetLabelBc labels count: ' . count($labels));

section('CreateShipmentWithLabelsBc');
$withLabelsRequest = new CreateShipmentWithLabelsBcRequestDTO(
    $countryCode,
    $centerNumber,
    $customerNumber,
    $receiverAddress,
    null,
    $shipperAddress,
    null,
    '1.20',
    'EX-LB-' . date('YmdHis'),
    new LabelTypeDTO(LabelTypeEnum::PDF),
    null,
    null,
    null,
    'ORDER-' . date('Ymd'),
    null,
    null,
    $shippingDate,
    null,
    null
);
$withLabels = $client->eprint()->createShipmentWithLabelsBc($withLabelsRequest);
out('CreateShipmentWithLabelsBc shipments: ' . count($withLabels->getShipments() ?? []));
out('CreateShipmentWithLabelsBc labels: ' . count($withLabels->getLabels() ?? []));

section('CreateMultiShipmentBc');
$slaveServices = new SlaveServicesDTO();
$slaveA = new SlaveRequestDTO('1.00', 'EX-MS-' . date('YmdHis') . '-01', null, null, null, $slaveServices);
$slaveB = new SlaveRequestDTO('1.10', 'EX-MS-' . date('YmdHis') . '-02', null, null, null, $slaveServices);

$multiRequest = new CreateMultiShipmentBcRequestDTO(
    $countryCode,
    $centerNumber,
    $customerNumber,
    $receiverAddress,
    null,
    $shipperAddress,
    null,
    null,
    null,
    [$slaveA, $slaveB]
);
$multi = $client->eprint()->createMultiShipmentBc($multiRequest);
$multiShipments = $multi->getShipments()['ShipmentBc'] ?? [];
out('CreateMultiShipmentBc shipments: ' . count($multiShipments));

section('Optional endpoints');
try {
    $shipping = $client->eprint()->getShipping(new GetShippingRequestDTO($shippingDate, $customer));
    out('GetShipping count: ' . count($shipping->getShippings() ?? []));
} catch (TransportException $e) {
    out('GetShipping skipped/error: ' . $e->getMessage());
}

try {
    $collection = new CreateCollectionRequestBcDTO(
        $countryCode,
        $centerNumber,
        $customerNumber,
        $receiverAddress,
        null,
        $shipperAddress,
        null,
        null,
        1,
        date('d.m.Y', strtotime('+1 day')),
        '08:00',
        '12:00',
        'Collecte example',
        'Appeler avant',
        null,
        'EX-COLL-' . date('YmdHis')
    );
    $collectionResult = $client->eprint()->createCollectionRequestBc($collection);
    out('CreateCollectionRequestBc has shipment: ' . (($collectionResult->getShipmentBC() !== null) ? 'yes' : 'no'));
} catch (TransportException $e) {
    out('CreateCollectionRequestBc skipped/error: ' . $e->getMessage());
}

out('');
out('Done. Reuse identifiers for trace/examples:');
out('DPD_LIVE_TRACE_SHIPMENT_NUMBER=' . $ids['barcode']);
out('DPD_LIVE_TERMINATE_COLLECTION_BARCODE=' . $ids['barcode']);
out('DPD_LIVE_TERMINATE_BARCODE_ID=' . $ids['barcodeId']);
