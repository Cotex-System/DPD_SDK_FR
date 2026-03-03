<?php

declare(strict_types=1);

namespace DPD\Tests\Integration\Live;

use DPD\Config\Config;
use DPD\DPDClient;
use DPD\Exceptions\TransportException;
use DPD\Models\EPrint\Address\AddressDTO;
use DPD\Models\Request\EPrint\CreateShipmentBcRequestDTO;
use DPD\Models\Request\EPrint\GetShipmentBCRequestDTO;
use DPD\Models\Request\Trace\GetLastTraceBcRequestDTO;
use DPD\Models\Request\Trace\GetShipmentTraceRequestDTO;
use DPD\Models\Request\Trace\GetShipmentTraceByReferenceDTO;
use DPD\Models\Request\Trace\GetShipmentTraceSingleRequestDTO;
use DPD\Models\Response\EPrint\CreateShipmentBcResponseDTO;
use DPD\Models\Response\EPrint\GetShipmentBcResponseDTO;
use DPD\Models\Response\Trace\GetLastTraceBcResponseDTO;
use DPD\Models\Response\Trace\GetShipmentTraceDTO;
use DPD\Models\Response\Trace\GetShipmentTraceByReferenceDTO as GetShipmentTraceByReferenceResponseDTO;
use DPD\Models\Response\Trace\GetShipmentTraceSingleDTO;
use DPD\Models\Trace\CustomerDTO;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

#[Group('live')]
final class TraceEndpointLiveTest extends TestCase
{
    private static ?DPDClient $client = null;
    /** @var array{shipmentNumber:?string, parcel:?string, reference:?string}|null */
    private static ?array $resolvedTraceContext = null;

    public static function setUpBeforeClass(): void
    {
        if (getenv('DPD_RUN_LIVE_TESTS') !== '1') {
            self::markTestSkipped('Live tests disabled. Set DPD_RUN_LIVE_TESTS=1 to enable real network calls.');
        }

        $config = new Config();
        if ($config->userId() === null || $config->password() === null) {
            self::markTestSkipped(
                'Missing DPD credentials. Configure DPD_TEST_USERID/DPD_TEST_PASSWORD (or fallback DPD_USERID/DPD_PASSWORD).'
            );
        }

        self::$client = new DPDClient($config);
    }

    public function testIsAliveSmoke(): void
    {
        self::assertNotNull(self::$client);

        $result = self::$client->trace()->isAlive();

        self::assertNotNull($result);
    }

    public function testGetInfoSmoke(): void
    {
        self::assertNotNull(self::$client);

        try {
            $result = self::$client->trace()->getInfo();
        } catch (TransportException $exception) {
            $message = $exception->getMessage();
            if (str_contains($message, 'No permission for this ip-Address')) {
                self::markTestSkipped('Trace getInfo requires IP whitelisting on DPD side: ' . $message);
            }

            self::fail('Trace getInfo network call failed: ' . $message);
            return;
        }

        self::assertNotNull($result);
    }

    public function testVerifyConfigurationSmoke(): void
    {
        self::assertNotNull(self::$client);

        try {
            $result = self::$client->trace()->verifyConfiguration([]);
        } catch (TransportException $exception) {
            $message = $exception->getMessage();
            if (str_contains($message, 'Object reference not set to an instance of an object')) {
                self::markTestSkipped(
                    'VerifyConfiguration requires server-side context and can fail in testenv: ' . $message
                );
            }

            self::fail('Trace VerifyConfiguration network call failed: ' . $message);
            return;
        }

        self::assertNotNull($result);
    }

