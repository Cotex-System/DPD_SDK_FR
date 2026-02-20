<?php
namespace DPD\Models\Request\Trace;
use DPD\Models\ParentDTO;
use DPD\Models\Trace\CustomerDTO;
use DPD\Models\Trace\Enum\ExpandContainerModeTypeEnum;

class GetShipmentTraceSingleRequestDTO extends ParentDTO{
    public CustomerDTO $Customer;
    public string $ShipmentNumber;
    public ?string $Language;
    public ?bool $GetImages;
    private ?string $ExpandContainerMode;
    public ?string $Options;

    public function __construct(CustomerDTO $Customer, string $ShipmentNumber, ?string $Language = null, ?bool $GetImages = null, ?string $ExpandContainerMode = null, ?string $Options = null)
    {
        $this->Customer = $Customer;
        $this->ShipmentNumber = $ShipmentNumber;
        $this->Language = $Language;
        $this->GetImages = $GetImages;
        $this->setExpandContainerMode($ExpandContainerMode);
        $this->Options = $Options;
    }

    /**
     * Get the value of Customer
     */
    public function getCustomer(): CustomerDTO
    {
        return $this->Customer;
    }

    /**
     * Set the value of Customer
     */
    public function setCustomer(CustomerDTO $Customer): self
    {
        $this->Customer = $Customer;

        return $this;
    }

    /**
     * Get the value of ShipmentNumber
     */
    public function getShipmentNumber(): string
    {
        return $this->ShipmentNumber;
    }

    /**
     * Set the value of ShipmentNumber
     */
    public function setShipmentNumber(string $ShipmentNumber): self
    {
        $this->ShipmentNumber = $ShipmentNumber;

        return $this;
    }

    /**
     * Get the value of Language
     */
    public function getLanguage(): ?string
    {
        return $this->Language;
    }

    /**
     * Set the value of Language
     */
    public function setLanguage(?string $Language): self
    {
        $this->Language = $Language;

        return $this;
    }

    /**
     * Get the value of GetImages
     */
    public function isGetImages(): ?bool
    {
        return $this->GetImages;
    }

    /**
     * Set the value of GetImages
     */
    public function setGetImages(?bool $GetImages): self
    {
        $this->GetImages = $GetImages;

        return $this;
    }

    /**
     * Get the value of ExpandContainerMode
     */
    public function getExpandContainerMode(): ?string
    {
        return $this->ExpandContainerMode;
    }

    /**
     * Set the value of ExpandContainerMode
     */
    public function setExpandContainerMode(?string $ExpandContainerMode): self
    {
        if($ExpandContainerMode !== null && !ExpandContainerModeTypeEnum::isValid($ExpandContainerMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value for ExpandContainerMode: %s. Allowed values are: %s', $ExpandContainerMode, implode(', ', ExpandContainerModeTypeEnum::values())));
        }
        $this->ExpandContainerMode = $ExpandContainerMode;

        return $this;
    }

    /**
     * Get the value of Options
     */
    public function getOptions(): ?string
    {
        return $this->Options;
    }

    /**
     * Set the value of Options
     */
    public function setOptions(?string $Options): self
    {
        $this->Options = $Options;

        return $this;
    }
}