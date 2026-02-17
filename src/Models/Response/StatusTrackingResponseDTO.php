<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Status Tracking Response DTO
 * 
 * Returned when tracking shipments
 */
class StatusTrackingResponseDTO extends AbstractModel
{
    public function getParcelNumber(): ?string
    {
        return $this->get('parcelNumber');
    }

    public function getTrackingNumber(): ?string
    {
        return $this->get('trackingNumber');
    }

    public function getStatus(): ?string
    {
        return $this->get('status');
    }

    public function getStatusReason(): ?string
    {
        return $this->get('statusReason');
    }

    public function getLastUpdate(): ?string
    {
        return $this->get('lastUpdate');
    }

    public function getEstimatedDelivery(): ?string
    {
        return $this->get('estimatedDelivery');
    }

    public function getDeliveredDate(): ?string
    {
        return $this->get('deliveredDate');
    }

    public function getSignatoryName(): ?string
    {
        return $this->get('signatory');
    }

    public function getDeliveryProof(): ?string
    {
        return $this->get('deliveryProof');
    }

    /**
     * @return array<int, StatusTrackingDetailsDTO>|null
     */
    public function getEvents(): ?array
    {
        $events = $this->get('events');
        if (!is_array($events)) {
            return null;
        }

        return array_map(function ($event) {
            return new StatusTrackingDetailsDTO($event);
        }, $events);
    }

    public function getReturnDetails(): ?array
    {
        return $this->get('returnDetails');
    }
}
