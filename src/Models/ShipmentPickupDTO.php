<?php

declare(strict_types=1);

namespace DPD\Models;

/**
 * Shipment Pickup DTO
 * 
 * Pickup request information for collection service
 */
class ShipmentPickupDTO extends AbstractModel
{
    public function getMessageToCourier(): ?string
    {
        return $this->get('messageToCourier');
    }

    public function setMessageToCourier(?string $messageToCourier): self
    {
        $this->set('messageToCourier', $messageToCourier);
        return $this;
    }

    public function getPickupDate(): ?string
    {
        return $this->get('pickupDate');
    }

    public function setPickupDate(?string $pickupDate): self
    {
        $this->set('pickupDate', $pickupDate);
        return $this;
    }

    public function getPickupTimeFrom(): ?string
    {
        return $this->get('pickupTimeFrom');
    }

    public function setPickupTimeFrom(?string $pickupTimeFrom): self
    {
        $this->set('pickupTimeFrom', $pickupTimeFrom);
        return $this;
    }

    public function getPickupTimeTo(): ?string
    {
        return $this->get('pickupTimeTo');
    }

    public function setPickupTimeTo(?string $pickupTimeTo): self
    {
        $this->set('pickupTimeTo', $pickupTimeTo);
        return $this;
    }
}
