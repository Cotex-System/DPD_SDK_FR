<?php

declare(strict_types=1);

namespace DPD\Endpoints;

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
use DPD\Models\Request\EPrint\IsDeliverableOnDateRequestDTO;
use DPD\Models\Request\EPrint\IsPickableOnDateRequestDTO;
use DPD\Models\Request\EPrint\TerminateCollectionRequestBcDTO;
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

final class EPrintEndpoint extends AbstractEndpoint
{
    public function createCollectionRequestBc(
        CreateCollectionRequestBcDTO $request
    ): CreateCollectionRequestBcResponseDTO {
        /** @var mixed $raw */
        $raw = $this->call('CreateCollectionRequestBc', ['request' => $request->toArray()]);

        return CreateCollectionRequestBcResponseDTO::from($this->extractOperationPayload($raw, 'CreateCollectionRequestBc'));
    }

    public function createMultiShipmentBc(CreateMultiShipmentBcRequestDTO $request): CreateMultiShipmentBcResponseDTO
    {
        /** @var mixed $raw */
        $raw = $this->call('CreateMultiShipmentBc', ['request' => $request->toArray()]);

        return CreateMultiShipmentBcResponseDTO::from($this->extractOperationPayload($raw, 'CreateMultiShipmentBc'));
    }

    public function createPickupAtCustomerBc(
        CreatePickupAtCustomerBcDTO $request
    ): CreatePickupAtCustomerBcResponseDTO {
        /** @var mixed $raw */
        $raw = $this->call('CreatePickupAtCustomerBc', ['request' => $request->toArray()]);

        return CreatePickupAtCustomerBcResponseDTO::from($this->extractOperationPayload($raw, 'CreatePickupAtCustomerBc'));
    }

    public function createReverseInverseShipmentBc(
        CreateReverseInverseShipmentBcRequestDTO $request
    ): CreateReverseInverseShipmentBcResponseDTO {
        /** @var mixed $raw */
        $raw = $this->call('CreateReverseInverseShipmentBc', ['request' => $request->toArray()]);

        return CreateReverseInverseShipmentBcResponseDTO::from(
            $this->extractOperationPayload($raw, 'CreateReverseInverseShipmentBc')
        );
    }

    public function createReverseInverseShipmentWithLabelsBc(
        CreateReverseInverseShipmentWithLabelsBcRequestDTO $request
    ): CreateReverseInverseShipmentWithLabelsBcResponseDTO {
        /** @var mixed $raw */
        $raw = $this->call('CreateReverseInverseShipmentWithLabelsBc', ['request' => $request->toArray()]);
        
        return CreateReverseInverseShipmentWithLabelsBcResponseDTO::from(
            $this->extractOperationPayload($raw, 'CreateReverseInverseShipmentWithLabelsBc')
        );
    }

    public function createShipmentBc(CreateShipmentBcRequestDTO $request): CreateShipmentBcResponseDTO
    {
        /** @var mixed $raw */
        $raw = $this->call('CreateShipmentBc', ['request' => $request->toArray()]);

        return CreateShipmentBcResponseDTO::from($this->extractOperationPayload($raw, 'CreateShipmentBc'));
    }

    public function createShipmentWithLabelsBc(
        CreateShipmentWithLabelsBcRequestDTO $request
    ): CreateShipmentWithLabelsBcResponseDTO {
        /** @var mixed $raw */
        $raw = $this->call('CreateShipmentWithLabelsBc', ['request' => $request->toArray()]);
        
        return CreateShipmentWithLabelsBcResponseDTO::from(
            $this->extractOperationPayload($raw, 'CreateShipmentWithLabelsBc')
        );
    }

    public function getLabelBc(GetLabelBcRequestDTO $request): GetLabelBcResponseDTO
    {
        /** @var mixed $raw */
        $raw = $this->call('GetLabelBc', ['request' => $request->toArray()]);

        return GetLabelBcResponseDTO::from($this->extractOperationPayload($raw, 'GetLabelBc'));
    }

