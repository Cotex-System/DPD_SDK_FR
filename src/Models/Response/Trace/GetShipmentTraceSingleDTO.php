<?php

declare(strict_types=1);

namespace DPD\Models\Response\Trace;

use DPD\Models\ParentDTO;
use DPD\Models\Trace\ShipmentTraceDTO;
use InvalidArgumentException;

class GetShipmentTraceSingleDTO extends ParentDTO
{
    /**
     * @var ?ShipmentTraceDTO
     */
    public ?ShipmentTraceDTO $ShipmentTrace;

    /**
     * @param array<string, mixed>|object|string|null $source
     */
    public static function from(array|object|string|null $source): static
    {
        if ($source === null) {
            return new static(null);
        }

        if (is_string($source)) {
            return new static(ShipmentTraceDTO::from($source));
        }

        if (is_object($source)) {
            $source = get_object_vars($source);
        }

        if (!is_array($source)) {
            return new static(null);
        }

        $payload = $source['ShipmentTrace'] ?? null;
        if ($payload === null && isset($source['ShipmentTraces']) && is_array($source['ShipmentTraces']) && $source['ShipmentTraces'] !== []) {
            $payload = $source['ShipmentTraces'][0];
        }

        if ($payload === null) {
            $payload = $source;
        }

        if (is_object($payload)) {
            $payload = get_object_vars($payload);
        }

        if (!is_array($payload) && !is_string($payload)) {
            return new static(null);
        }

        return new static(ShipmentTraceDTO::from($payload));
    }

    /**
        * @param ShipmentTraceDTO|array<string, mixed>|string|null $ShipmentTrace
     */
        public function __construct(ShipmentTraceDTO|array|string|null $ShipmentTrace = null)
    {
        $this->setShipmentTrace($ShipmentTrace);
    }

    /**
     * Get the value of ShipmentTrace
     */
    public function getShipmentTrace(): ?ShipmentTraceDTO
    {
        return $this->ShipmentTrace;
    }

    /**
     * Set the value of ShipmentTrace
     */
    /**
        * @param ShipmentTraceDTO|array<string, mixed>|string|null $ShipmentTrace
     */
        public function setShipmentTrace(ShipmentTraceDTO|array|string|null $ShipmentTrace): self
    {
        if ($ShipmentTrace === null) {
            $this->ShipmentTrace = null;

            return $this;
        }

        if ($ShipmentTrace instanceof ShipmentTraceDTO) {
            $this->ShipmentTrace = $ShipmentTrace;

            return $this;
        }

        if (is_array($ShipmentTrace) || is_string($ShipmentTrace)) {
            $this->ShipmentTrace = ShipmentTraceDTO::from($ShipmentTrace);

            return $this;
        }

        throw new InvalidArgumentException('ShipmentTrace must be ShipmentTraceDTO, array, object, JSON string or null.');

        return $this;
    }
}