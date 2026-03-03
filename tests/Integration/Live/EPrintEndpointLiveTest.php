<?php

declare(strict_types=1);

namespace DPD\Tests\Integration\Live;

use DPD\Config\Config;
use DPD\DPDClient;
use DPD\Exceptions\TransportException;
use DPD\Models\EPrint\CustomerDTO;
use DPD\Models\Request\EPrint\GetServiceNoticesRequestDTO;
use DPD\Models\Request\EPrint\GetShippingRequestDTO;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

#[Group('live')]
final class EPrintEndpointLiveTest extends TestCase
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

        $result = self::$client->eprint()->isAlive();

        self::assertNotNull($result);
    }

    public function testGetInfoSmoke(): void
    {
        self::assertNotNull(self::$client);

        try {
            $result = self::$client->eprint()->getInfo();
        } catch (TransportException $exception) {
            $message = $exception->getMessage();
            if (str_contains($message, 'No permission for this ip-Address')) {
                self::markTestSkipped('EPrint getInfo requires IP whitelisting on DPD side: ' . $message);
            }

            self::fail('EPrint getInfo network call failed: ' . $message);
            return;
        }

        self::assertNotNull($result);
    }

    public function testGetServiceNoticesWithCustomerContext(): void
    {
        self::assertNotNull(self::$client);

        $customer = $this->requireEprintCustomerFromEnv();
        $request = new GetServiceNoticesRequestDTO($customer, getenv('DPD_LIVE_LANGUAGE') ?: 'FR');

        $result = self::$client->eprint()->getServiceNotices($request);

        self::assertNotNull($result);
    }

    public function testGetShippingWithCustomerContext(): void
    {
        self::assertNotNull(self::$client);

        $customer = $this->requireEprintCustomerFromEnv();
        $date = getenv('DPD_LIVE_SHIPPING_DATE') ?: date('d/m/Y');

        $request = new GetShippingRequestDTO($date, $customer);

        $result = self::$client->eprint()->getShipping($request);

        self::assertNotNull($result);
    }

    private function requireEprintCustomerFromEnv(): CustomerDTO
    {
        $country = getenv('DPD_LIVE_COUNTRYCODE');
        $center = getenv('DPD_LIVE_CENTERNUMBER');
        $number = getenv('DPD_LIVE_CUSTOMER_NUMBER');

        if ($country === false || $center === false || $number === false || $country === '' || $center === '' || $number === '') {
            self::markTestSkipped(
                'Missing business context. Set DPD_LIVE_COUNTRYCODE, DPD_LIVE_CENTERNUMBER and DPD_LIVE_CUSTOMER_NUMBER.'
            );
        }

        $customer = new CustomerDTO();
        $customer->countrycode = (int) $country;
        $customer->centernumber = (int) $center;
        $customer->number = (int) $number;

        return $customer;
    }
}