    public function testGetShipmentTraceSingleWithBusinessContext(): void
    {
        self::assertNotNull(self::$client);

        $context = $this->resolveTraceLiveContext();
       
        $shipmentNumber = $context['shipmentNumber'];
        
        if ($shipmentNumber === null || $shipmentNumber === '') {
            self::markTestSkipped('Missing shipment number for trace test. Provide DPD_LIVE_TRACE_SHIPMENT_NUMBER or enable dynamic create/get chaining.');
        }

        $request = new GetShipmentTraceSingleRequestDTO(
            Customer: $this->requireTraceCustomerFromEnv(),
            ShipmentNumber: (string) $shipmentNumber,
            Language: getenv('DPD_LIVE_LANGUAGE') ?: 'FR',
            GetImages: false,
            ExpandContainerMode: null,
            Options: null
        );

        $result = $this->executeTraceLiveCall(
            fn () => self::$client?->trace()->getShipmentTraceSingle($request),
            'GetShipmentTraceSingle'
        );

        self::assertNotNull($result);
        self::assertInstanceOf(GetShipmentTraceSingleDTO::class, $result);
        self::assertNotNull($result->getShipmentTrace());
    }

    public function testGetLastTraceBcWithBusinessContext(): void
    {
        self::assertNotNull(self::$client);

        $context = $this->resolveTraceLiveContext();
        $parcel = $context['parcel'];
        if ($parcel === null || $parcel === '') {
            self::markTestSkipped('Missing parcel for GetLastTraceBc. Provide DPD_LIVE_TRACE_PARCEL or enable dynamic create/get chaining.');
        }

        $request = new GetLastTraceBcRequestDTO(
            Parcels: [(string) $parcel],
            Customer: $this->requireTraceCustomerFromEnv(),
            Language: getenv('DPD_LIVE_LANGUAGE') ?: 'FR'
        );

        $result = $this->executeTraceLiveCall(
            fn () => self::$client?->trace()->getLastTraceBc($request),
            'GetLastTraceBc'
        );

        self::assertNotNull($result);
        self::assertInstanceOf(GetLastTraceBcResponseDTO::class, $result);
        self::assertNotNull($result->getShipmentNumber());
    }

    public function testGetShipmentTraceByReferenceWithBusinessContext(): void
    {
        self::assertNotNull(self::$client);

        $context = $this->resolveTraceLiveContext();
        $reference = $context['reference'];
        if ($reference === null || $reference === '') {
            self::markTestSkipped('Missing reference for trace by reference test. Provide DPD_LIVE_TRACE_REFERENCE or enable dynamic create/get chaining.');
        }

        $request = new GetShipmentTraceByReferenceDTO(
            Reference: (string) $reference,
            Customer: $this->requireTraceCustomerFromEnv(),
            ShippingDate: null,
            Language: getenv('DPD_LIVE_LANGUAGE') ?: 'FR',
            ReferenceSearchMode: null,
            GetImages: false,
            Options: null
        );

        $result = $this->executeTraceLiveCall(
            fn () => self::$client?->trace()->getShipmentTraceByReference($request),
            'GetShipmentTraceByReference'
        );

        self::assertNotNull($result);
        self::assertInstanceOf(GetShipmentTraceByReferenceResponseDTO::class, $result);
        self::assertIsArray($result->getShipmentTraces());
    }

    public function testGetShipmentTraceWithBusinessContext(): void
    {
        self::assertNotNull(self::$client);

        $context = $this->resolveTraceLiveContext();
        $shipmentNumber = $context['shipmentNumber'];
        if ($shipmentNumber === null || $shipmentNumber === '') {
            self::markTestSkipped('Missing shipment number for trace test. Provide DPD_LIVE_TRACE_SHIPMENT_NUMBER or enable dynamic create/get chaining.');
        }

        $request = new GetShipmentTraceRequestDTO(
            Customer: $this->requireTraceCustomerFromEnv(),
            ShipmentNumber: (string) $shipmentNumber,
            Language: getenv('DPD_LIVE_LANGUAGE') ?: 'FR',
            GetImages: false
        );

        $result = $this->executeTraceLiveCall(
            fn () => self::$client?->trace()->getShipmentTrace($request),
            'GetShipmentTrace'
        );

        self::assertNotNull($result);
        self::assertInstanceOf(GetShipmentTraceDTO::class, $result);
        self::assertIsArray($result->getShipmentTraces());
    }

