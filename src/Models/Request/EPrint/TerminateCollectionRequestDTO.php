<?php
namespace DPD\Models\Request\EPrint;

use DPD\Models\EPrint\Parcel\ParcelDTO;
use DPD\Models\ParentDTO;
use DPD\Models\Trace\CustomerDTO;

class TerminateCollectionRequestDTO extends ParentDTO{
    public ParcelDTO $parcel;
    public CustomerDTO $customer;

    public function __construct(ParcelDTO $parcel, CustomerDTO $customer)
    {
        $this->parcel = $parcel;
        $this->customer = $customer;
    }

    public function getParcel(): ParcelDTO
    {
        return $this->parcel;
    }
    public function setParcel(ParcelDTO $parcel): self
    {
        $this->parcel = $parcel;
        return $this;
    }
    public function getCustomer(): CustomerDTO
    {
        return $this->customer;
    }
    public function setCustomer(CustomerDTO $customer): self
    {
        $this->customer = $customer;
        return $this;
    }
}