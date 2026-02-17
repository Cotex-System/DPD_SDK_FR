<?php

declare(strict_types=1);

namespace DPD\Tests\Unit\Endpoints;

use DPD\Auth\Authenticator;
use DPD\Endpoints\Countries;
use DPD\Http\HttpClient;
use DPD\Http\Response;
use DPD\Models\Response\CountryDTO;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use PHPUnit\Framework\TestCase;

class CountriesEndpointTest extends TestCase
{
    public function testListReturnsCountryDTOList(): void
    {
        $httpClient = $this->createMock(HttpClient::class);
        $authenticator = $this->createMock(Authenticator::class);

        $authenticator->method('isTokenValid')->willReturn(true);

        $payload = [
            ['code' => 'FR', 'name' => 'France'],
            ['code' => 'BE', 'name' => 'Belgium'],
        ];

        $httpClient
            ->expects($this->once())
            ->method('get')
            ->with('/countries', ['direction' => 'origin'])
            ->willReturn($this->responseFromArray($payload));

        $endpoint = new Countries($httpClient, $authenticator);
        $countries = $endpoint->list('origin');

        $this->assertCount(2, $countries);
        $this->assertInstanceOf(CountryDTO::class, $countries[0]);
        $this->assertSame('FR', $countries[0]->getCode());
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
