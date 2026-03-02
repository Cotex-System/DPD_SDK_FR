<?php

namespace DPD\Models\EPrint\Shipment;

use DPD\Models\ParentDTO;

class MultiShipmentBcDTO extends ParentDTO
{
    /**     * @var ShipmentDTO
     * Numéro de consolidation (master) 
     */
    public ?ShipmentDTO $mastershipment;
    /**     * @var ShipmentDTO[]
     * Numéros de colis (slave)
     */
    public ?array $shipments;

    public function __construct(?ShipmentDTO $mastershipment = null, ?array $shipments = null)
    {
        $this->mastershipment = $mastershipment;
        $this->shipments = $shipments;
    }
    /**     * Get the value of mastershipment
     * @return ShipmentDTO|null
     */    public function getMastershipment(): ?ShipmentDTO
    {
        return $this->mastershipment;
    }
    /**     * Set the value of mastershipment
     * @param ShipmentDTO|null $mastershipment
     * @return self
     */    public function setMastershipment(?ShipmentDTO $mastershipment): self
    {
        $this->mastershipment = $mastershipment;
        return $this;
    }
    /**     * Get the value of shipments
     * @return ShipmentDTO[]|null
     */    public function getShipments(): ?array
    {
        return $this->shipments;
    }
    /**     * Set the value of shipments
     * @param ShipmentDTO[]|null $shipments
     * @return self
     */    public function setShipments(?array $shipments): self
    {
        $this->shipments = $shipments;
        return $this;
    }
}
