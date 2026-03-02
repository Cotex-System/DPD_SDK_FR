<?php
namespace DPD\Models\Response\EPrint;
use DPD\Models\ParentDTO;

class CreateShipmentWithLabelsBcResponseDTO extends ParentDTO{
    /** @var ShipmentDTO[]|null */
    private ?array $shipments;

    /** @var LabelDTO[]|null */
    private ?array $labels;

    public function __construct(?array $shipments = null, ?array $labels = null)
    {
        $this->shipments = $shipments;
        $this->labels = $labels;
    }

    /**
     * Get the value of labels
     */
    public function getLabels(): ?array
    {
        return $this->labels;
    }

    /**
     * Get the value of shipments
     */
    public function getShipments(): ?array
    {
        return $this->shipments;
    }
}