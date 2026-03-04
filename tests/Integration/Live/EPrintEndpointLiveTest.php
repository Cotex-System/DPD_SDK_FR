<?php

declare(strict_types=1);

namespace DPD\Tests\Integration\Live;

use DPD\Config\Config;
use DPD\DPDClient;
use DPD\Exceptions\TransportException;
use DPD\Models\EPrint\Address\AddressDTO;
use DPD\Models\EPrint\CustomerDTO;
use DPD\Models\EPrint\Enum\LabelTypeEnum;
use DPD\Models\EPrint\Enum\ReferenceTypeEnum;
use DPD\Models\EPrint\Labels\LabelTypeDTO;
use DPD\Models\EPrint\Labels\PickupDataDTO;
use DPD\Models\EPrint\ReferenceInBarcodeDTO;
use DPD\Models\Request\EPrint\CreateCollectionRequestBcDTO;
use DPD\Models\Request\EPrint\CreatePickupAtCustomerBcDTO;
use DPD\Models\Request\EPrint\CreateReverseInverseShipmentBcRequestDTO;
use DPD\Models\Request\EPrint\CreateReverseInverseShipmentWithLabelsBcRequestDTO;
use DPD\Models\EPrint\Service\SlaveRequestDTO;
use DPD\Models\EPrint\Service\SlaveServicesDTO;
use DPD\Models\Request\EPrint\CreateMultiShipmentBcRequestDTO;
use DPD\Models\Request\EPrint\CreateShipmentBcRequestDTO;
use DPD\Models\Request\EPrint\CreateShipmentWithLabelsBcRequestDTO;
use DPD\Models\Request\EPrint\GetLabelBcRequestDTO;
use DPD\Models\Request\EPrint\GetRetourLabelBcRequestDTO;
use DPD\Models\Request\EPrint\GetRetourShipmentDataBcRequestDTO;
use DPD\Models\Request\EPrint\GetServiceNoticeAnswersRequestDTO;
use DPD\Models\Request\EPrint\GetServiceNoticesRequestDTO;
use DPD\Models\Request\EPrint\GetShipmentBCRequestDTO;
use DPD\Models\Request\EPrint\GetShippingRequestDTO;
use DPD\Models\Request\EPrint\IsDeliverableOnDateRequestDTO;
use DPD\Models\Request\EPrint\IsPickableOnDateRequestDTO;
use DPD\Models\Request\EPrint\TerminateCollectionRequestBcDTO;
use DPD\Models\Request\EPrint\TerminateShipmentRequestDTO;
use DPD\Models\Request\EPrint\UpdateServiceNoticeRequestDTO;
use DPD\Models\EPrint\Address\AddressMiniDTO;
use DPD\Models\Response\EPrint\CreateMultiShipmentBcResponseDTO;
use DPD\Models\Response\EPrint\CreateShipmentBcResponseDTO;
use DPD\Models\Response\EPrint\CreateShipmentWithLabelsBcResponseDTO;
use DPD\Models\Response\EPrint\GetLabelBcResponseDTO;
use DPD\Models\Response\EPrint\GetShipmentBcResponseDTO;
use DPD\Models\Response\EPrint\GetShippingResponseDTO;
use DPD\Models\Response\EPrint\ServiceNoticeResponseDTO;
use DPD\Models\Trace\CustomerDTO as TraceCustomerDTO;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\TestCase;

#[Group('live')]
final class EPrintEndpointLiveTest extends TestCase
{
    private static ?DPDClient $client = null;
    /** @var array{Barcode:string, BarcodeSource:string, BarcodeId:string}|null */
    private static ?array $lastCreatedShipmentIds = null;
    /** @var array{Barcode:string, BarcodeSource:string, BarcodeId:string, OriginalBarcode:string, ParcelNumber:?string, Reference:?string}|null */
    private static ?array $lastResolvedShipmentContext = null;

    public static function setUpBeforeClass(): void
    {
        if (getenv('DPD_RUN_LIVE_TESTS') !== '1') {
            self::markTestSkipped('Live tests disabled. Set DPD_RUN_LIVE_TESTS=1 to enable real network calls.');
        }

        $config = new Config();
        if ($config->userId() === null || $config->password() === null) {
            self::markTestSkipped(
                'Missing DPD credentials. Configure DPD_TEST_USERID/DPD_TEST_PASSWORD (or fallback DPD_USERID/DPD_PASSWORD).'
            );
        }

        self::$client = new DPDClient($config);

    }

