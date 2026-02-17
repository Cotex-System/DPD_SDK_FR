<?php

declare(strict_types=1);

namespace DPD\Tests\Integration\Endpoints;

use DPD\DPDClient;
use DPD\Models\Response\TokenDTO;
use PHPUnit\Framework\TestCase;

/**
 * Tests d'intégration pour l'endpoint Authentication
 * 
 * Ces tests nécessitent un token d'origine valide dans .env ou variables d'environnement
 */
class AuthenticationTest extends TestCase
{
    private ?DPDClient $client = null;

    protected function setUp(): void
    {
        if (empty(getenv('DPD_ORIGINAL_TOKEN'))) {
            $this->markTestSkipped('DPD original token not configured');
        }

        $this->client = new DPDClient([
            'api_url' => getenv('DPD_API_URL') ?: 'https://api-sandbox.dpd.fr',
            'original_token' => getenv('DPD_ORIGINAL_TOKEN'),
            'token_id' => getenv('DPD_TOKEN_ID') ?: 'SDK Token',
            'token_ttl' => getenv('DPD_TOKEN_TTL') !== false ? (int) getenv('DPD_TOKEN_TTL') : null,
        ]);
    }

    public function testCanCreateToken(): void
    {
        $this->client->authenticate();
        $token = $this->client->getAuthenticator()->getAccessToken();
        $this->assertIsString($token);
        $this->assertNotEmpty($token);
    }

    public function testCanGetUserInfo(): void
    {
        // Authentifier d'abord
        $this->client->authenticate();

        $userInfo = $this->client->getAuthenticator()->getMe();

        $this->assertNotEmpty($userInfo->getUserId());
        $this->assertIsArray($userInfo->getPermissions());
    }
}
