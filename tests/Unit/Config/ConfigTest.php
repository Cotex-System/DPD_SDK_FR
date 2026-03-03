<?php

declare(strict_types=1);

namespace DPD\Tests\Unit\Config;

use DPD\Config\Config;
use PHPUnit\Framework\TestCase;

final class ConfigTest extends TestCase
{
    /** @var array<string, string|false> */
    private array $envBackup = [];

    protected function setUp(): void
    {
        $this->backupEnv([
            'DPD_ENV',
            'DPD_TEST_USERID',
            'DPD_TEST_PASSWORD',
            'DPD_USERID',
            'DPD_PASSWORD',
            'DPD_TEST_EPRINT_WSDL',
            'DPD_TEST_TRACE_WSDL',
            'DPD_EPRINT_WSDL',
            'DPD_TRACE_WSDL',
        ]);
    }

    protected function tearDown(): void
    {
        foreach ($this->envBackup as $key => $value) {
            if ($value === false) {
                putenv($key);
                unset($_ENV[$key]);
                continue;
            }

            putenv($key . '=' . $value);
            $_ENV[$key] = $value;
        }
    }

    public function testEnvironmentNormalizesToProdAndTest(): void
    {
        $prodConfig = new Config(['environment' => 'production']);
        $testConfig = new Config(['environment' => 'test']);

        self::assertSame('prod', $prodConfig->environment());
        self::assertSame('test', $testConfig->environment());
    }

    public function testCredentialsPreferConfigThenEnvironmentSpecificThenFallback(): void
    {
        putenv('DPD_ENV=test');
        putenv('DPD_TEST_USERID=test-user');
        putenv('DPD_TEST_PASSWORD=test-pass');
        putenv('DPD_USERID=fallback-user');
        putenv('DPD_PASSWORD=fallback-pass');

        $config = new Config();
        self::assertSame('test-user', $config->userId());
        self::assertSame('test-pass', $config->password());

        $override = new Config([
            'user_id' => 'config-user',
            'password' => 'config-pass',
        ]);

        self::assertSame('config-user', $override->userId());
        self::assertSame('config-pass', $override->password());
    }

    public function testServiceUrlsResolveFromEnvironmentBeforeDefaults(): void
    {
        putenv('DPD_ENV=test');
        putenv('DPD_TEST_EPRINT_WSDL=https://example.test/eprint?wsdl');
        putenv('DPD_TEST_TRACE_WSDL=https://example.test/trace?wsdl');

        $config = new Config();

        self::assertSame('https://example.test/eprint?wsdl', $config->eprintWsdl());
        self::assertSame('https://example.test/trace?wsdl', $config->traceWsdl());
    }

    public function testSoapOptionsMergeWithCustomValues(): void
    {
        $config = new Config([
            'connection_timeout' => 42,
            'encoding' => 'ISO-8859-1',
            'soap_options' => [
                'trace' => false,
                'exceptions' => false,
                'custom_option' => 'custom-value',
            ],
        ]);

        $options = $config->soapOptions();

        self::assertSame(false, $options['trace']);
        self::assertSame(false, $options['exceptions']);
        self::assertSame(42, $options['connection_timeout']);
        self::assertSame('ISO-8859-1', $options['encoding']);
        self::assertSame('custom-value', $options['custom_option']);
    }

    /**
     * @param list<string> $keys
     */
    private function backupEnv(array $keys): void
    {
        foreach ($keys as $key) {
            $this->envBackup[$key] = getenv($key);
        }
    }
}