    public function testIsAliveSmoke(): void
    {
        self::assertNotNull(self::$client);

        $result = self::$client->eprint()->isAlive();

        self::assertNotNull($result);
    }

    public function testGetInfoSmoke(): void
    {
        self::assertNotNull(self::$client);

        try {
            $result = self::$client->eprint()->getInfo();
        } catch (TransportException $exception) {
            $message = $exception->getMessage();
            if (str_contains($message, 'No permission for this ip-Address')) {
                self::markTestSkipped('EPrint getInfo requires IP whitelisting on DPD side: ' . $message);
            }

            self::fail('EPrint getInfo network call failed: ' . $message);
            return;
        }
        
        self::assertNotNull($result);
    }

    public function testGetServiceNoticesWithCustomerContext(): void
    {
        self::assertNotNull(self::$client);

        $customer = $this->requireEprintCustomerFromEnv();
        $request = new GetServiceNoticesRequestDTO($customer, getenv('DPD_LIVE_LANGUAGE') ?: 'FR');

        $result = $this->executeExtendedCall(
            fn () => self::$client->eprint()->getServiceNotices($request),
            'GetServiceNotices'
        );

        self::assertNotNull($result);
        self::assertInstanceOf(ServiceNoticeResponseDTO::class, $result);
        self::assertIsArray($result->getServiceNotices());
    }

    public function testGetShippingWithCustomerContext(): void
    {
        self::assertNotNull(self::$client);

        $customer = $this->requireEprintCustomerFromEnv();
        $date = getenv('DPD_LIVE_SHIPPING_DATE') ?: date('d.m.Y');

        $request = new GetShippingRequestDTO($date, $customer);

        $result = $this->executeExtendedCall(
            fn () => self::$client->eprint()->getShipping($request),
            'GetShipping'
        );

        self::assertNotNull($result);
        self::assertInstanceOf(GetShippingResponseDTO::class, $result);
        self::assertIsArray($result->getShippings());
    }

    public function testCreateShipmentBcWithBusinessContext(): void
    {
        self::assertNotNull(self::$client);
        $this->requireCreateShipmentTestsEnabled();

        $request = $this->buildCreateShipmentBcRequest();
        $result = self::$client->eprint()->createShipmentBc($request);
        
        self::assertNotNull($result);
        self::assertInstanceOf(CreateShipmentBcResponseDTO::class, $result);
        self::assertNotNull($result->getShipmentBc());
        self::assertNotEmpty($result->getShipmentBc());

        self::$lastCreatedShipmentIds = $this->extractShipmentIdentifiersFromCreateShipmentResponse($result);
    }

    public function testCreateShipmentWithLabelsBcWithBusinessContext(): void
    {
        self::assertNotNull(self::$client);
        $this->requireCreateShipmentTestsEnabled();

        $request = $this->buildCreateShipmentWithLabelsBcRequest();

        $result = self::$client->eprint()->createShipmentWithLabelsBc($request);
        
        self::assertNotNull($result);
        self::assertInstanceOf(CreateShipmentWithLabelsBcResponseDTO::class, $result);
        self::assertNotNull($result->getShipments());
        
        self::assertNotNull($result->getLabels());
        self::assertNotEmpty($result->getShipments());
        self::assertNotEmpty($result->getLabels());
    }

    public function testCreateMultiShipmentBcWithBusinessContext(): void
    {
        self::assertNotNull(self::$client);
        $this->requireCreateShipmentTestsEnabled();

        $request = $this->buildCreateMultiShipmentBcRequest();

        $result = self::$client->eprint()->createMultiShipmentBc($request);
        
        self::assertNotNull($result);
        self::assertInstanceOf(CreateMultiShipmentBcResponseDTO::class, $result);
        self::assertNotNull($result->getShipments());
        self::assertArrayHasKey('ShipmentBc', $result->getShipments() ?? []);
        self::assertCount(2, $result->getShipments()['ShipmentBc'] ?? []);
    }

