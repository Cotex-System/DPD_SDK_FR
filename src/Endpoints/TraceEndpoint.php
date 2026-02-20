<?php

declare(strict_types=1);

namespace DPD\Endpoints;

use DPD\Models\Request\Trace\GetLastTraceBcRequestDTO;
use DPD\Models\Request\Trace\GetShipmentTraceByReferenceDTO as GetShipmentTraceByReferenceRequestDTO;
use DPD\Models\Request\Trace\GetShipmentTraceRequestDTO;
use DPD\Models\Request\Trace\GetShipmentTraceSingleRequestDTO;
use DPD\Models\Response\Trace\GetLastTraceBcResponseDTO;
use DPD\Models\Response\Trace\GetShipmentTraceByReferenceDTO as GetShipmentTraceByReferenceResponseDTO;
use DPD\Models\Response\Trace\GetShipmentTraceDTO;
use DPD\Models\Response\Trace\GetShipmentTraceSingleDTO;

final class TraceEndpoint extends AbstractEndpoint
{
    public function getLastTraceBc(GetLastTraceBcRequestDTO $request): GetLastTraceBcResponseDTO
    {
        /** @var mixed $raw */
        $raw = $this->call('GetLastTraceBc', ['request' => $request->toArray()]);

        return GetLastTraceBcResponseDTO::from($this->extractOperationPayload($raw, 'GetLastTraceBc'));
    }

    public function getShipmentTrace(GetShipmentTraceRequestDTO $request): GetShipmentTraceDTO
    {
        /** @var mixed $raw */
        $raw = $this->call('GetShipmentTrace', ['request' => $request->toArray()]);

        return GetShipmentTraceDTO::from($this->extractOperationPayload($raw, 'GetShipmentTrace'));
    }

    public function getShipmentTraceByReference(
        GetShipmentTraceByReferenceRequestDTO $request
    ): GetShipmentTraceByReferenceResponseDTO {
        /** @var mixed $raw */
        $raw = $this->call('GetShipmentTraceByReference', ['request' => $request->toArray()]);

        return GetShipmentTraceByReferenceResponseDTO::from(
            $this->extractOperationPayload($raw, 'GetShipmentTraceByReference')
        );
    }

    public function getShipmentTraceSingle(GetShipmentTraceSingleRequestDTO $request): GetShipmentTraceSingleDTO
    {
        /** @var mixed $raw */
        $raw = $this->call('GetShipmentTraceSingle', ['request' => $request->toArray()]);

        return GetShipmentTraceSingleDTO::from($this->extractOperationPayload($raw, 'GetShipmentTraceSingle'));
    }

    public function isAlive(): mixed
    {
        return $this->call('isAlive');
    }

    public function verifyConfiguration(array $request = []): mixed
    {
        return $this->call('VerifyConfiguration', ['request' => $request]);
    }

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