    public function getRetourLabelBc(GetRetourLabelBcRequestDTO $request): GetRetourLabelBcResponseDTO
    {
        /** @var mixed $raw */
        $raw = $this->call('GetRetourLabelBc', ['request' => $request->toArray()]);

        return GetRetourLabelBcResponseDTO::from($this->extractOperationPayload($raw, 'GetRetourLabelBc'));
    }

    public function getRetourShipmentDataBc(
        GetRetourShipmentDataBcRequestDTO $request
    ): GetRetourShipmentDataBcResponseDTO {
        /** @var mixed $raw */
        $raw = $this->call('GetRetourShipmentDataBc', ['request' => $request->toArray()]);

        return GetRetourShipmentDataBcResponseDTO::from($this->extractOperationPayload($raw, 'GetRetourShipmentDataBc'));
    }

    public function getServiceNoticeAnswers(
        GetServiceNoticeAnswersRequestDTO $request
    ): GetNoticeAnswersResponseDTO {
        /** @var mixed $raw */
        $raw = $this->call('GetServiceNoticeAnswers', ['request' => $request->toArray()]);

        return GetNoticeAnswersResponseDTO::from($this->extractOperationPayload($raw, 'GetServiceNoticeAnswers'));
    }

    public function getServiceNotices(GetServiceNoticesRequestDTO $request): ServiceNoticeResponseDTO
    {
        /** @var mixed $raw */
        $raw = $this->call('GetServiceNotices', ['request' => $request->toArray()]);

        return ServiceNoticeResponseDTO::from($this->extractOperationPayload($raw, 'GetServiceNotices'));
    }

    public function getShipmentBc(GetShipmentBCRequestDTO $request): GetShipmentBcResponseDTO
    {
        /** @var mixed $raw */
        $raw = $this->call('GetShipmentBc', ['request' => $request->toArray()]);

        return GetShipmentBcResponseDTO::from($this->extractOperationPayload($raw, 'GetShipmentBc'));
    }

    public function getShipping(GetShippingRequestDTO $request): GetShippingResponseDTO
    {
        /** @var mixed $raw */
        $raw = $this->call('GetShipping', ['request' => $request->toArray()]);

        return GetShippingResponseDTO::from($this->extractOperationPayload($raw, 'GetShipping'));
    }

    /**
     * @return mixed
     */
    public function isDeliverableOnDate(IsDeliverableOnDateRequestDTO $request): mixed
    {
        return $this->call('IsDeliverableOnDate', ['request' => $request->toArray()]);
    }

    /**
     * @return mixed
     */
    public function isPickableOnDate(IsPickableOnDateRequestDTO $request): mixed
    {
        return $this->call('IsPickableOnDate', ['request' => $request->toArray()]);
    }

    /**
     * @return mixed
     */
    public function terminateCollectionRequestBc(TerminateCollectionRequestBcDTO $request): mixed
    {
        return $this->call('TerminateCollectionRequestBc', ['request' => $request->toArray()]);
    }

    /**
     * @return mixed
     */
    public function terminateShipment(TerminateShipmentRequestDTO $request): mixed
    {
        return $this->call('TerminateShipment', ['request' => $request->toArray()]);
    }

    /**
     * @return mixed
     */
    public function updateServiceNotice(UpdateServiceNoticeRequestDTO $request): mixed
    {
        return $this->call('UpdateServiceNotice', ['request' => $request->toArray()]);
    }

    /**
     * @return mixed
     */
    public function isAlive(): mixed
    {
        return $this->call('isAlive');
    }

    /**
     * @return mixed
     */
    public function getInfo(): mixed
    {
        return $this->call('getInfo');
    }

    /**
     * @return mixed
     */
    private function extractOperationPayload(mixed $raw, string $operation): mixed
    {
        if (!is_object($raw)) {
            return $raw;
        }

        $resultProperty = $operation . 'Result';
        if (property_exists($raw, $resultProperty)) {
            $raw = $raw->{$resultProperty};
        }

        while (is_object($raw)) {
            $values = get_object_vars($raw);
            if (count($values) !== 1) {
                break;
            }

            $key = (string) array_key_first($values);
            if (!str_ends_with($key, 'Response') && !str_ends_with($key, 'Result')) {
                break;
            }

            $raw = $values[$key];
        }

        return $raw;
    }
}