    public function testGetShipmentBcFromCreatedShipmentHydratesDto(): void
    {
        self::assertNotNull(self::$client);
        $this->requireCreateShipmentTestsEnabled();

        $ids = self::$lastCreatedShipmentIds;
        if ($ids === null) {
            $created = self::$client->eprint()->createShipmentBc($this->buildCreateShipmentBcRequest());
            self::assertInstanceOf(CreateShipmentBcResponseDTO::class, $created);
            $ids = $this->extractShipmentIdentifiersFromCreateShipmentResponse($created);
            self::$lastCreatedShipmentIds = $ids;
        }

        $request = new GetShipmentBCRequestDTO(
            $ids['Barcode'],
            $ids['BarcodeSource'],
            $ids['BarcodeId'],
            $this->createTraceCustomerFromEnv()
        );

        $result = self::$client->eprint()->getShipmentBc($request);

        self::assertInstanceOf(GetShipmentBcResponseDTO::class, $result);
        self::assertNotNull($result->getBarcodeId());
    }

    public function testGetLabelBcFromCreatedShipmentHydratesDto(): void
    {
        self::assertNotNull(self::$client);
        $this->requireCreateShipmentTestsEnabled();

        $ids = self::$lastCreatedShipmentIds;
        if ($ids === null) {
            $created = self::$client->eprint()->createShipmentBc($this->buildCreateShipmentBcRequest());
            self::assertInstanceOf(CreateShipmentBcResponseDTO::class, $created);
            $ids = $this->extractShipmentIdentifiersFromCreateShipmentResponse($created);
            self::$lastCreatedShipmentIds = $ids;
        }

        $request = new GetLabelBcRequestDTO(
            $this->createTraceCustomerFromEnv(),
            $ids['Barcode'],
            null,
            new LabelTypeDTO(LabelTypeEnum::PDF),
            null,
            new ReferenceInBarcodeDTO(ReferenceTypeEnum::REFERENCE_NUMBER)
        );

        $result = self::$client->eprint()->getLabelBc($request);

        self::assertInstanceOf(GetLabelBcResponseDTO::class, $result);
        self::assertNotNull($result->getLabels());
        self::assertNotEmpty($result->getLabels());
        self::assertNotNull($result->getShipment());
    }

    public function testCreateCollectionRequestBcWithBusinessContext(): void
    {
        self::assertNotNull(self::$client);
        $this->requireExtendedLiveEndpointTestsEnabled();

        $customer = $this->requireEprintCustomerFromEnv();
        [$receiverAddress, $shipperAddress] = $this->buildFrenchAddresses();

        $request = new CreateCollectionRequestBcDTO(
            (int) $customer->countrycode,
            (int) $customer->centernumber,
            (int) $customer->number,
            $receiverAddress,
            null,
            $shipperAddress,
            null,
            null,
            1,
            date('d.m.Y', strtotime('+3 day')),
            '08:00',
            '12:00',
            'Collecte live test',
            'Appeler avant',
            null,
            'COLL-' . date('YmdHis')
        );
        
        
        $result = $this->executeExtendedCall(
            fn () => self::$client->eprint()->createCollectionRequestBc($request),
            'CreateCollectionRequestBc'
        );
        self::assertNotNull($result);
        self::assertNotNull($result->getShipmentBC());
    }

    public function testCreatePickupAtCustomerBcWithBusinessContext(): void
    {
        self::assertNotNull(self::$client);
        $this->requireExtendedLiveEndpointTestsEnabled();

        $request = new CreatePickupAtCustomerBcDTO();
        $request->shipperaddress  = $this->buildFrenchAddresses()[1];
       
        $request->customer = $this->createTraceCustomerFromEnv();
        $request->pick_date = date('d.m.Y', strtotime('+1 day'));
        $request->pickup_data = new PickupDataDTO('08:00', '12:00', 'Pickup live test', 'Interphone');
        $request->shipments = [];

        $result = $this->executeExtendedCall(
            fn () => self::$client->eprint()->createPickupAtCustomerBc($request),
            'CreatePickupAtCustomerBc'
        );
        self::assertNotNull($result);
        self::assertGreaterThan(0, $result->getSin());
    }

    public function testCreateReverseInverseShipmentBcWithBusinessContext(): void
    {
        self::assertNotNull(self::$client);
        $this->requireExtendedLiveEndpointTestsEnabled();

        $customer = $this->requireEprintCustomerFromEnv();
        [$receiverAddress, $shipperAddress] = $this->buildFrenchAddresses();

        $request = new CreateReverseInverseShipmentBcRequestDTO(
            (int) $customer->countrycode,
            (int) $customer->centernumber,
            (int) $customer->number,
            $receiverAddress,
            null,
            $shipperAddress,
            null,
            15,
            null,
            null,
            '1.20',
            date('d.m.Y'),
            'REV-' . date('YmdHis')
        );

        $result = $this->executeExtendedCall(
            fn () => self::$client->eprint()->createReverseInverseShipmentBc($request),
            'CreateReverseInverseShipmentBc'
        );
        self::assertNotNull($result);
        self::assertNotNull($result->getShipment());
    }

