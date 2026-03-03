<?php

declare(strict_types=1);

namespace DPD\Tests\Integration\Endpoints;

use DPD\Endpoints\EPrintEndpoint;
use DPD\Http\SoapGateway;
use DPD\Models\EPrint\Address\AddressMiniDTO;
use DPD\Models\EPrint\CustomerDTO;
use DPD\Models\Request\EPrint\GetServiceNoticesRequestDTO;
use DPD\Models\Request\EPrint\GetShippingRequestDTO;
use DPD\Models\Request\EPrint\TerminateShipmentRequestDTO;
use DPD\Models\Response\EPrint\GetShippingResponseDTO;
use DPD\Models\Response\EPrint\ServiceNoticeResponseDTO;
use DPD\Tests\Support\FakeSoapClient;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

final class EPrintEndpointIntegrationTest extends TestCase
{
    public function testGetServiceNoticesMapsRequestAndHydratesResponseDto(): void
    {
        $rawResponse = (object) [
            'GetServiceNoticesResult' => (object) [
                'GetServiceNoticesResponse' => (object) [
                    'serviceNotices' => [
                        (object) ['code' => 'SN01', 'label' => 'Avis de passage'],
                    ],
                ],
            ],
        ];

        [$endpoint, $soapClient] = $this->createEndpoint(['GetServiceNotices' => $rawResponse]);

        $customer = new CustomerDTO();
        $customer->countrycode = 250;
        $customer->centernumber = 1;
        $customer->number = 123456;

        $request = new GetServiceNoticesRequestDTO($customer, 'FR');

        $response = $endpoint->getServiceNotices($request);

        self::assertInstanceOf(ServiceNoticeResponseDTO::class, $response);
        self::assertCount(1, $response->getServiceNotices() ?? []);
        self::assertSame('GetServiceNotices', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testGetShippingMapsRequestAndHydratesResponseDto(): void
    {
        $rawResponse = (object) [
            'GetShippingResult' => (object) [
                'GetShippingResponse' => (object) [
                    'shippings' => [
                        (object) ['parcelnumber' => 'P0001'],
                        (object) ['parcelnumber' => 'P0002'],
                    ],
                ],
            ],
        ];

        [$endpoint, $soapClient] = $this->createEndpoint(['GetShipping' => $rawResponse]);

        $customer = new CustomerDTO();
        $customer->countrycode = 250;
        $customer->centernumber = 1;
        $customer->number = 123456;

        $request = new GetShippingRequestDTO('01/03/2026', $customer);

        $response = $endpoint->getShipping($request);

        self::assertInstanceOf(GetShippingResponseDTO::class, $response);
        self::assertCount(2, $response->getShippings() ?? []);
        self::assertSame('GetShipping', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testTerminateShipmentWrapsRequestPayload(): void
    {
        [$endpoint, $soapClient] = $this->createEndpoint([
            'TerminateShipment' => (object) ['ok' => true],
        ]);

        $customer = new CustomerDTO();
        $customer->countrycode = 250;
        $customer->centernumber = 1;
        $customer->number = 123456;

        $request = new TerminateShipmentRequestDTO('BC123456789', $customer);

        $result = $endpoint->terminateShipment($request);

        self::assertIsObject($result);
        self::assertSame('TerminateShipment', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testIsDeliverableOnDateWrapsRequestPayload(): void
    {
        [$endpoint, $soapClient] = $this->createEndpoint([
            'IsDeliverableOnDate' => (object) ['IsDeliverable' => true],
        ]);

        $request = new \DPD\Models\Request\EPrint\IsDeliverableOnDateRequestDTO(
            new AddressMiniDTO('1 rue de test', '75001', 'Paris', 'FR'),
            '01/03/2026'
        );

        $result = $endpoint->isDeliverableOnDate($request);

        self::assertIsObject($result);
        self::assertSame('IsDeliverableOnDate', $soapClient->calls[0]['operation']);
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

    /**
     * @param array<string, mixed> $responses
     * @return array{0: EPrintEndpoint, 1: FakeSoapClient}
     */
    private function createEndpoint(array $responses): array
    {
        $soapClient = new FakeSoapClient($responses);

        $reflection = new ReflectionClass(SoapGateway::class);
        /** @var SoapGateway $gateway */
        $gateway = $reflection->newInstanceWithoutConstructor();

        $clientProperty = $reflection->getProperty('client');
        $clientProperty->setValue($gateway, $soapClient);

        return [new EPrintEndpoint($gateway), $soapClient];
    }
}
