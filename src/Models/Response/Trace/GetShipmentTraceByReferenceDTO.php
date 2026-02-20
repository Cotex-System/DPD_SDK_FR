<?php

declare(strict_types=1);

namespace DPD\Models\Response\Trace;

use DPD\Models\ParentDTO;
use DPD\Models\Trace\ShipmentTraceDTO;
use InvalidArgumentException;

class GetShipmentTraceByReferenceDTO extends ParentDTO{
    /**
        * @var array<\DPD\Models\Trace\ShipmentTraceDTO>
     */
    public array $ShipmentTraces;

    /**
     * @param array<ShipmentTraceDTO|array<string, mixed>|object|string> $ShipmentTraces
     */
    public function __construct(array $ShipmentTraces = [])
    {
        $this->setShipmentTraces($ShipmentTraces);
    }

    /**
     * Add a ShipmentTraceDTO to the ShipmentTraces array
     */
    public function addShipmentTrace(ShipmentTraceDTO $ShipmentTrace): self
    {
        $this->ShipmentTraces[] = $ShipmentTrace;

        return $this;
    }

    /**
     * Get the value of ShipmentTraces
     */
    public function getShipmentTraces(): array
    {
        return $this->ShipmentTraces;
    }

    /**
     * Set the value of ShipmentTraces
     */
    /**
     * @param array<ShipmentTraceDTO|array<string, mixed>|object|string> $ShipmentTraces
     */
    public function setShipmentTraces(array $ShipmentTraces): self
    {
        $this->ShipmentTraces = $this->hydrateShipmentTraces($ShipmentTraces);

        return $this;
    }

    /**
     * @param array<ShipmentTraceDTO|array<string, mixed>|object|string> $shipmentTraces
     * @return array<ShipmentTraceDTO>
     */
    private function hydrateShipmentTraces(array $shipmentTraces): array
    {
        return array_map(static function (mixed $trace): ShipmentTraceDTO {
            if ($trace instanceof ShipmentTraceDTO) {
                return $trace;
            }

            if (is_array($trace) || is_object($trace) || is_string($trace)) {
                return ShipmentTraceDTO::from($trace);
            }

            throw new InvalidArgumentException('All items in ShipmentTraces must be ShipmentTraceDTO, array, object or JSON string.');
        }, $shipmentTraces);
    }
}