    public function testCreateReverseInverseShipmentWithLabelsBcWithBusinessContext(): void
    {
        self::assertNotNull(self::$client);
        $this->requireExtendedLiveEndpointTestsEnabled();

        $customer = $this->requireEprintCustomerFromEnv();
        [$receiverAddress, $shipperAddress] = $this->buildFrenchAddresses();

        $request = new CreateReverseInverseShipmentWithLabelsBcRequestDTO(
            (int) $customer->countrycode,
            (int) $customer->centernumber,
            (int) $customer->number,
            $receiverAddress,
            null,
            $shipperAddress,
            null,
            new LabelTypeDTO(LabelTypeEnum::PDF),
            15,
            null,
            null,
            date('d.m.Y'),
            '1.20',
            'REVL-' . date('YmdHis'),"custom Text"
            ,true
        );

        $result = $this->executeExtendedCall(
            fn () => self::$client->eprint()->createReverseInverseShipmentWithLabelsBc($request),
            'CreateReverseInverseShipmentWithLabelsBc'
        );
        
        self::assertNotNull($result);
        self::assertNotNull($result->getShipment());
        self::assertNotNull($result->getLabels());
    }

    public function testGetServiceNoticeAnswersWithBusinessContext(): void
    {
        self::assertNotNull(self::$client);
        $this->requireExtendedLiveEndpointTestsEnabled();

        $request = new GetServiceNoticeAnswersRequestDTO('pick', getenv('DPD_LIVE_LANGUAGE') ?: 'FR');
        $result = $this->executeExtendedCall(
            fn () => self::$client->eprint()->getServiceNoticeAnswers($request),
            'GetServiceNoticeAnswers'
        );

        self::assertNotNull($result);
        self::assertIsArray($result->getAnswers());
    }

    public function testGetRetourLabelBcWithBusinessContext(): void
    {
        self::assertNotNull(self::$client);
        $this->requireExtendedLiveEndpointTestsEnabled();

        $customer = $this->requireEprintCustomerFromEnv();
        $context = $this->resolveLiveShipmentContext();

        $country = getenv('DPD_LIVE_RETOUR_COUNTRYCODE') ?: (string) $customer->countrycode;
        $center = getenv('DPD_LIVE_RETOUR_CENTERNUMBER') ?: (string) $customer->centernumber;
        $parcel = getenv('DPD_LIVE_RETOUR_PARCELNUMBER') ?: ($context['ParcelNumber'] ?? '');
        
        if ($parcel === '') {
            self::markTestSkipped('GetRetourLabelBc requires a parcel number. Provide DPD_LIVE_RETOUR_PARCELNUMBER or enable live create/get chaining.');
        }

        $request = new GetRetourLabelBcRequestDTO(
            (string) $country,
            (string) $center,
            (string) $parcel,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            new LabelTypeDTO(LabelTypeEnum::PDF)
        );

        $result = $this->executeExtendedCall(
            fn () => self::$client->eprint()->getRetourLabelBc($request),
            'GetRetourLabelBc'
        );
        self::assertNotNull($result);
        self::assertNotNull($result->getLabels());
    }

    public function testGetRetourShipmentDataBcWithBusinessContext(): void
    {
        self::assertNotNull(self::$client);
        $this->requireExtendedLiveEndpointTestsEnabled();

        $customer = $this->requireEprintCustomerFromEnv();
        $context = $this->resolveLiveShipmentContext();

        $country = getenv('DPD_LIVE_RETOUR_COUNTRYCODE') ?: (string) $customer->countrycode;
        $center = getenv('DPD_LIVE_RETOUR_CENTERNUMBER') ?: (string) $customer->centernumber;
        $number = getenv('DPD_LIVE_RETOUR_NUMBER') ?: (string) $customer->number;
        $barcode = getenv('DPD_LIVE_RETOUR_ORIGINAL_BARCODE') ?: ($context['OriginalBarcode'] ?? '');
        
        if ($barcode === '') {
            self::markTestSkipped('GetRetourShipmentDataBc requires original barcode. Provide DPD_LIVE_RETOUR_ORIGINAL_BARCODE or enable live create/get chaining.');
        }
       
        $request = new GetRetourShipmentDataBcRequestDTO(
            (int) $country,
            (int) $center,
            (int) $number,
            (string) $barcode,
            isset($context['BarcodeSource']) && $context['BarcodeSource'] !== '' ? (int) $context['BarcodeSource'] : null,
            isset($context['BarcodeId']) && $context['BarcodeId'] !== '' ? (string) $context['BarcodeId'] : null
        );
        $result = $this->executeExtendedCall(
            fn () => self::$client->eprint()->getRetourShipmentDataBc($request),
            'GetRetourShipmentDataBc'
        );
        
        self::assertNotNull($result);
        self::assertNotNull($result->getShipment()); 
    }

