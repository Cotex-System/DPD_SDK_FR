<?php

declare(strict_types=1);

namespace DPD\Tests\Unit\Auth;

use DPD\Auth\Authenticator;
use DPD\Config\Config;
use DPD\Http\HttpClient;
use PHPUnit\Framework\TestCase;

class AuthenticatorTest extends TestCase
{
    private Config $config;
    private HttpClient $httpClient;

    protected function setUp(): void
    {
        $this->config = new Config([
            'api_url' => 'https://api-sandbox.dpd.fr',
            'original_token' => 'test_original_token',
            'token_id' => 'SDK Test Token',
            'token_ttl' => 3600,
        ]);

        $this->httpClient = $this->createMock(HttpClient::class);
    }

    public function testAuthenticatorCanBeInstantiated(): void
    {
        $authenticator = new Authenticator($this->httpClient, $this->config);
        
        $this->assertInstanceOf(Authenticator::class, $authenticator);
    }

    public function testIsTokenValidReturnsFalseInitially(): void
    {
        $authenticator = new Authenticator($this->httpClient, $this->config);
        
        $this->assertFalse($authenticator->isTokenValid());
    }
}
