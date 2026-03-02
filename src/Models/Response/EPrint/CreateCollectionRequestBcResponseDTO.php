<?php
namespace App\Models\Response\EPrint;
use DPD\Models\ParentDTO;


class CreateCollectionRequestBcResponseDTO extends ParentDTO{
    /**
     * @var ShipmentDTO[]|null
     */
    private ?array $ShipmentBC;

    public function __construct(?array $ShipmentBC = null)
    {
        $this->ShipmentBC = $ShipmentBC;
    }

    public function getShipmentBC(): ?array
    {
        return $this->ShipmentBC;
    }

    public function setShipmentBC(?array $ShipmentBC): self
    {
        $this->ShipmentBC = $ShipmentBC;
        return $this;
    }
}