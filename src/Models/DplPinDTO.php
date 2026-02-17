<?php

declare(strict_types=1);

namespace DPD\Models;

/**
 * DPL Pin DTO
 * 
 * DPD Locker PIN information
 */
class DplPinDTO extends AbstractModel
{
    public function getParcelNumber(): ?string
    {
        return $this->get('parcelNumber');
    }

    public function setParcelNumber(?string $parcelNumber): self
    {
        $this->set('parcelNumber', $parcelNumber);
        return $this;
    }

    public function getDpl(): ?string
    {
        return $this->get('dpl');
    }

    public function setDpl(?string $dpl): self
    {
        $this->set('dpl', $dpl);
        return $this;
    }

    public function getPin(): ?string
    {
        return $this->get('pin');
    }

    public function setPin(?string $pin): self
    {
        $this->set('pin', $pin);
        return $this;
    }
}
