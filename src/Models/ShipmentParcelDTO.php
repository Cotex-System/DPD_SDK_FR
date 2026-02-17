<?php

declare(strict_types=1);

namespace DPD\Models;

/**
 * Shipment Parcel DTO
 * 
 * Represents a parcel in a shipment
 */
class ShipmentParcelDTO extends AbstractModel
{
    public function getWeight(): ?float
    {
        return $this->get('weight');
    }

    public function setWeight(float $weight): self
    {
        $this->set('weight', $weight);
        return $this;
    }

    public function getParcelNumber(): ?string
    {
        return $this->get('parcelNumber');
    }

    public function setParcelNumber(?string $parcelNumber): self
    {
        $this->set('parcelNumber', $parcelNumber);
        return $this;
    }

    /**
     * @return array<int, string>|null
     */
    public function getMpsReferences(): ?array
    {
        return $this->get('mpsReferences');
    }

    /**
     * @param array<int, string>|null $mpsReferences
     */
    public function setMpsReferences(?array $mpsReferences): self
    {
        $this->set('mpsReferences', $mpsReferences);
        return $this;
    }

    public function getSize(): ?string
    {
        return $this->get('size');
    }

    public function setSize(?string $size): self
    {
        $this->set('size', $size);
        return $this;
    }

    public function getExpiryDate(): ?string
    {
        return $this->get('expiryDate');
    }

    public function setExpiryDate(?string $expiryDate): self
    {
        $this->set('expiryDate', $expiryDate);
        return $this;
    }
}
