<?php
namespace DPD\Models\EPrint\Shipment;
use DPD\Models\ParentDTO;

class ShipmentBcDTO extends ParentDTO{
    public ?BcDataExtDTO $Shipment;
    public ?string $type;

    public function __construct(?BcDataExtDTO $Shipment = null, ?string $type = null)
    {
        $this->Shipment = $Shipment;
        $this->type = $type;
    }

    public function getShipment(): ?BcDataExtDTO
    {
        return $this->Shipment;
    }

    public function setShipment(?BcDataExtDTO $Shipment): void
    {
        $this->Shipment = $Shipment;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): void
    {
        $this->type = $type;
    }


}