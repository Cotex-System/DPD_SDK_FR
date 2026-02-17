<?php

declare(strict_types=1);

namespace DPD\Models;

/**
 * Parcel DTO
 * 
 * Used for pickup requests
 */
class ParcelDTO extends AbstractModel
{
    public function getCount(): ?int
    {
        return $this->get('count');
    }

    public function setCount(?int $count): self
    {
        $this->set('count', $count);
        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->get('weight');
    }

    public function setWeight(?float $weight): self
    {
        $this->set('weight', $weight);
        return $this;
    }
}
