<?php

declare(strict_types=1);

namespace DPD\Tests\Unit\Endpoints;

use DPD\Auth\Authenticator;
use DPD\Endpoints\Shipments;
use DPD\Http\HttpClient;
use DPD\Http\Response;
use DPD\Models\Response\LeadTimeResponseDTO;
use DPD\Models\Response\ShipmentDTO;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use PHPUnit\Framework\TestCase;

class ShipmentsEndpointTest extends TestCase
{
    public function testCreateReturnsShipmentDTO(): void
    {
        $httpClient = $this->createMock(HttpClient::class);
        $authenticator = $this->createMock(Authenticator::class);
        $authenticator->method('isTokenValid')->willReturn(true);

        $request = ['payerCode' => '12345'];
        $payload = ['id' => 'sh-1', 'parcelNumbers' => ['PK1']];

        $httpClient
            ->expects($this->once())
            ->method('post')
            ->with('/shipments', $request)
            ->willReturn($this->responseFromArray($payload));

        $endpoint = new Shipments($httpClient, $authenticator);
        $shipment = $endpoint->create($request);

        $this->assertInstanceOf(ShipmentDTO::class, $shipment);
        $this->assertSame('sh-1', $shipment->getId());
    }

    public function testGetShipmentsReturnsShipmentDTOListFromDataNode(): void
    {
        $httpClient = $this->createMock(HttpClient::class);
        $authenticator = $this->createMock(Authenticator::class);
        $authenticator->method('isTokenValid')->willReturn(true);

        $payload = ['data' => [['id' => 'sh-1'], ['id' => 'sh-2']]];

        $httpClient
            ->expects($this->once())
            ->method('get')
            ->with('/shipments', ['page' => 1])
            ->willReturn($this->responseFromArray($payload));

        $endpoint = new Shipments($httpClient, $authenticator);
        $shipments = $endpoint->getShipments(['page' => 1]);

        $this->assertCount(2, $shipments);
        $this->assertInstanceOf(ShipmentDTO::class, $shipments[0]);
    }

    public function testGetShipmentReturnsShipmentDTO(): void
    {
        $httpClient = $this->createMock(HttpClient::class);
        $authenticator = $this->createMock(Authenticator::class);
        $authenticator->method('isTokenValid')->willReturn(true);

        $payload = ['id' => 'sh-42'];

        $httpClient
            ->expects($this->once())
            ->method('get')
            ->with('/shipments/info/sh-42', [])
            ->willReturn($this->responseFromArray($payload));

        $endpoint = new Shipments($httpClient, $authenticator);
        $shipment = $endpoint->getShipment('sh-42');

        $this->assertInstanceOf(ShipmentDTO::class, $shipment);
        $this->assertSame('sh-42', $shipment->getId());
    }

    public function testNeedsAttentionReturnsShipmentDTOList(): void
    {
        $httpClient = $this->createMock(HttpClient::class);
        $authenticator = $this->createMock(Authenticator::class);
        $authenticator->method('isTokenValid')->willReturn(true);

        $payload = ['data' => [['id' => 'sh-a']]];

        $httpClient
            ->expects($this->once())
            ->method('get')
            ->with('/shipments/needs-attention', ['page' => 0])
            ->willReturn($this->responseFromArray($payload));

        $endpoint = new Shipments($httpClient, $authenticator);
        $result = $endpoint->needsAttention();

        $this->assertCount(1, $result);
        $this->assertInstanceOf(ShipmentDTO::class, $result[0]);
    }

    public function testExportToExcelReturnsFileField(): void
    {
        $httpClient = $this->createMock(HttpClient::class);
        $authenticator = $this->createMock(Authenticator::class);
        $authenticator->method('isTokenValid')->willReturn(true);

        $payload = ['file' => 'base64-excel'];

        $httpClient
            ->expects($this->once())
            ->method('delete')
            ->with('/shipments/exportToExcel', ['selectedOrders' => 'id-1,id-2'])
            ->willReturn($this->responseFromArray($payload));

        $endpoint = new Shipments($httpClient, $authenticator);
        $file = $endpoint->exportToExcel(['id-1', 'id-2']);

        $this->assertSame('base64-excel', $file);
    }

    public function testGetLeadtimeReturnsLeadTimeResponseDTO(): void
    {
        $httpClient = $this->createMock(HttpClient::class);
        $authenticator = $this->createMock(Authenticator::class);
        $authenticator->method('isTokenValid')->willReturn(true);

        $payload = ['expectedDeliveryDate' => '2026-02-19', 'leadTime' => 2];

        $httpClient
            ->expects($this->once())
            ->method('get')
            ->with('/shipments/leadtime', [
                'originCountry' => 'FR',
                'destinationCountry' => 'BE',
                'additionalServiceAlias' => 'S1,S2',
            ])
            ->willReturn($this->responseFromArray($payload));

        $endpoint = new Shipments($httpClient, $authenticator);
        $leadTime = $endpoint->getLeadtime('FR', null, 'BE', null, null, ['S1', 'S2']);

        $this->assertInstanceOf(LeadTimeResponseDTO::class, $leadTime);
        $this->assertSame('2026-02-19', $leadTime->getExpectedDeliveryDate());
    }

    private function responseFromArray(array $data): Response
    {
        $guzzleResponse = new GuzzleResponse(200, ['Content-Type' => 'application/json'], json_encode($data));
        return new Response($guzzleResponse);
    }
}