    private function requireTraceCustomerFromEnv(): CustomerDTO
    {
        $country = getenv('DPD_LIVE_COUNTRYCODE');
        $center = getenv('DPD_LIVE_CENTERNUMBER');
        $number = getenv('DPD_LIVE_CUSTOMER_NUMBER');

        if ($country === false || $center === false || $number === false || $country === '' || $center === '' || $number === '') {
            self::markTestSkipped(
                'Missing business context. Set DPD_LIVE_COUNTRYCODE, DPD_LIVE_CENTERNUMBER and DPD_LIVE_CUSTOMER_NUMBER.'
            );
        }

        if (!preg_match('/^\d+$/', (string) $country)) {
            self::fail('Invalid DPD_LIVE_COUNTRYCODE. Expected numeric country code (e.g. 250 for France).');
        }

        if (!preg_match('/^\d+$/', (string) $center)) {
            self::fail('Invalid DPD_LIVE_CENTERNUMBER. Expected numeric center number.');
        }

        if (!preg_match('/^\d+$/', (string) $number)) {
            self::fail('Invalid DPD_LIVE_CUSTOMER_NUMBER. Expected numeric account number.');
        }

        return new CustomerDTO((int) $country, (int) $center, (int) $number);
    }

    /**
     * @return array{shipmentNumber:?string, parcel:?string, reference:?string}
     */
    private function resolveTraceLiveContext(): array
    {
        if (self::$resolvedTraceContext !== null) {
            return self::$resolvedTraceContext;
        }

        $context = [
            'shipmentNumber' => $this->readEnvOrNull('DPD_LIVE_TRACE_SHIPMENT_NUMBER'),
            'parcel' => $this->readEnvOrNull('DPD_LIVE_TRACE_PARCEL'),
            'reference' => $this->readEnvOrNull('DPD_LIVE_TRACE_REFERENCE'),
        ];

        if ($context['shipmentNumber'] !== null && $context['parcel'] !== null && $context['reference'] !== null) {
            self::$resolvedTraceContext = $context;
            return $context;
        }

        $created = $this->createShipmentForTraceContext();
        if ($created === null) {
            self::$resolvedTraceContext = $context;
            return $context;
        }

        $context['shipmentNumber'] = $context['shipmentNumber'] ?? $created['Barcode'];
        $context['reference'] = $context['reference'] ?? $created['Reference'];

        try {
            $shipment = self::$client?->eprint()->getShipmentBc(
                new GetShipmentBCRequestDTO(
                    $created['Barcode'],
                    $created['BarcodeSource'],
                    $created['BarcodeId'],
                    $this->requireTraceCustomerFromEnv()
                )
            );

            if ($shipment instanceof GetShipmentBcResponseDTO) {
                $parcelNumber = $shipment->getParcelnumber();
                if (is_string($parcelNumber) && $parcelNumber !== '') {
                    $context['parcel'] = $context['parcel'] ?? $parcelNumber;
                }

                $barcode = $shipment->getBarcode();
                if (is_string($barcode) && $barcode !== '') {
                    $context['shipmentNumber'] = $context['shipmentNumber'] ?? $barcode;
                }

                $reference = $shipment->getReferencenumber();
                if (is_string($reference) && $reference !== '') {
                    $context['reference'] = $context['reference'] ?? $reference;
                }
            }
        } catch (TransportException) {
        }

        self::$resolvedTraceContext = $context;

        return $context;
    }

    /**
     * @return array{Barcode:string, BarcodeSource:string, BarcodeId:string, Reference:string}|null
     */
    private function createShipmentForTraceContext(): ?array
    {
        try {
            $customer = $this->requireTraceCustomerFromEnv();
            [$receiverAddress, $shipperAddress] = $this->buildFrenchAddresses();

            $request = new CreateShipmentBcRequestDTO();
            $request->customer_countrycode = $customer->countrycode;
            $request->customer_centernumber = $customer->centernumber;
            $request->customer_number = $customer->number;
            $request->receiveraddress = $receiverAddress;
            $request->receiverinfo = null;
            $request->shipperaddress = $shipperAddress;
            $request->shipperinfo = null;
            $request->retourAddress = null;
            $request->services = null;
            $request->weight = '1.20';
            $request->referencenumber = 'LIVE-TR-' . date('YmdHis');
            $request->reference2 = null;
            $request->reference3 = null;
            $request->Reference4 = null;
            $request->shippingdate = getenv('DPD_LIVE_SHIPPING_DATE') ?: date('d.m.Y');

            $result = self::$client?->eprint()->createShipmentBc($request);
            if (!$result instanceof CreateShipmentBcResponseDTO) {
                return null;
            }

            $ids = $this->extractShipmentIdentifiersFromCreateShipmentResponse($result);

            return [
                'Barcode' => $ids['Barcode'],
                'BarcodeSource' => $ids['BarcodeSource'],
                'BarcodeId' => $ids['BarcodeId'],
                'Reference' => $request->referencenumber,
            ];
        } catch (\Throwable) {
            return null;
        }
    }

