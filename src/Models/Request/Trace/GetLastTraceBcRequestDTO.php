<?php

namespace DPD\Models\Request\Trace;
use DPD\Models\ParentDTO;
use DPD\Models\Trace\CustomerDTO;

class GetLastTraceBcRequestDTO extends ParentDTO
{
    /**
     * @var array<string>
     */
    public array $Parcels;
    /** @var string|null */
    public ?string $Language;
    /** @var CustomerDTO */
    public CustomerDTO $Customer;

    public function __construct(array $Parcels, CustomerDTO $Customer, ?string $Language = null)
    {
        $this->Parcels = $Parcels;
        $this->Customer = $Customer;
        $this->Language = $Language;
    }

    /**
     * Get the value of Parcels
     */
    public function getParcels(): array
    {
        return $this->Parcels;
    }

    /**
     * Set the value of Parcels
     */
    public function setParcels(array $Parcels): self
    {
        $this->Parcels = $Parcels;

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
}