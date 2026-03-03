<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use DPD\Config\Config;
use DPD\DPDClient;
use DPD\Exceptions\TransportException;
use DPD\Models\Request\Trace\GetLastTraceBcRequestDTO;
use DPD\Models\Request\Trace\GetShipmentTraceByReferenceDTO;
use DPD\Models\Request\Trace\GetShipmentTraceRequestDTO;
use DPD\Models\Request\Trace\GetShipmentTraceSingleRequestDTO;
use DPD\Models\Trace\CustomerDTO;

function out(string $message): void
{
    fwrite(STDOUT, $message . PHP_EOL);
}

function section(string $title): void
{
    out('');
    out('=== ' . $title . ' ===');
}

function envString(string $key): ?string
{
    $value = getenv($key);

    if ($value === false || $value === '') {
        return null;
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

$countryCode = requireIntEnv('DPD_LIVE_COUNTRYCODE');
$centerNumber = requireIntEnv('DPD_LIVE_CENTERNUMBER');
$customerNumber = requireIntEnv('DPD_LIVE_CUSTOMER_NUMBER');
$language = envString('DPD_LIVE_LANGUAGE') ?? 'FR';

$shipmentNumber = $argv[1] ?? envString('DPD_LIVE_TRACE_SHIPMENT_NUMBER');
$parcel = $argv[2] ?? envString('DPD_LIVE_TRACE_PARCEL');
$reference = $argv[3] ?? envString('DPD_LIVE_TRACE_REFERENCE');

$client = new DPDClient(new Config());
$customer = new CustomerDTO($countryCode, $centerNumber, $customerNumber);

section('Trace isAlive/getInfo');
try {
    $isAlive = $client->trace()->isAlive();
    out('isAlive: ' . var_export($isAlive, true));

    $info = $client->trace()->getInfo();
    out('getInfo: OK (' . gettype($info) . ')');
} catch (TransportException $e) {
    out('getInfo skipped/error: ' . $e->getMessage());
}

section('GetShipmentTraceSingle');
if ($shipmentNumber === null || $shipmentNumber === '') {
    out('Skipped: pass shipment number as arg1 or set DPD_LIVE_TRACE_SHIPMENT_NUMBER');
} else {
    try {
        $request = new GetShipmentTraceSingleRequestDTO(
            Customer: $customer,
            ShipmentNumber: $shipmentNumber,
            Language: $language,
            GetImages: false,
            ExpandContainerMode: null,
            Options: null
        );
        $result = $client->trace()->getShipmentTraceSingle($request);
        out('ShipmentTraceSingle hydrated: ' . (($result->getShipmentTrace() !== null) ? 'yes' : 'no'));
    } catch (TransportException $e) {
        out('GetShipmentTraceSingle skipped/error: ' . $e->getMessage());
    }
}

section('GetShipmentTrace');
if ($shipmentNumber === null || $shipmentNumber === '') {
    out('Skipped: pass shipment number as arg1 or set DPD_LIVE_TRACE_SHIPMENT_NUMBER');
} else {
    try {
        $request = new GetShipmentTraceRequestDTO(
            Customer: $customer,
            ShipmentNumber: $shipmentNumber,
            Language: $language,
            GetImages: false,
            ExpandContainerMode: null,
            Options: null
        );
        $result = $client->trace()->getShipmentTrace($request);
        out('GetShipmentTrace traces: ' . count($result->getShipmentTraces() ?? []));
    } catch (TransportException $e) {
        out('GetShipmentTrace skipped/error: ' . $e->getMessage());
    }
}

section('GetShipmentTraceByReference');
if ($reference === null || $reference === '') {
    out('Skipped: pass reference as arg3 or set DPD_LIVE_TRACE_REFERENCE');
} else {
    try {
        $request = new GetShipmentTraceByReferenceDTO(
            Reference: $reference,
            Customer: $customer,
            ShippingDate: null,
            Language: $language,
            ReferenceSearchMode: null,
            GetImages: false,
            Options: null
        );
        $result = $client->trace()->getShipmentTraceByReference($request);
        out('GetShipmentTraceByReference traces: ' . count($result->getShipmentTraces()));
    } catch (TransportException $e) {
        out('GetShipmentTraceByReference skipped/error: ' . $e->getMessage());
    }
}

section('GetLastTraceBc');
if ($parcel === null || $parcel === '') {
    out('Skipped: pass parcel as arg2 or set DPD_LIVE_TRACE_PARCEL');
} else {
    try {
        $request = new GetLastTraceBcRequestDTO(
            Parcels: [$parcel],
            Customer: $customer,
            Language: $language
        );
        $result = $client->trace()->getLastTraceBc($request);
        out('GetLastTraceBc shipmentNumber: ' . (string) $result->getShipmentNumber());
    } catch (TransportException $e) {
        out('GetLastTraceBc skipped/error: ' . $e->getMessage());
    }
}

out('');
out('Done. Usage: php examples/trace_live_complete.php [shipmentNumber] [parcel] [reference]');
