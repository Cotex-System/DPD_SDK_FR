<?php

declare(strict_types=1);

namespace DPD\Models;

/**
 * Shipment Pallet DTO
 * 
 * Represents a pallet in a shipment
 */
class ShipmentPalletDTO extends AbstractModel
{
    public function getWeight(): ?float
    {
        return $this->get('weight');
    }

    public function setWeight(?float $weight): self
    {
        $this->set('weight', $weight);
        return $this;
    }

    public function getType(): ?string
    {
        return $this->get('type');
    }

    public function setType(?string $type): self
    {
        $this->set('type', $type);
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
}
