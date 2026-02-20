<?php
namespace DPD\Models\Trace;
use DPD\Models\ParentDTO;
class CustomerDTO extends ParentDTO{

/**
     * @var int|null
     */
    public ?int $countrycode;
    /**
     * @var int|null
     */
    public ?int $centernumber;
    /**
     * @var int|null
     */
    public ?int $number;

    public function __construct(?int $countrycode = null, ?int $centernumber = null, ?int $number = null)
    {
        $this->countrycode = $countrycode;
        $this->centernumber = $centernumber;
        $this->number = $number;
    }
    

    /**
     * Get the value of countrycode
     */
    public function getCountrycode(): ?int
    {
        return $this->countrycode;
    }

    /**
     * Set the value of countrycode
     */
    public function setCountrycode(?int $countrycode): self
    {
        $this->countrycode = $countrycode;

        return $this;
    }

    /**
     * Get the value of centernumber
     */
    public function getCenternumber(): ?int
    {
        return $this->centernumber;
    }

    /**
     * Set the value of centernumber
     */
    public function setCenternumber(?int $centernumber): self
    {
        $this->centernumber = $centernumber;

        return $this;
    }

    /**
     * Get the value of number
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * Set the value of number
     */
    public function setNumber(?int $number): self
    {
        $this->number = $number;

        return $this;
    }
}