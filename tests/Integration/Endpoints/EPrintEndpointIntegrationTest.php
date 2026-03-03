<?php

declare(strict_types=1);

namespace DPD\Tests\Integration\Endpoints;

use DPD\Endpoints\EPrintEndpoint;
use DPD\Http\SoapGateway;
use DPD\Models\EPrint\Address\AddressDTO;
use DPD\Models\EPrint\Address\AddressMiniDTO;
use DPD\Models\EPrint\CustomerDTO as EPrintCustomerDTO;
use DPD\Models\EPrint\Enum\LabelTypeEnum;
use DPD\Models\EPrint\Labels\LabelTypeDTO;
use DPD\Models\EPrint\Labels\PickupDataDTO;
use DPD\Models\EPrint\Parcel\ParcelDTO;
use DPD\Models\EPrint\ReferenceInBarcodeDTO;
use DPD\Models\EPrint\Service\SlaveRequestDTO;
use DPD\Models\EPrint\Service\SlaveServicesDTO;
use DPD\Models\Request\EPrint\CreateCollectionRequestBcDTO;
use DPD\Models\Request\EPrint\CreateMultiShipmentBcRequestDTO;
use DPD\Models\Request\EPrint\CreatePickupAtCustomerBcDTO;
use DPD\Models\Request\EPrint\CreateReverseInverseShipmentBcRequestDTO;
use DPD\Models\Request\EPrint\CreateReverseInverseShipmentWithLabelsBcRequestDTO;
use DPD\Models\Request\EPrint\CreateShipmentBcRequestDTO;
use DPD\Models\Request\EPrint\CreateShipmentWithLabelsBcRequestDTO;
use DPD\Models\Request\EPrint\GetLabelBcRequestDTO;
use DPD\Models\Request\EPrint\GetRetourLabelBcRequestDTO;
use DPD\Models\Request\EPrint\GetRetourShipmentDataBcRequestDTO;
use DPD\Models\Request\EPrint\GetServiceNoticeAnswersRequestDTO;
use DPD\Models\Request\EPrint\GetServiceNoticesRequestDTO;
use DPD\Models\Request\EPrint\GetShipmentBCRequestDTO;
use DPD\Models\Request\EPrint\GetShippingRequestDTO;
use DPD\Models\Request\EPrint\IsPickableOnDateRequestDTO;
use DPD\Models\Request\EPrint\TerminateCollectionRequestDTO;
use DPD\Models\Request\EPrint\TerminateShipmentRequestDTO;
use DPD\Models\Request\EPrint\UpdateServiceNoticeRequestDTO;
use DPD\Models\Response\EPrint\CreateCollectionRequestBcResponseDTO;
use DPD\Models\Response\EPrint\CreateMultiShipmentBcResponseDTO;
use DPD\Models\Response\EPrint\CreatePickupAtCustomerBcResponseDTO;
use DPD\Models\Response\EPrint\CreateReverseInverseShipmentBcResponseDTO;
use DPD\Models\Response\EPrint\CreateReverseInverseShipmentWithLabelsBcResponseDTO;
use DPD\Models\Response\EPrint\CreateShipmentBcResponseDTO;
use DPD\Models\Response\EPrint\CreateShipmentWithLabelsBcResponseDTO;
use DPD\Models\Response\EPrint\GetLabelBcResponseDTO;
use DPD\Models\Response\EPrint\GetNoticeAnswersResponseDTO;
use DPD\Models\Response\EPrint\GetRetourLabelBcResponseDTO;
use DPD\Models\Response\EPrint\GetRetourShipmentDataBcResponseDTO;
use DPD\Models\Response\EPrint\GetShipmentBcResponseDTO;
use DPD\Models\Response\EPrint\GetShippingResponseDTO;
use DPD\Models\Response\EPrint\ServiceNoticeResponseDTO;
use DPD\Models\Trace\CustomerDTO as TraceCustomerDTO;
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

        $customer = new EPrintCustomerDTO();
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

        $customer = new EPrintCustomerDTO();
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

        $customer = new EPrintCustomerDTO();
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

    public function testCreateCollectionRequestBcHydratesResponseDto(): void
    {
        $rawResponse = (object) [
            'CreateCollectionRequestBcResult' => (object) [
                'ShipmentBC' => [
                    (object) ['Type' => 'COLLECTIONREQUEST'],
                ],
            ],
        ];

        [$endpoint, $soapClient] = $this->createEndpoint(['CreateCollectionRequestBc' => $rawResponse]);

        $request = new CreateCollectionRequestBcDTO(
            250,
            1,
            123456,
            $this->createAddress('Receiver'),
            null,
            $this->createAddress('Shipper'),
            null,
            null,
            1,
            '01.03.2026'
        );

        $response = $endpoint->createCollectionRequestBc($request);

        self::assertInstanceOf(CreateCollectionRequestBcResponseDTO::class, $response);
        self::assertNotNull($response->getShipmentBC());
        self::assertCount(1, $response->getShipmentBC() ?? []);
        self::assertSame('CreateCollectionRequestBc', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testCreateMultiShipmentBcHydratesResponseDto(): void
    {
        $rawResponse = (object) [
            'CreateMultiShipmentBcResult' => (object) [
                'shipments' => (object) [
                    'ShipmentBc' => [
                        (object) ['Type' => 'EPRINT'],
                        (object) ['Type' => 'EPRINT'],
                    ],
                ],
            ],
        ];

        [$endpoint, $soapClient] = $this->createEndpoint(['CreateMultiShipmentBc' => $rawResponse]);

        $slaves = [
            new SlaveRequestDTO('1.00', 'REF-1', null, null, null, new SlaveServicesDTO()),
            new SlaveRequestDTO('1.10', 'REF-2', null, null, null, new SlaveServicesDTO()),
        ];

        $request = new CreateMultiShipmentBcRequestDTO(
            250,
            1,
            123456,
            $this->createAddress('Receiver'),
            null,
            $this->createAddress('Shipper'),
            null,
            null,
            null,
            $slaves
        );

        $response = $endpoint->createMultiShipmentBc($request);

        self::assertInstanceOf(CreateMultiShipmentBcResponseDTO::class, $response);
        self::assertNotNull($response->getShipments());
        self::assertArrayHasKey('ShipmentBc', $response->getShipments() ?? []);
        self::assertSame('CreateMultiShipmentBc', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testCreatePickupAtCustomerBcHydratesResponseDto(): void
    {
        $rawResponse = (object) [
            'CreatePickupAtCustomerBcResult' => (object) [
                'Sin' => 123456,
            ],
        ];

        [$endpoint, $soapClient] = $this->createEndpoint(['CreatePickupAtCustomerBc' => $rawResponse]);

        $request = new CreatePickupAtCustomerBcDTO();
        $request->address = $this->createAddress('Pickup');
        $request->customer = $this->createTraceCustomer();
        $request->pick_date = '01.03.2026';
        $request->pickup_data = new PickupDataDTO('08:00', '12:00');
        $request->shipments = ['12345678901234'];

        $response = $endpoint->createPickupAtCustomerBc($request);

        self::assertInstanceOf(CreatePickupAtCustomerBcResponseDTO::class, $response);
        self::assertSame(123456, $response->getSin());
        self::assertSame('CreatePickupAtCustomerBc', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testCreateReverseInverseShipmentBcHydratesResponseDto(): void
    {
        $rawResponse = (object) [
            'CreateReverseInverseShipmentBcResult' => (object) [
                'shipment' => [
                    (object) ['Type' => 'REVERSE'],
                ],
            ],
        ];

        [$endpoint, $soapClient] = $this->createEndpoint(['CreateReverseInverseShipmentBc' => $rawResponse]);

        $request = new CreateReverseInverseShipmentBcRequestDTO(
            250,
            1,
            123456,
            $this->createAddress('Receiver'),
            null,
            $this->createAddress('Shipper'),
            null,
            15,
            null,
            null,
            '1.20',
            '01.03.2026',
            'REF-RI'
        );

        $response = $endpoint->createReverseInverseShipmentBc($request);

        self::assertInstanceOf(CreateReverseInverseShipmentBcResponseDTO::class, $response);
        self::assertNotNull($response->getShipment());
        self::assertCount(1, $response->getShipment() ?? []);
        self::assertSame('CreateReverseInverseShipmentBc', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testCreateReverseInverseShipmentWithLabelsBcHydratesResponseDto(): void
    {
        $rawResponse = (object) [
            'CreateReverseInverseShipmentWithLabelsBcResult' => (object) [
                'shipment' => (object) ['Type' => 'REVERSE'],
                'labels' => [
                    (object) ['type' => 'EPRINT', 'label' => 'BASE64'],
                ],
            ],
        ];

        [$endpoint, $soapClient] = $this->createEndpoint(['CreateReverseInverseShipmentWithLabelsBc' => $rawResponse]);

        $request = new CreateReverseInverseShipmentWithLabelsBcRequestDTO(
            250,
            1,
            123456,
            $this->createAddress('Receiver'),
            null,
            $this->createAddress('Shipper'),
            null,
            new LabelTypeDTO(LabelTypeEnum::PDF),
            15,
            null,
            null,
            '01.03.2026',
            '1.20',
            'REF-RIL'
        );

        $response = $endpoint->createReverseInverseShipmentWithLabelsBc($request);

        self::assertInstanceOf(CreateReverseInverseShipmentWithLabelsBcResponseDTO::class, $response);
        self::assertNotNull($response->getShipment());
        self::assertNotNull($response->getLabels());
        self::assertCount(1, $response->getLabels() ?? []);
        self::assertSame('CreateReverseInverseShipmentWithLabelsBc', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testCreateShipmentBcHydratesResponseDto(): void
    {
        $rawResponse = (object) [
            'CreateShipmentBcResult' => (object) [
                'ShipmentBc' => [
                    (object) ['Type' => 'EPRINT'],
                ],
            ],
        ];

        [$endpoint, $soapClient] = $this->createEndpoint(['CreateShipmentBc' => $rawResponse]);

        $request = CreateShipmentBcRequestDTO::from([
            'customer_countrycode' => 250,
            'customer_centernumber' => 1,
            'customer_number' => 123456,
            'receiveraddress' => $this->createAddress('Receiver')->toArray(),
            'shipperaddress' => $this->createAddress('Shipper')->toArray(),
            'weight' => '1.20',
            'referencenumber' => 'REF-SH',
            'shippingdate' => '01.03.2026',
        ]);

        $response = $endpoint->createShipmentBc($request);

        self::assertInstanceOf(CreateShipmentBcResponseDTO::class, $response);
        self::assertNotNull($response->getShipmentBc());
        self::assertCount(1, $response->getShipmentBc() ?? []);
        self::assertSame('CreateShipmentBc', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testCreateShipmentWithLabelsBcHydratesResponseDto(): void
    {
        $rawResponse = (object) [
            'CreateShipmentWithLabelsBcResult' => (object) [
                'shipments' => [
                    (object) ['Type' => 'EPRINT'],
                ],
                'labels' => [
                    (object) ['type' => 'EPRINT', 'label' => 'BASE64'],
                ],
            ],
        ];

        [$endpoint, $soapClient] = $this->createEndpoint(['CreateShipmentWithLabelsBc' => $rawResponse]);

        $request = new CreateShipmentWithLabelsBcRequestDTO(
            250,
            1,
            123456,
            $this->createAddress('Receiver'),
            null,
            $this->createAddress('Shipper'),
            null,
            '1.20',
            'REF-SHL',
            new LabelTypeDTO(LabelTypeEnum::PDF)
        );

        $response = $endpoint->createShipmentWithLabelsBc($request);

        self::assertInstanceOf(CreateShipmentWithLabelsBcResponseDTO::class, $response);
        self::assertNotNull($response->getShipments());
        self::assertNotNull($response->getLabels());
        self::assertCount(1, $response->getLabels() ?? []);
        self::assertSame('CreateShipmentWithLabelsBc', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testGetLabelBcHydratesResponseDto(): void
    {
        $rawResponse = (object) [
            'GetLabelBcResult' => (object) [
                'labels' => [
                    (object) ['type' => 'EPRINT', 'label' => 'BASE64'],
                ],
                'shipment' => (object) ['BarcodeId' => '12345678901234'],
            ],
        ];

        [$endpoint, $soapClient] = $this->createEndpoint(['GetLabelBc' => $rawResponse]);

        $request = new GetLabelBcRequestDTO(
            $this->createTraceCustomer(),
            '12345678901234',
            null,
            new LabelTypeDTO(LabelTypeEnum::PDF),
            null,
            new ReferenceInBarcodeDTO(null)
        );

        $response = $endpoint->getLabelBc($request);

        self::assertInstanceOf(GetLabelBcResponseDTO::class, $response);
        self::assertNotNull($response->getLabels());
        self::assertNotNull($response->getShipment());
        self::assertSame('GetLabelBc', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testGetRetourLabelBcHydratesResponseDto(): void
    {
        $rawResponse = (object) [
            'GetRetourLabelBcResult' => (object) [
                'countrycode' => '250',
                'centernumber' => '001',
                'parcelnumber' => '12345678901234',
                'labels' => [
                    (object) ['type' => 'REVERSE', 'label' => 'BASE64'],
                ],
            ],
        ];

        [$endpoint, $soapClient] = $this->createEndpoint(['GetRetourLabelBc' => $rawResponse]);

        $request = new GetRetourLabelBcRequestDTO(
            '250',
            '001',
            '12345678901234',
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            new LabelTypeDTO(LabelTypeEnum::PDF)
        );

        $response = $endpoint->getRetourLabelBc($request);

        self::assertInstanceOf(GetRetourLabelBcResponseDTO::class, $response);
        self::assertSame('250', $response->getCountrycode());
        self::assertNotNull($response->getLabels());
        self::assertCount(1, $response->getLabels() ?? []);
        self::assertSame('GetRetourLabelBc', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testGetRetourShipmentDataBcHydratesResponseDto(): void
    {
        $rawResponse = (object) [
            'GetRetourShipmentDataBcResult' => (object) [
                'countrycode' => '250',
                'centernumber' => '001',
                'parcelnumber' => '12345678901234',
                'shipment' => (object) ['BarcodeId' => '12345678901234'],
            ],
        ];

        [$endpoint, $soapClient] = $this->createEndpoint(['GetRetourShipmentDataBc' => $rawResponse]);

        $request = new GetRetourShipmentDataBcRequestDTO(250, 1, 123456, '12345678901234');

        $response = $endpoint->getRetourShipmentDataBc($request);

        self::assertInstanceOf(GetRetourShipmentDataBcResponseDTO::class, $response);
        self::assertSame('250', $response->getCountrycode());
        self::assertNotNull($response->getShipment());
        self::assertSame('GetRetourShipmentDataBc', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testGetServiceNoticeAnswersHydratesResponseDto(): void
    {
        $rawResponse = (object) [
            'GetServiceNoticeAnswersResult' => (object) [
                'answers' => ['OK', 'KO'],
            ],
        ];

        [$endpoint, $soapClient] = $this->createEndpoint(['GetServiceNoticeAnswers' => $rawResponse]);

        $request = new GetServiceNoticeAnswersRequestDTO('pick', 'FR');

        $response = $endpoint->getServiceNoticeAnswers($request);

        self::assertInstanceOf(GetNoticeAnswersResponseDTO::class, $response);
        self::assertSame(['OK', 'KO'], $response->getAnswers());
        self::assertSame('GetServiceNoticeAnswers', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testGetShipmentBcHydratesResponseDto(): void
    {
        $rawResponse = (object) [
            'GetShipmentBcResult' => (object) [
                'countrycode' => '250',
                'centernumber' => '001',
                'BarcodeId' => '12345678901234',
            ],
        ];

        [$endpoint, $soapClient] = $this->createEndpoint(['GetShipmentBc' => $rawResponse]);

        $request = new GetShipmentBCRequestDTO('BC', '902', '12345678901234', $this->createTraceCustomer());

        $response = $endpoint->getShipmentBc($request);

        self::assertInstanceOf(GetShipmentBcResponseDTO::class, $response);
        self::assertSame('250', $response->getCountrycode());
        self::assertSame('12345678901234', $response->getBarcodeId());
        self::assertSame('GetShipmentBc', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testIsPickableOnDateWrapsRequestPayload(): void
    {
        [$endpoint, $soapClient] = $this->createEndpoint([
            'IsPickableOnDate' => (object) ['IsPickable' => true],
        ]);

        $request = new IsPickableOnDateRequestDTO(
            new AddressMiniDTO('1 rue de test', '75001', 'Paris', 'FR'),
            '01/03/2026'
        );

        $result = $endpoint->isPickableOnDate($request);

        self::assertIsObject($result);
        self::assertSame('IsPickableOnDate', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testTerminateCollectionRequestWrapsRequestPayload(): void
    {
        [$endpoint, $soapClient] = $this->createEndpoint([
            'TerminateCollectionRequest' => (object) ['ok' => true],
        ]);

        $request = new TerminateCollectionRequestDTO(
            new ParcelDTO(250, 1, 123456),
            $this->createTraceCustomer()
        );

        $result = $endpoint->terminateCollectionRequest($request);

        self::assertIsObject($result);
        self::assertSame('TerminateCollectionRequest', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testUpdateServiceNoticeWrapsRequestPayload(): void
    {
        [$endpoint, $soapClient] = $this->createEndpoint([
            'UpdateServiceNotice' => (object) ['ok' => true],
        ]);

        $request = new UpdateServiceNoticeRequestDTO(
            '12345678901234',
            '902',
            $this->createEPrintCustomer(),
            1,
            'Livrer au voisin',
            $this->createAddress('Destination')
        );

        $result = $endpoint->updateServiceNotice($request);

        self::assertIsObject($result);
        self::assertSame('UpdateServiceNotice', $soapClient->calls[0]['operation']);
        self::assertSame([['request' => $request->toArray()]], $soapClient->calls[0]['args']);
    }

    public function testGetInfoCallsExpectedOperationWithoutPayload(): void
    {
        [$endpoint, $soapClient] = $this->createEndpoint(['getInfo' => (object) ['version' => '1.0']]);

        $result = $endpoint->getInfo();

        self::assertIsObject($result);
        self::assertSame('getInfo', $soapClient->calls[0]['operation']);
        self::assertSame([], $soapClient->calls[0]['args']);
    }

    private function createAddress(string $name): AddressDTO
    {
        return new AddressDTO($name, 'FR', '75001', 'Paris', '1 rue de test');
    }

    private function createTraceCustomer(): TraceCustomerDTO
    {
        return new TraceCustomerDTO(250, 1, 123456);
    }

    private function createEPrintCustomer(): EPrintCustomerDTO
    {
        $customer = new EPrintCustomerDTO();
        $customer->countrycode = 250;
        $customer->centernumber = 1;
        $customer->number = 123456;

        return $customer;
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
        $clientProperty->setAccessible(true);
        $clientProperty->setValue($gateway, $soapClient);

        return [new EPrintEndpoint($gateway), $soapClient];
    }
}
