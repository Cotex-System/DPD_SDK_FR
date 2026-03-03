<?php

declare(strict_types=1);

namespace DPD\Tests\Integration\Live;

use DPD\Config\Config;
use DPD\DPDClient;
use DPD\Exceptions\TransportException;
use DPD\Models\Request\Trace\GetLastTraceBcRequestDTO;
use DPD\Models\Request\Trace\GetShipmentTraceByReferenceDTO;
use DPD\Models\Request\Trace\GetShipmentTraceSingleRequestDTO;
use DPD\Models\Trace\CustomerDTO;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

#[Group('live')]
final class TraceEndpointLiveTest extends TestCase
{
    private static ?DPDClient $client = null;

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

        $shipmentNumber = getenv('DPD_LIVE_TRACE_SHIPMENT_NUMBER');
        if ($shipmentNumber === false || $shipmentNumber === '') {
            self::markTestSkipped('Missing DPD_LIVE_TRACE_SHIPMENT_NUMBER for shipment trace business test.');
        }

        $request = new GetShipmentTraceSingleRequestDTO(
            Customer: $this->requireTraceCustomerFromEnv(),
            ShipmentNumber: (string) $shipmentNumber,
            Language: getenv('DPD_LIVE_LANGUAGE') ?: 'FR',
            GetImages: false,
            ExpandContainerMode: null,
            Options: null
        );

        $result = self::$client->trace()->getShipmentTraceSingle($request);

        self::assertNotNull($result);
    }

    public function testGetLastTraceBcWithBusinessContext(): void
    {
        self::assertNotNull(self::$client);

        $parcel = getenv('DPD_LIVE_TRACE_PARCEL');
        if ($parcel === false || $parcel === '') {
            self::markTestSkipped('Missing DPD_LIVE_TRACE_PARCEL for GetLastTraceBc business test.');
        }

        $request = new GetLastTraceBcRequestDTO(
            Parcels: [(string) $parcel],
            Customer: $this->requireTraceCustomerFromEnv(),
            Language: getenv('DPD_LIVE_LANGUAGE') ?: 'FR'
        );

        $result = self::$client->trace()->getLastTraceBc($request);

        self::assertNotNull($result);
    }

    public function testGetShipmentTraceByReferenceWithBusinessContext(): void
    {
        self::assertNotNull(self::$client);

        $reference = getenv('DPD_LIVE_TRACE_REFERENCE');
        if ($reference === false || $reference === '') {
            self::markTestSkipped('Missing DPD_LIVE_TRACE_REFERENCE for reference business test.');
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

        $result = self::$client->trace()->getShipmentTraceByReference($request);

        self::assertNotNull($result);
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

        return new CustomerDTO((int) $country, (int) $center, (int) $number);
    }
}
