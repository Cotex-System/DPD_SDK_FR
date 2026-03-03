<?php

declare(strict_types=1);

namespace DPD\Tests\Unit\Endpoints;

use DPD\Endpoints\TraceEndpoint;
use DPD\Http\SoapGateway;
use DPD\Models\Request\Trace\GetLastTraceBcRequestDTO;
use DPD\Models\Request\Trace\GetShipmentTraceByReferenceDTO as GetShipmentTraceByReferenceRequestDTO;
use DPD\Models\Request\Trace\GetShipmentTraceRequestDTO;
use DPD\Models\Request\Trace\GetShipmentTraceSingleRequestDTO;
use DPD\Models\Response\Trace\GetLastTraceBcResponseDTO;
use DPD\Models\Response\Trace\GetShipmentTraceByReferenceDTO as GetShipmentTraceByReferenceResponseDTO;
use DPD\Models\Response\Trace\GetShipmentTraceDTO;
use DPD\Models\Response\Trace\GetShipmentTraceSingleDTO;
use DPD\Models\Trace\CustomerDTO;
use DPD\Models\Trace\ShipmentTraceDTO;
use DPD\Tests\Support\FakeSoapClient;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class TraceEndpointTest extends TestCase
{
    public function testGetLastTraceBcMapsRequestAndHydratesResponseDto(): void
    {
        $rawResponse = (object) [
            'GetLastTraceBcResult' => (object) [
                'GetLastTraceBcResponse' => (object) [
                    'ShipmentNumber' => 'SHP001',
                    'Trace' => (object) ['StatusDescription' => 'Delivered'],
                ],
            ],
        ];

        [$endpoint, $soapClient] = $this->createEndpoint(['GetLastTraceBc' => $rawResponse]);

        $request = new GetLastTraceBcRequestDTO(
            Parcels: ['250001234567890'],
            Customer: new CustomerDTO(250, 1, 123456),
            Language: 'FR'
        );

        $response = $endpoint->getLastTraceBc($request);

        self::assertInstanceOf(GetLastTraceBcResponseDTO::class, $response);
        self::assertSame('SHP001', $response->getShipmentNumber());
        self::assertSame('GetLastTraceBc', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testGetShipmentTraceMapsRequestAndHydratesShipmentTraceArray(): void
    {
        $rawResponse = (object) [
            'GetShipmentTraceResult' => (object) [
                'GetShipmentTraceResponse' => (object) [
                    'ShipmentTraces' => [
                        (object) ['ShipmentNumber' => 'SHP100'],
                        (object) ['ShipmentNumber' => 'SHP101'],
                    ],
                ],
            ],
        ];

        [$endpoint, $soapClient] = $this->createEndpoint(['GetShipmentTrace' => $rawResponse]);

        $request = new GetShipmentTraceRequestDTO(
            Customer: new CustomerDTO(250, 1, 123456),
            ShipmentNumber: 'SHP100',
            Language: 'FR',
            GetImages: false
        );

        $response = $endpoint->getShipmentTrace($request);

        self::assertInstanceOf(GetShipmentTraceDTO::class, $response);
        $shipmentTraces = $response->getShipmentTraces();
        if ($shipmentTraces === null) {
            self::fail('Expected ShipmentTraces to be hydrated, got null.');
        }
        self::assertCount(2, $shipmentTraces);
        self::assertContainsOnlyInstancesOf(ShipmentTraceDTO::class, $shipmentTraces);
        self::assertSame('GetShipmentTrace', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testGetShipmentTraceByReferenceMapsRequestAndHydratesResponse(): void
    {
        $rawResponse = (object) [
            'GetShipmentTraceByReferenceResult' => (object) [
                'GetShipmentTraceByReferenceResponse' => (object) [
                    'ShipmentTraces' => [
                        (object) ['ShipmentNumber' => 'REF001'],
                    ],
                ],
            ],
        ];

        [$endpoint, $soapClient] = $this->createEndpoint(['GetShipmentTraceByReference' => $rawResponse]);

        $request = new GetShipmentTraceByReferenceRequestDTO(
            Reference: 'ORDER-123',
            Customer: new CustomerDTO(250, 1, 123456),
            ShippingDate: null,
            Language: 'FR',
            ReferenceSearchMode: null,
            GetImages: false,
            Options: null
        );

        $response = $endpoint->getShipmentTraceByReference($request);

        self::assertInstanceOf(GetShipmentTraceByReferenceResponseDTO::class, $response);
        $shipmentTraces = $response->getShipmentTraces();
        self::assertCount(1, $shipmentTraces);
        self::assertContainsOnlyInstancesOf(ShipmentTraceDTO::class, $shipmentTraces);
        self::assertSame('GetShipmentTraceByReference', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testGetShipmentTraceSingleMapsRequestAndHydratesSingleTrace(): void
    {
        $rawResponse = (object) [
            'GetShipmentTraceSingleResult' => (object) [
                'GetShipmentTraceSingleResponse' => (object) [
                    'ShipmentTrace' => (object) ['ShipmentNumber' => 'SINGLE001'],
                ],
            ],
        ];

        [$endpoint, $soapClient] = $this->createEndpoint(['GetShipmentTraceSingle' => $rawResponse]);

        $request = new GetShipmentTraceSingleRequestDTO(
            Customer: new CustomerDTO(250, 1, 123456),
            ShipmentNumber: 'SINGLE001',
            Language: 'FR',
            GetImages: false,
            ExpandContainerMode: null,
            Options: null
        );

        $response = $endpoint->getShipmentTraceSingle($request);

        self::assertInstanceOf(GetShipmentTraceSingleDTO::class, $response);
        $shipmentTrace = $response->getShipmentTrace();
        if ($shipmentTrace === null) {
            self::fail('Expected ShipmentTrace to be hydrated, got null.');
        }
        self::assertInstanceOf(ShipmentTraceDTO::class, $shipmentTrace);
        self::assertSame('GetShipmentTraceSingle', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testIsAliveCallsExpectedOperationWithoutPayload(): void
    {
        [$endpoint, $soapClient] = $this->createEndpoint(['isAlive' => true]);

        $result = $endpoint->isAlive();

        self::assertTrue($result);
        self::assertSame('isAlive', $soapClient->calls[0]['operation']);
        self::assertSame([], $soapClient->calls[0]['args']);
    }

    public function testVerifyConfigurationWrapsRequestPayload(): void
    {
        [$endpoint, $soapClient] = $this->createEndpoint(['VerifyConfiguration' => (object) ['ok' => true]]);

        $request = ['foo' => 'bar'];
        $result = $endpoint->verifyConfiguration($request);

        self::assertIsObject($result);
        self::assertSame('VerifyConfiguration', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request]], $soapClient->calls[0]['args']);
    }

    public function testGetInfoCallsExpectedOperationWithoutPayload(): void
    {
        [$endpoint, $soapClient] = $this->createEndpoint(['getInfo' => (object) ['version' => '1.0']]);

        $result = $endpoint->getInfo();

        self::assertIsObject($result);
        self::assertSame('getInfo', $soapClient->calls[0]['operation']);
        self::assertSame([], $soapClient->calls[0]['args']);
    }

    /**
     * @param array<string, mixed> $responses
     * @return array{0: TraceEndpoint, 1: FakeSoapClient}
     */
    private function createEndpoint(array $responses): array
    {
        $soapClient = new FakeSoapClient($responses);

        $reflection = new ReflectionClass(SoapGateway::class);
        /** @var SoapGateway $gateway */
        $gateway = $reflection->newInstanceWithoutConstructor();

        $clientProperty = $reflection->getProperty('client');
        $clientProperty->setAccessible(true);
        $clientProperty->setValue($gateway, $soapClient);

        return [new TraceEndpoint($gateway), $soapClient];
    }
}
