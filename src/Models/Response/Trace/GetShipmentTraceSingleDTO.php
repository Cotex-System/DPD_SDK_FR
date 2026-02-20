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