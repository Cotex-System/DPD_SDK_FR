<?php

declare(strict_types=1);

namespace DPD\Models\Response\Trace;

use DPD\Models\ParentDTO;
use DPD\Models\Trace\clsTraceDTO;
use InvalidArgumentException;

class GetLastTraceBcResponseDTO extends ParentDTO
{
    public ?string $ShipmentNumber;
    public ?clsTraceDTO $Trace;

    /**
        * @param clsTraceDTO|array<string, mixed>|string|null $Trace
     */
        public function __construct(?string $ShipmentNumber = null, clsTraceDTO|array|string|null $Trace = null)
    {
        $this->ShipmentNumber = $ShipmentNumber;
        $this->setTrace($Trace);
    }
    /**
     * Get the value of ShipmentNumber
     */
    public function getShipmentNumber(): ?string
    {
        return $this->ShipmentNumber;
    }

    /**
     * Get the value of Trace
     */
    public function getTrace(): ?clsTraceDTO
    {
        return $this->Trace;
    }

    /**
        * @param clsTraceDTO|array<string, mixed>|string|null $Trace
     */
        public function setTrace(clsTraceDTO|array|string|null $Trace): self
    {
        if ($Trace === null) {
            $this->Trace = null;

            return $this;
        }

        if ($Trace instanceof clsTraceDTO) {
            $this->Trace = $Trace;

            return $this;
        }

        if (is_array($Trace) || is_string($Trace)) {
            $this->Trace = clsTraceDTO::from($Trace);

            return $this;
        }

        throw new InvalidArgumentException('Trace must be clsTraceDTO, array, object, JSON string or null.');
    }
}