    public function testIsDeliverableOnDateWithBusinessContext(): void
    {
        self::assertNotNull(self::$client);
        $this->requireExtendedLiveEndpointTestsEnabled();

        $request = new IsDeliverableOnDateRequestDTO(
            new AddressMiniDTO('10 Rue de la Paix', '75008', 'Paris', 'FR'),
            date('d.m/Y', strtotime('+1 day'))
        );
        
        $result = $this->executeExtendedCall(
            fn () => self::$client->eprint()->isDeliverableOnDate($request),
            'IsDeliverableOnDate'
        );
        self::assertNotNull($result);
    }

    public function testIsPickableOnDateWithBusinessContext(): void
    {
        self::assertNotNull(self::$client);
        $this->requireExtendedLiveEndpointTestsEnabled();

        $request = new IsPickableOnDateRequestDTO(
            new AddressMiniDTO('10 Rue de la Paix', '75008', 'Paris', 'FR'),
            date('d.m.Y', strtotime('+1 day'))
        );

        $result = $this->executeExtendedCall(
            fn () => self::$client->eprint()->isPickableOnDate($request),
            'IsPickableOnDate'
        );
        self::assertNotNull($result);
    }

    public function testTerminateCollectionRequestWithBusinessContext(): void
    {
        self::assertNotNull(self::$client);
        $this->requireExtendedLiveEndpointTestsEnabled();

        $context = $this->resolveLiveShipmentContext();
        $barcode = getenv('DPD_LIVE_TERMINATE_COLLECTION_BARCODE') ?: ($context['Barcode'] ?? '');
        if ($barcode === '') {
            $legacyParcel = getenv('DPD_LIVE_TERMINATE_COLLECTION_PARCELNUMBER') ?: ($context['ParcelNumber'] ?? '');
            if ($legacyParcel !== '') {
                $barcode = $legacyParcel;
            }
        }

        if ($barcode === '') {
            self::markTestSkipped('TerminateCollectionRequestBc requires barcode. Provide DPD_LIVE_TERMINATE_COLLECTION_BARCODE or enable live create/get chaining.');
        }

        $request = new TerminateCollectionRequestBcDTO((string) $barcode);

        $result = $this->executeExtendedCall(
            fn () => self::$client->eprint()->terminateCollectionRequestBc($request),
            'TerminateCollectionRequestBc'
        );
        self::assertNotNull($result);
    }

    public function testTerminateShipmentWithBusinessContext(): void
    {
        self::assertNotNull(self::$client);
        $this->requireExtendedLiveEndpointTestsEnabled();

        $context = $this->resolveLiveShipmentContext();
        $barcodeId = getenv('DPD_LIVE_TERMINATE_BARCODE_ID') ?: ($context['BarcodeId'] ?? '');
        if ($barcodeId === '') {
            self::markTestSkipped('TerminateShipment requires barcode id. Provide DPD_LIVE_TERMINATE_BARCODE_ID or enable live create/get chaining.');
        }

        $customer = $this->requireEprintCustomerFromEnv();
        $request = new TerminateShipmentRequestDTO((string) $barcodeId, $customer);

        $result = $this->executeExtendedCall(
            fn () => self::$client->eprint()->terminateShipment($request),
            'TerminateShipment'
        );
        self::assertNotNull($result);
    }

