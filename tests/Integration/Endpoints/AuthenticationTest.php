<?php

declare(strict_types=1);

namespace DPD\Tests\Integration\Endpoints;

use DPD\DPDClient;
use DPD\Models\Response\TokenDTO;
use PHPUnit\Framework\TestCase;

/**
 * Tests d'intégration pour l'endpoint Authentication
 * 
 * Ces tests nécessitent des credentials valides dans .env ou variables d'environnement
 */
class AuthenticationTest extends TestCase
{
    private ?DPDClient $client = null;

    protected function setUp(): void
    {
        // Skipper les tests si pas de credentials
        if (empty(getenv('DPD_USERNAME')) || empty(getenv('DPD_PASSWORD'))) {
            $this->markTestSkipped('DPD credentials not configured');
        }

        $this->client = new DPDClient([
            'api_url' => getenv('DPD_API_URL') ?: 'https://api-sandbox.dpd.fr',
            'username' => getenv('DPD_USERNAME'),
            'password' => getenv('DPD_PASSWORD'),
        ]);
    }

    public function testCanCreateToken(): void
    {
        $this->client->authenticate();
        $token =$this->client->getAuthenticator()->getAccessToken();
        $this->assertInstanceOf(TokenDTO::class, $token);
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
