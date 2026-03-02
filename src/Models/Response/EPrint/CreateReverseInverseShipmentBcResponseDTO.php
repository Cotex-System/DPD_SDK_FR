<?php
namespace App\Models\Response\EPrint;

use DPD\Models\ParentDTO;

class CreateReverseInverseShipmentBcResponseDTO extends ParentDTO{
    /** @var ShipmentDTO[]|null */
    private ?array $shipment;
    public function __construct(?array $shipment = null)
    {
        $this->shipment = $shipment;
    }
    public function getShipment(): ?array
    {
        return $this->shipment;
    }
}