    public function testUpdateServiceNoticeWithBusinessContext(): void
    {
        self::assertNotNull(self::$client);
        $this->requireExtendedLiveEndpointTestsEnabled();

        $context = $this->resolveLiveShipmentContext();
        $barcodeId = getenv('DPD_LIVE_NOTICE_BARCODE_ID') ?: ($context['BarcodeId'] ?? '');
        $barcodeSource = getenv('DPD_LIVE_NOTICE_BARCODE_SOURCE') ?: ($context['BarcodeSource'] ?? '');
        $answerId = getenv('DPD_LIVE_NOTICE_ANSWER_ID') ?: $this->resolveServiceNoticeAnswerIdFromLiveContext();
        
        if ($barcodeId === '' || $barcodeSource === '' || $answerId === null || $answerId === '') {
            self::markTestSkipped('UpdateServiceNotice requires barcode id/source and answer id. Provide DPD_LIVE_NOTICE_* vars or enable live create/get chaining.');
        }

        $request = new UpdateServiceNoticeRequestDTO(
            (string) $barcodeId,
            (string) $barcodeSource,
            $this->requireEprintCustomerFromEnv(),
            (int) $answerId,
            'Live notice update test',
            $this->buildFrenchAddresses()[0]
        );

        $result = $this->executeExtendedCall(
            fn () => self::$client->eprint()->updateServiceNotice($request),
            'UpdateServiceNotice'
        );
        self::assertNotNull($result);
    }

    private function requireEprintCustomerFromEnv(): CustomerDTO
    {
        $country = getenv('DPD_LIVE_COUNTRYCODE');
        $center = getenv('DPD_LIVE_CENTERNUMBER');
        $number = getenv('DPD_LIVE_CUSTOMER_NUMBER');

        if ($country === false || $center === false || $number === false || $country === '' || $center === '' || $number === '') {
            self::markTestSkipped(
                'Missing business context. Set DPD_LIVE_COUNTRYCODE, DPD_LIVE_CENTERNUMBER and DPD_LIVE_CUSTOMER_NUMBER.'
            );
        }

        if (!preg_match('/^\d+$/', (string) $country)) {
            self::fail('Invalid DPD_LIVE_COUNTRYCODE. Expected numeric country code (e.g. 250 for France).');
        }

        if (!preg_match('/^\d+$/', (string) $center)) {
            self::fail('Invalid DPD_LIVE_CENTERNUMBER. Expected numeric center number.');
        }

        if (!preg_match('/^\d+$/', (string) $number)) {
            self::fail('Invalid DPD_LIVE_CUSTOMER_NUMBER. Expected numeric account number.');
        }

        $customer = new CustomerDTO();
        $customer->countrycode = (int) $country;
        $customer->centernumber = (int) $center;
        $customer->number = (int) $number;

        return $customer;
    }

    private function requireCreateShipmentTestsEnabled(): void
    {
        if (getenv('DPD_RUN_LIVE_TESTS') !== '1') {
            self::markTestSkipped(
                'Create shipment live tests disabled. Set DPD_RUN_LIVE_TESTS=1 to enable real creation calls.'
            );
        }
    }

    private function requireExtendedLiveEndpointTestsEnabled(): void
    {
        if (getenv('DPD_RUN_LIVE_TESTS') !== '1') {
            self::markTestSkipped('Extended live endpoint tests disabled. Set DPD_RUN_LIVE_TESTS=1.');
        }
    }

    /**
     * @template T
     * @param callable():T $callback
     * @return T
     */
    private function executeExtendedCall(callable $callback, string $operation): mixed
    {
        try {
            return $callback();
        } catch (TransportException $exception) {
            $message = $exception->getMessage();
            $skipMarkers = [
                'Permission denied',
                'Server currently unavailable',
                'No permission for this ip-Address',
                'Invalid pick_date',
                'No address given',
                'SOAP-ERROR: Encoding',
                'No zipCode in address given',
                'Customer not valid',
                'No Data found',
            ];

            foreach ($skipMarkers as $marker) {
                if (str_contains($message, $marker)) {
                    self::markTestSkipped($operation . ' cannot be validated in this live context: ' . $message);
                }
            }

            throw $exception;
        }
    }

