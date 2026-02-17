<?php

declare(strict_types=1);

namespace DPD\Tests\Unit\Endpoints;

use DPD\Auth\Authenticator;
use DPD\Endpoints\Services;
use DPD\Http\HttpClient;
use DPD\Http\Response;
use DPD\Models\Response\ServiceDTO;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use PHPUnit\Framework\TestCase;

class ServicesEndpointTest extends TestCase
{
    public function testListReturnsServiceDTOList(): void
    {
        $httpClient = $this->createMock(HttpClient::class);
        $authenticator = $this->createMock(Authenticator::class);

        $authenticator->method('isTokenValid')->willReturn(true);

        $payload = [
            ['serviceAlias' => 'DPD_CLASSIC', 'name' => 'Classic'],
            ['serviceAlias' => 'DPD_EXPRESS', 'name' => 'Express'],
        ];

        $httpClient
            ->expects($this->once())
            ->method('get')
            ->with('/services', ['country' => 'FR'])
            ->willReturn($this->responseFromArray($payload));

        $endpoint = new Services($httpClient, $authenticator);
        $services = $endpoint->list(['country' => 'FR']);

        $this->assertCount(2, $services);
        $this->assertInstanceOf(ServiceDTO::class, $services[0]);
    }

    public function testGetServicesDataReturnsServiceDTO(): void
    {
        $httpClient = $this->createMock(HttpClient::class);
        $authenticator = $this->createMock(Authenticator::class);

        $authenticator->method('isTokenValid')->willReturn(true);

        $payload = ['serviceAlias' => 'DPD_CLASSIC', 'name' => 'Classic'];

        $httpClient
            ->expects($this->once())
            ->method('get')
            ->with('/service/data', ['serviceAlias' => 'DPD_CLASSIC'])
            ->willReturn($this->responseFromArray($payload));

        $endpoint = new Services($httpClient, $authenticator);
        $service = $endpoint->getServicesData(['serviceAlias' => 'DPD_CLASSIC']);

        $this->assertInstanceOf(ServiceDTO::class, $service);
        $this->assertSame('DPD_CLASSIC', $service->getServiceAlias());
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