    /**
     * @return array{Barcode:string, BarcodeSource:string, BarcodeId:string}
     */
    private function extractShipmentIdentifiersFromCreateShipmentResponse(CreateShipmentBcResponseDTO $response): array
    {
        $shipmentBcList = $response->getShipmentBc();
        if (!is_array($shipmentBcList) || $shipmentBcList === []) {
            throw new \RuntimeException('CreateShipmentBc response does not contain ShipmentBc payload.');
        }

        if (isset($shipmentBcList['Shipment'])) {
            $first = $shipmentBcList;
        } else {
            if (isset($shipmentBcList['ShipmentBc'])) {
                $shipmentBcList = $shipmentBcList['ShipmentBc'];
            }

            if (!is_array($shipmentBcList) || $shipmentBcList === []) {
                throw new \RuntimeException('CreateShipmentBc response ShipmentBc list is empty.');
            }

            $first = $shipmentBcList[0] ?? null;
            if ($first instanceof \stdClass) {
                $first = get_object_vars($first);
            }
        }

        if (!is_array($first)) {
            throw new \RuntimeException('CreateShipmentBc first ShipmentBc item is not a valid structure.');
        }

        $shipment = $first['Shipment'] ?? null;
        if ($shipment instanceof \stdClass) {
            $shipment = get_object_vars($shipment);
        }

        if (!is_array($shipment)) {
            throw new \RuntimeException('CreateShipmentBc first Shipment payload is not a valid structure.');
        }

        $barcode = isset($shipment['BarCode']) ? (string) $shipment['BarCode'] : '';
        $barcodeSource = isset($shipment['BarcodeSource']) ? (string) $shipment['BarcodeSource'] : '';
        $barcodeId = isset($shipment['BarcodeId']) ? (string) $shipment['BarcodeId'] : '';

        if ($barcode === '' || $barcodeSource === '' || $barcodeId === '') {
            throw new \RuntimeException('CreateShipmentBc response is missing one of BarCode / BarcodeSource / BarcodeId.');
        }

        return [
            'Barcode' => $barcode,
            'BarcodeSource' => $barcodeSource,
            'BarcodeId' => $barcodeId,
        ];
    }

    /**
     * @return array{0: AddressDTO, 1: AddressDTO}
     */
    private function buildFrenchAddresses(): array
    {
        $receiver = new AddressDTO(
            'Jean Dupont',
            'FR',
            '75008',
            'Paris',
            '10 Rue de la Paix',
            '0601020304'
        );

        $shipper = new AddressDTO(
            'Acme Expédition',
            'FR',
            '69002',
            'Lyon',
            '25 Rue de Brest',
            '0472001122'
        );

        return [$receiver, $shipper];
    }

    private function readEnvOrNull(string $key): ?string
    {
        $value = getenv($key);

        if ($value === false || $value === '') {
            return null;
        }

        return $value;
    }

    /**
     * @template T
     * @param callable():T $callback
     * @return T
     */
    private function executeTraceLiveCall(callable $callback, string $operation): mixed
    {
        try {
            return $callback();
        } catch (TransportException $exception) {
            $message = $exception->getMessage();
            $skipMarkers = [
                'Connection Error - Connect',
                'Server currently unavailable',
                'No permission for this ip-Address',
                'Permission denied',
            ];

            foreach ($skipMarkers as $marker) {
                if (str_contains($message, $marker)) {
                    self::markTestSkipped($operation . ' cannot be validated in this live context: ' . $message);
                }
            }

            throw $exception;
        }
    }
}
