<?php

declare(strict_types=1);

namespace DPD\Models;

/**
 * Shipment Flag DTO
 * 
 * Flags for controlling shipment behavior (saving addresses, etc.)
 */
class ShipmentFlagDTO extends AbstractModel
{
    public function getSavesSenderAddress(): ?bool
    {
        return $this->get('savesSenderAddress');
    }

    public function setSavesSenderAddress(?bool $savesSenderAddress): self
    {
        $this->set('savesSenderAddress', $savesSenderAddress);
        return $this;
    }

    public function getSavesReceiverAddress(): ?bool
    {
        return $this->get('savesReceiverAddress');
    }

    public function setSavesReceiverAddress(?bool $savesReceiverAddress): self
    {
        $this->set('savesReceiverAddress', $savesReceiverAddress);
        return $this;
    }

    public function getSavesSystemReturnAddress(): ?bool
    {
        return $this->get('savesSystemReturnAddress');
    }

    public function setSavesSystemReturnAddress(?bool $savesSystemReturnAddress): self
    {
        $this->set('savesSystemReturnAddress', $savesSystemReturnAddress);
        return $this;
    }

    public function getSavesReturnAddress(): ?bool
    {
        return $this->get('savesReturnAddress');
    }

    public function setSavesReturnAddress(?bool $savesReturnAddress): self
    {
        $this->set('savesReturnAddress', $savesReturnAddress);
        return $this;
    }

    public function getGeneratesDplPin(): ?bool
    {
        return $this->get('generatesDplPin');
    }

    public function setGeneratesDplPin(?bool $generatesDplPin): self
    {
        $this->set('generatesDplPin', $generatesDplPin);
        return $this;
    }

    public function getGetsPrice(): ?bool
    {
        return $this->get('getsPrice');
    }

    public function setGetsPrice(?bool $getsPrice): self
    {
        $this->set('getsPrice', $getsPrice);
        return $this;
    }

    public function getSaveSenderDefaultAddress(): ?bool
    {
        return $this->get('saveSenderDefaultAddress');
    }

    public function setSaveSenderDefaultAddress(?bool $saveSenderDefaultAddress): self
    {
        $this->set('saveSenderDefaultAddress', $saveSenderDefaultAddress);
        return $this;
    }

    public function getSaveReceiverDefaultAddress(): ?bool
    {
        return $this->get('saveReceiverDefaultAddress');
    }

    public function setSaveReceiverDefaultAddress(?bool $saveReceiverDefaultAddress): self
    {
        $this->set('saveReceiverDefaultAddress', $saveReceiverDefaultAddress);
        return $this;
    }

    public function getSaveReturnDefaultAddress(): ?bool
    {
        return $this->get('saveReturnDefaultAddress');
    }

    public function setSaveReturnDefaultAddress(?bool $saveReturnDefaultAddress): self
    {
        $this->set('saveReturnDefaultAddress', $saveReturnDefaultAddress);
        return $this;
    }
}
