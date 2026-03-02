<?php
namespace DPD\Models\EPrint\Shipment;
use DPD\Models\ParentDTO;

class ShipmentBcDTO extends ParentDTO{
    public ?BcDataExtDTO $Shipment;
    public ?string $type;
}