<?php

declare(strict_types=1);

namespace DPD\Models;

/**
 * Limited Quantity DTO
 * 
 * For dangerous goods / limited quantities
 */
class LimitedQuantityDTO extends AbstractModel
{
    public function getUnNo(): ?string
    {
        return $this->get('unNo');
    }

    public function setUnNo(?string $unNo): self
    {
        $this->set('unNo', $unNo);
        return $this;
    }

    public function getClassCode(): ?string
    {
        return $this->get('classCode');
    }

    public function setClassCode(?string $classCode): self
    {
        $this->set('classCode', $classCode);
        return $this;
    }

    public function getPackingGroup(): ?string
    {
        return $this->get('packingGroup');
    }

    public function setPackingGroup(?string $packingGroup): self
    {
        $this->set('packingGroup', $packingGroup);
        return $this;
    }
}
