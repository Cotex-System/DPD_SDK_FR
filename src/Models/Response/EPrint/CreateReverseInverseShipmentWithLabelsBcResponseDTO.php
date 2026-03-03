<?php
namespace DPD\Models\Response\EPrint;

use DPD\Models\EPrint\Shipment\ShipmentBcDTO;
use DPD\Models\ParentDTO;

class CreateReverseInverseShipmentWithLabelsBcResponseDTO extends ParentDTO{

    private ?ShipmentBcDTO $shipment;
    /** @var LabelDTO[]|null */
    private ?array $labels;
    public function __construct(?ShipmentBcDTO $shipment = null, ?array $labels = null)
    {
        $this->shipment = $shipment;
        $this->labels = $labels;
    }

    public function getShipment(): ?ShipmentBcDTO
    {
        return $this->shipment;
    }
    public function getLabels(): ?array
    {        return $this->labels;
    }
}