    private function buildCreateShipmentBcRequest(): CreateShipmentBcRequestDTO
    {
        $customer = $this->requireEprintCustomerFromEnv();
        [$receiverAddress, $shipperAddress] = $this->buildFrenchAddresses();

        $request = new CreateShipmentBcRequestDTO();
        $request->customer_countrycode = (int) $customer->countrycode;
        $request->customer_centernumber = (int) $customer->centernumber;
        $request->customer_number = (int) $customer->number;
        $request->receiveraddress = $receiverAddress;
        $request->receiverinfo = null;
        $request->shipperaddress = $shipperAddress;
        $request->shipperinfo = null;
        $request->retourAddress = null;
        $request->services = null;
        $request->weight = '1.20';
        $request->referencenumber = 'LIVE-SH-' . date('YmdHis');
        $request->reference2 = 'ORDER-' . date('Ymd');
        $request->reference3 = null;
        $request->Reference4 = null;
        $request->shippingdate = getenv('DPD_LIVE_SHIPPING_DATE') ?: date('d.m.Y');

        return $request;
    }

    private function buildCreateShipmentWithLabelsBcRequest(): CreateShipmentWithLabelsBcRequestDTO
    {
        $customer = $this->requireEprintCustomerFromEnv();
        [$receiverAddress, $shipperAddress] = $this->buildFrenchAddresses();
        $labelType = new LabelTypeDTO(LabelTypeEnum::EPL);

        return new CreateShipmentWithLabelsBcRequestDTO(
            (int) $customer->countrycode,
            (int) $customer->centernumber,
            (int) $customer->number,
            $receiverAddress,
            null,
            $shipperAddress,
            null,
            '1.20',
            'LIVE-LB-' . date('YmdHis'),
            $labelType,
            null,
            null,
            null,
            'ORDER-' . date('Ymd'),
            null,
            null,
            getenv('DPD_LIVE_SHIPPING_DATE') ?: date('d.m.Y'),
            null,
            null
        );
    }

    private function buildCreateMultiShipmentBcRequest(): CreateMultiShipmentBcRequestDTO
    {
        $customer = $this->requireEprintCustomerFromEnv();
        [$receiverAddress, $shipperAddress] = $this->buildFrenchAddresses();

        $slaveServices = new SlaveServicesDTO();
        $slaveA = new SlaveRequestDTO('1.00', 'LIVE-MS-' . date('YmdHis') . '-01', null, null, null, $slaveServices);
        $slaveB = new SlaveRequestDTO('1.10', 'LIVE-MS-' . date('YmdHis') . '-02', null, null, null, $slaveServices);

        return new CreateMultiShipmentBcRequestDTO(
            (int) $customer->countrycode,
            (int) $customer->centernumber,
            (int) $customer->number,
            $receiverAddress,
            null,
            $shipperAddress,
            null,
            null,
            null,
            [$slaveA, $slaveB]
        );
    }

    private function createTraceCustomerFromEnv(): TraceCustomerDTO
    {
        $customer = $this->requireEprintCustomerFromEnv();

        return new TraceCustomerDTO((int) $customer->countrycode, (int) $customer->centernumber, (int) $customer->number);
    }

    /**
     * @return array{Barcode:string, BarcodeSource:string, BarcodeId:string}
     */
    private function extractShipmentIdentifiersFromCreateShipmentResponse(CreateShipmentBcResponseDTO $response): array
    {
        $shipmentBcList = $response->getShipmentBc();
        if (!is_array($shipmentBcList) || $shipmentBcList === []) {
            self::fail('CreateShipmentBc response does not contain ShipmentBc payload.');
        }

        if (isset($shipmentBcList['Shipment'])) {
            $first = $shipmentBcList;
        } else {
            if (isset($shipmentBcList['ShipmentBc'])) {
                $shipmentBcList = $shipmentBcList['ShipmentBc'];
            }

            if (!is_array($shipmentBcList) || $shipmentBcList === []) {
                self::fail('CreateShipmentBc response ShipmentBc list is empty.');
            }

            $first = $shipmentBcList[0] ?? null;
            if ($first instanceof \stdClass) {
                $first = get_object_vars($first);
            }
        }

        if (!is_array($first)) {
            self::fail('CreateShipmentBc first ShipmentBc item is not a valid structure.');
        }

        $shipment = $first['Shipment'] ?? null;
        if ($shipment instanceof \stdClass) {
            $shipment = get_object_vars($shipment);
        }

        if (!is_array($shipment)) {
            self::fail('CreateShipmentBc first Shipment payload is not a valid structure.');
        }

        $barcode = isset($shipment['BarCode']) ? (string) $shipment['BarCode'] : '';
        $barcodeSource = isset($shipment['BarcodeSource']) ? (string) $shipment['BarcodeSource'] : '';
        $barcodeId = isset($shipment['BarcodeId']) ? (string) $shipment['BarcodeId'] : '';

        if ($barcode === '' || $barcodeSource === '' || $barcodeId === '') {
            self::fail('CreateShipmentBc response is missing one of BarCode / BarcodeSource / BarcodeId.');
        }

        return [
            'Barcode' => $barcode,
            'BarcodeSource' => $barcodeSource,
            'BarcodeId' => $barcodeId,
        ];
    }

