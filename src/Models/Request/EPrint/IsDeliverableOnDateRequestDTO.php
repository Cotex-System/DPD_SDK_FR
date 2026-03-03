<?php
namespace DPD\Models\Request\EPrint;

use DPD\Models\EPrint\Address\AddressInfoDTO;
use DPD\Models\EPrint\Address\AddressMiniDTO;
use DPD\Models\ParentDTO;

/**
 * Class IsDeliverableOnDateRequestDTO
 * @package DPD\Models\Request\EPrint
 * DTO pour la requete IsDeliverableOnDate
 */
class IsDeliverableOnDateRequestDTO extends ParentDTO{
    public AddressMiniDTO $address;
    public string $date;
    public function __construct(AddressMiniDTO $address, string $date)
    {
        $this->address = $address;
        $this->date = $date;
    }

    public function getAddress(): AddressMiniDTO
    {
        return $this->address;
    }

    public function setAddress(AddressMiniDTO $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;
        return $this;
    }
    
}