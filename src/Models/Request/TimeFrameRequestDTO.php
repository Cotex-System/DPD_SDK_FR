<?php

declare(strict_types=1);

namespace DPD\Models\Request;

use DPD\Models\AbstractModel;

/**
 * Time Frame Request DTO
 * 
 * Used for requesting delivery timeframes
 */
class TimeFrameRequestDTO extends AbstractModel
{
    public function getSenderAddress(): ?array
    {
        return $this->get('senderAddress');
    }

    public function setSenderAddress(?array $senderAddress): self
    {
        $this->set('senderAddress', $senderAddress);
        return $this;
    }

    public function getReceiverAddress(): ?array
    {
        return $this->get('receiverAddress');
    }

    public function setReceiverAddress(?array $receiverAddress): self
    {
        $this->set('receiverAddress', $receiverAddress);
        return $this;
    }

    public function getService(): ?string
    {
        return $this->get('service');
    }

    public function setService(?string $service): self
    {
        $this->set('service', $service);
        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->get('weight') ? (float) $this->get('weight') : null;
    }

    public function setWeight(?float $weight): self
    {
        $this->set('weight', $weight);
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

    public function getShipmentDate(): ?string
    {
        return $this->get('shipmentDate');
    }

    public function setShipmentDate(?string $shipmentDate): self
    {
        $this->set('shipmentDate', $shipmentDate);
        return $this;
    }
}
