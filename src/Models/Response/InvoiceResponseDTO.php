<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Invoice Response DTO
 * 
 * Returned when getting invoice information
 */
class InvoiceResponseDTO extends AbstractModel
{
    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getNumber(): ?string
    {
        return $this->get('number');
    }

    public function getDate(): ?string
    {
        return $this->get('date');
    }

    public function getAmount(): ?float
    {
        return $this->get('amount') ? (float) $this->get('amount') : null;
    }

    public function getStatus(): ?string
    {
        return $this->get('status');
    }

    public function getCurrency(): ?string
    {
        return $this->get('currency');
    }

    public function getShipmentIds(): ?array
    {
        return $this->get('shipmentIds');
    }

    public function getParcelNumbers(): ?array
    {
        return $this->get('parcelNumbers');
    }

    public function getDueDate(): ?string
    {
        return $this->get('dueDate');
    }

    public function getPaidDate(): ?string
    {
        return $this->get('paidDate');
    }
}