    /**
     * @return array{Barcode:string, BarcodeSource:string, BarcodeId:string, OriginalBarcode:string, ParcelNumber:?string, Reference:?string}
     */
    private function resolveLiveShipmentContext(): array
    {
        if (self::$lastResolvedShipmentContext !== null) {
            return self::$lastResolvedShipmentContext;
        }

        $ids = self::$lastCreatedShipmentIds;
        if ($ids === null) {
            $created = self::$client?->eprint()->createShipmentBc($this->buildCreateShipmentBcRequest());
            if (!$created instanceof CreateShipmentBcResponseDTO) {
                self::fail('Unable to create shipment for live context resolution.');
            }

            $ids = $this->extractShipmentIdentifiersFromCreateShipmentResponse($created);
            self::$lastCreatedShipmentIds = $ids;
        }

        $context = [
            'Barcode' => $ids['Barcode'],
            'BarcodeSource' => $ids['BarcodeSource'],
            'BarcodeId' => $ids['BarcodeId'],
            'OriginalBarcode' => $ids['Barcode'],
            'ParcelNumber' => null,
            'Reference' => null,
        ];

        try {
            $shipment = self::$client?->eprint()->getShipmentBc(
                new GetShipmentBCRequestDTO(
                    $ids['Barcode'],
                    $ids['BarcodeSource'],
                    $ids['BarcodeId'],
                    $this->createTraceCustomerFromEnv()
                )
            );

            if ($shipment instanceof GetShipmentBcResponseDTO) {
                $parcelNumber = $shipment->getParcelnumber();
                $reference = $shipment->getReferencenumber();

                if (is_string($parcelNumber) && $parcelNumber !== '') {
                    $context['ParcelNumber'] = $parcelNumber;
                }

                if (is_string($reference) && $reference !== '') {
                    $context['Reference'] = $reference;
                }
            }
        } catch (TransportException) {
        }

        self::$lastResolvedShipmentContext = $context;

        return $context;
    }

    private function resolveServiceNoticeAnswerIdFromLiveContext(): ?string
    {
        $fromEnv = getenv('DPD_LIVE_NOTICE_ANSWER_ID');
        if (is_string($fromEnv) && $fromEnv !== '') {
            return $fromEnv;
        }

        $request = new GetServiceNoticeAnswersRequestDTO('pick', getenv('DPD_LIVE_LANGUAGE') ?: 'FR');
        $response = $this->executeExtendedCall(
            fn () => self::$client?->eprint()->getServiceNoticeAnswers($request),
            'GetServiceNoticeAnswers'
        );

        $answers = is_object($response) && method_exists($response, 'getAnswers') ? $response->getAnswers() : null;
        if (!is_array($answers)) {
            return null;
        }

        foreach ($answers as $answer) {
            if (is_string($answer) && preg_match('/\d+/', $answer, $matches) === 1) {
                return $matches[0];
            }

            if (is_array($answer)) {
                $candidate = $answer['answerID'] ?? $answer['answerId'] ?? $answer['id'] ?? null;
                if ($candidate !== null && preg_match('/^\d+$/', (string) $candidate) === 1) {
                    return (string) $candidate;
                }
            }

            if (is_object($answer)) {
                $vars = get_object_vars($answer);
                $candidate = $vars['answerID'] ?? $vars['answerId'] ?? $vars['id'] ?? null;
                if ($candidate !== null && preg_match('/^\d+$/', (string) $candidate) === 1) {
                    return (string) $candidate;
                }
            }
        }

        return null;
    }

    /**
     * @return array{0: AddressDTO, 1: AddressDTO}
     */
    private function buildFrenchAddresses(): array
    {
        $receiver = new AddressDTO(
            'Jean Dupont',
            'FR',
            '75008',
            'Paris',
            '10 Rue de la Paix',
            '0601020304'
        );

        $shipper = new AddressDTO(
            'Acme Expédition',
            'FR',
            '69002',
            'Lyon',
            '25 Rue de Brest',
            '0472001122'
        );

        return [$receiver, $shipper];
    }
}
