<?php
namespace DPD\Models\Request\Trace;
use DPD\Models\ParentDTO;
use DPD\Models\Trace\CustomerDTO;
use DPD\Models\Trace\Enum\ReferenceSearchModeEnum;

class GetShipmentTraceByReferenceDTO extends ParentDTO
{
    public string $Reference;
    public ?string $ShippingDate;
    public CustomerDTO $Customer;
    public ?string $Language;
    public ?string $ReferenceSearchMode;
    public ?bool $GetImages;
    public ?string $Options;
    

    public function __construct(string $Reference, CustomerDTO $Customer, ?string $ShippingDate = null, ?string $Language = null, ?string $ReferenceSearchMode = null, ?bool $GetImages = null, ?string $Options = null)
    {
        $this->Reference = $Reference;
        $this->ShippingDate = $ShippingDate;
        $this->Customer = $Customer;
        $this->Language = $Language;
        $this->GetImages = $GetImages;
        $this->setReferenceSearchMode($ReferenceSearchMode);
        $this->Options = $Options;
    }
    
    /**
     * Get the value of ReferenceSearchMode
     */
    public function getReferenceSearchMode(): ?string
    {
        return $this->ReferenceSearchMode;
    }

    /**
     * Set the value of ReferenceSearchMode
     */
    public function setReferenceSearchMode(?string $ReferenceSearchMode): self
    {
        if ($ReferenceSearchMode !== null && !ReferenceSearchModeEnum::isValid($ReferenceSearchMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value for ReferenceSearchMode: %s. Allowed values are: %s', $ReferenceSearchMode, implode(', ', ReferenceSearchModeEnum::values())));
        }
        $this->ReferenceSearchMode = $ReferenceSearchMode;

        return $this;
    }

    /**
     * Get the value of Reference
     */
    public function getReference(): string
    {
        return $this->Reference;
    }

    /**
     * Set the value of Reference
     */
    public function setReference(string $Reference): self
    {
        $this->Reference = $Reference;

        return $this;
    }

    /**
     * Get the value of ShippingDate
     */
    public function getShippingDate(): ?string
    {
        return $this->ShippingDate;
    }

    /**
     * Set the value of ShippingDate
     */
    public function setShippingDate(?string $ShippingDate): self
    {
        $this->ShippingDate = $ShippingDate;

        return $this;
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

    public function toArray(): array
    {
        $data = parent::toArray();

        $data['Searchmode'] = $data['ReferenceSearchMode'] ?? ReferenceSearchModeEnum::Equals;
        unset($data['ReferenceSearchMode']);

        return $data;
    }
}