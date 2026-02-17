<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Shipment Stats DTO
 * 
 * Returned when getting shipment statistics
 */
class ShipmentStatsDTO extends AbstractModel
{
    public function getTotalShipments(): ?int
    {
        return $this->get('totalShipments');
    }

    public function getTotalParcels(): ?int
    {
        return $this->get('totalParcels');
    }

    public function getPending(): ?int
    {
        return $this->get('pending');
    }

    public function getNotBooked(): ?int
    {
        return $this->get('notBooked');
    }

    public function getNotPrinted(): ?int
    {
        return $this->get('notPrinted');
    }

    public function getDelivered(): ?int
    {
        return $this->get('delivered');
    }

    public function getReturned(): ?int
    {
        return $this->get('returned');
    }

    public function getInRoute(): ?int
    {
        return $this->get('inRoute');
    }

    public function getFailed(): ?int
    {
        return $this->get('failed');
    }

    public function getRejected(): ?int
    {
        return $this->get('rejected');
    }

    public function getByStatus(): ?array
    {
        return $this->get('byStatus');
    }

    public function getByService(): ?array
    {
        return $this->get('byService');
    }
}
