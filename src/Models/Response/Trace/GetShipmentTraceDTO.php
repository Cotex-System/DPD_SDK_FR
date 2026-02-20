<?php

declare(strict_types=1);

namespace DPD\Models\Response\Trace;

use DPD\Models\ParentDTO;
use DPD\Models\Trace\ShipmentTraceDTO;
use InvalidArgumentException;

class GetShipmentTraceDTO extends ParentDTO
{
    /**
        * @var ?array<\DPD\Models\Trace\ShipmentTraceDTO>
     */
    public ?array $ShipmentTraces;

    /**
     * @param ?array<ShipmentTraceDTO|array<string, mixed>|object|string> $ShipmentTraces
     */
    public function __construct(?array $ShipmentTraces = null)
    {
        $this->setShipmentTraces($ShipmentTraces);
    }

    

    /**
     * Get the value of ShipmentTraces
     */
    public function getShipmentTraces(): ?array
    {
        return $this->ShipmentTraces;
    }

    /**
     * Set the value of ShipmentTraces
     */
    /**
     * @param ?array<ShipmentTraceDTO|array<string, mixed>|object|string> $ShipmentTraces
     */
    public function setShipmentTraces(?array $ShipmentTraces): self
    {
        if ($ShipmentTraces === null) {
            $this->ShipmentTraces = null;

            return $this;
        }

        $this->ShipmentTraces = array_map(static function (mixed $trace): ShipmentTraceDTO {
            if ($trace instanceof ShipmentTraceDTO) {
                return $trace;
            }

            if (is_array($trace) || is_object($trace) || is_string($trace)) {
                return ShipmentTraceDTO::from($trace);
            }

            throw new InvalidArgumentException('All items in ShipmentTraces must be ShipmentTraceDTO, array, object or JSON string.');
        }, $ShipmentTraces);

        return $this;
    }

    public function addShipmentTrace(ShipmentTraceDTO $shipmentTrace): self
    {
        if ($this->ShipmentTraces === null) {
            $this->ShipmentTraces = [];
        }
        $this->ShipmentTraces[] = $shipmentTrace;

        return $this;
    }
}
