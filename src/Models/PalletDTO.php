<?php

declare(strict_types=1);

namespace DPD\Models;

/**
 * Pallet DTO
 * 
 * Common pallet model
 */
class PalletDTO extends AbstractModel
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
}
