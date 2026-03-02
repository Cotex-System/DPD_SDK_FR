<?php
namespace App\Models\Response\EPrint;
use DPD\Models\ParentDTO;

class CreateMultiShipmentBcResponseDTO extends ParentDTO{

    /** @var ShipmentDTO[]|null */
    private ?array $MultiShipment;
    public function __construct(?array $MultiShipment = null)
    {
        $this->MultiShipment = $MultiShipment;
    }
    public function getMultiShipment(): ?array
    {
        return $this->MultiShipment;
    }
}