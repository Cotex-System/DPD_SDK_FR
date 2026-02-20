<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use DPD\DPDClient;
use DPD\Models\Request\Trace\GetShipmentTraceSingleRequestDTO;
use DPD\Models\Trace\CustomerDTO;

$userId = getenv('DPD_USERID') ?: '';
$password = getenv('DPD_PASSWORD') ?: '';

if ($userId === '' || $password === '') {
    fwrite(STDERR, "Missing credentials. Please set DPD_USERID and DPD_PASSWORD environment variables.\n");
    exit(1);
}

$shipmentNumber = $argv[1] ?? '';
$countryCode = (int) ($argv[2] ?? 250);
$centerNumber = (int) ($argv[3] ?? 0);
$customerNumber = (int) ($argv[4] ?? 0);

if ($shipmentNumber === '') {
    fwrite(STDERR, "Usage: php examples/trace_dto_usage.php <shipmentNumber> [countryCode] [centerNumber] [customerNumber]\n");
    exit(1);
}

$client = new DPDClient();
$client->setTraceCredentials($userId, $password);

$customer = new CustomerDTO($countryCode, $centerNumber, $customerNumber);
$request = new GetShipmentTraceSingleRequestDTO(
    Customer: $customer,
    ShipmentNumber: $shipmentNumber,
    Language: 'FR',
    GetImages: false,
    ExpandContainerMode: null,
    Options: null
);

$response = $client->trace()->getShipmentTraceSingle($request);

print_r($response->toArray());
