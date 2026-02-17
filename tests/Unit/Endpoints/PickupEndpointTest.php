<?php

declare(strict_types=1);

namespace DPD\Tests\Unit\Endpoints;

use DPD\Auth\Authenticator;
use DPD\Endpoints\Pickup;
use DPD\Http\HttpClient;
use DPD\Http\Response;
use DPD\Models\Response\TimeFrameResponseDTO;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use PHPUnit\Framework\TestCase;

class PickupEndpointTest extends TestCase
{
    public function testGetPickupsReturnsRawArrayData(): void
    {
        $httpClient = $this->createMock(HttpClient::class);
        $authenticator = $this->createMock(Authenticator::class);
        $authenticator->method('isTokenValid')->willReturn(true);

        $payload = [
            'data' => [
                ['id' => 'p-1', 'senderName' => 'Sender A'],
            ],
        ];

        $httpClient
            ->expects($this->once())
            ->method('get')
            ->with('/pickup', ['page' => 1])
            ->willReturn($this->responseFromArray($payload));

        $endpoint = new Pickup($httpClient, $authenticator);
        $result = $endpoint->getPickups(['page' => 1]);

        $this->assertIsArray($result);
        $this->assertSame('p-1', $result['data'][0]['id']);
    }

    public function testScheduleReturnsRawArrayData(): void
    {
        $httpClient = $this->createMock(HttpClient::class);
        $authenticator = $this->createMock(Authenticator::class);
        $authenticator->method('isTokenValid')->willReturn(true);

        $request = ['pickupDate' => '2026-02-17', 'pickupTimeFrom' => '09:00', 'pickupTimeTo' => '12:00'];
        $payload = ['requestId' => 'req-1', 'status' => 'created'];

        $httpClient
            ->expects($this->once())
            ->method('post')
            ->with('/pickup', $request)
            ->willReturn($this->responseFromArray($payload));

        $endpoint = new Pickup($httpClient, $authenticator);
        $result = $endpoint->schedule($request);

        $this->assertIsArray($result);
        $this->assertSame('req-1', $result['requestId']);
    }

    public function testGetTimeframesReturnsTimeFrameResponseDTOList(): void
    {
        $httpClient = $this->createMock(HttpClient::class);
        $authenticator = $this->createMock(Authenticator::class);
        $authenticator->method('isTokenValid')->willReturn(true);

        $payload = [
            ['deliveryDate' => '2026-02-18', 'timeFrameFrom' => '08:00', 'timeFrameTo' => '12:00'],
            ['deliveryDate' => '2026-02-18', 'timeFrameFrom' => '12:00', 'timeFrameTo' => '16:00'],
        ];

        $httpClient
            ->expects($this->once())
            ->method('get')
            ->with('/pickup/timeframes', ['country' => 'FR'])
            ->willReturn($this->responseFromArray($payload));

        $endpoint = new Pickup($httpClient, $authenticator);
        $result = $endpoint->getTimeframes(['country' => 'FR']);

        $this->assertCount(2, $result);
        $this->assertInstanceOf(TimeFrameResponseDTO::class, $result[0]);
        $this->assertSame('2026-02-18', $result[0]->getDeliveryDate());
    }

    private function responseFromArray(array $data): Response
    {
        $guzzleResponse = new GuzzleResponse(200, ['Content-Type' => 'application/json'], json_encode($data));
        return new Response($guzzleResponse);
    }
}
