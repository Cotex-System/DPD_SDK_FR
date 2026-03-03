<?php

declare(strict_types=1);

namespace DPD\Models\Response\EPrint;

use DPD\Models\ParentDTO;

class CreateShipmentBcResponseDTO extends ParentDTO
{
    /** @var array<mixed>|null */
    private ?array $ShipmentBc = null;

    /**
     * @param array<mixed>|null $ShipmentBc
     */
    public function __construct(?array $ShipmentBc = null)
    {
        $this->ShipmentBc = $ShipmentBc;
    }

    /**
     * @return array<mixed>|null
     */
    public function getShipmentBc(): ?array
    {
        return $this->ShipmentBc;
    }
}
