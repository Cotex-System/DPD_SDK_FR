<?php

declare(strict_types=1);

namespace DPD\Tests\Unit\Endpoints;

use DPD\Auth\Authenticator;
use DPD\Endpoints\Authentication;
use DPD\Http\HttpClient;
use DPD\Http\Response;
use DPD\Models\Response\TokenDTO;
use DPD\Models\Response\TokenPayloadDTO;
use DPD\Models\Response\TokenSecretDTO;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use PHPUnit\Framework\TestCase;

class AuthenticationEndpointTest extends TestCase
{
    public function testCreateTokenReturnsTokenDTO(): void
    {
        $httpClient = $this->createMock(HttpClient::class);
        $authenticator = $this->createMock(Authenticator::class);
        $originalToken = 'original-token-123';

        $payload = [
            'secretId' => 'abc-123',
            'validUntil' => '2026-12-31 23:59:59',
            'token' => 'token-value',
        ];

        $httpClient
            ->expects($this->once())
            ->method('post')
            ->with(
                '/auth/tokens',
                ['name' => 'SDK Token'],
                ['Authorization' => 'Bearer ' . $originalToken]
            )
            ->willReturn($this->responseFromArray($payload));

        $endpoint = new Authentication($httpClient, $authenticator);
        $token = $endpoint->createToken($originalToken, 'SDK Token');

        $this->assertInstanceOf(TokenDTO::class, $token);
        $this->assertSame('token-value', $token->getToken());
        $this->assertSame('abc-123', $token->getSecretId());
    }

    public function testGetMeReturnsTokenPayloadDTO(): void
    {
        $httpClient = $this->createMock(HttpClient::class);
        $authenticator = $this->createMock(Authenticator::class);

        $authenticator->method('isTokenValid')->willReturn(true);

        $payload = [
            'userId' => 'u-1',
            'secretId' => 's-1',
            'secretName' => 'SDK Token',
            'permissions' => ['shipments.read'],
        ];

        $httpClient
            ->expects($this->once())
            ->method('get')
            ->with('/auth/me', [])
            ->willReturn($this->responseFromArray($payload));

        $endpoint = new Authentication($httpClient, $authenticator);
        $me = $endpoint->getMe();

        $this->assertInstanceOf(TokenPayloadDTO::class, $me);
        $this->assertSame('u-1', $me->getUserId());
        $this->assertSame(['shipments.read'], $me->getPermissions());
    }

    public function testGetTokenSecretsReturnsTokenSecretDTOList(): void
    {
        $httpClient = $this->createMock(HttpClient::class);
        $authenticator = $this->createMock(Authenticator::class);

        $authenticator->method('isTokenValid')->willReturn(true);

        $payload = [
            ['secretId' => 's-1', 'name' => 'Token 1'],
            ['secretId' => 's-2', 'name' => 'Token 2'],
        ];

        $httpClient
            ->expects($this->once())
            ->method('get')
            ->with('/auth/token-secrets', [])
            ->willReturn($this->responseFromArray($payload));

        $endpoint = new Authentication($httpClient, $authenticator);
        $secrets = $endpoint->getTokenSecrets();

        $this->assertCount(2, $secrets);
        $this->assertInstanceOf(TokenSecretDTO::class, $secrets[0]);
        $this->assertSame('s-1', $secrets[0]->getSecretId());
    }

    private function responseFromArray(array $data): Response
    {
        $guzzleResponse = new GuzzleResponse(
            200,
            ['Content-Type' => 'application/json'],
            json_encode($data)
        );

        return new Response($guzzleResponse);
    }
}
