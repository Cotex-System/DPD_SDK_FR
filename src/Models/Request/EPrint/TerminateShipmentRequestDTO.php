<?php
namespace DPD\Models\Request\EPrint;

use DPD\Models\EPrint\CustomerDTO;
use DPD\Models\ParentDTO;


class TerminateShipmentRequestDTO extends ParentDTO{
    public string $BarcodeId;
    public CustomerDTO $customer;

    public function __construct(string $BarcodeId, CustomerDTO $customer)
    {
        $this->BarcodeId = $BarcodeId;
        $this->customer = $customer;
    }

    public function getBarcodeId(): string
    {
        return $this->BarcodeId;
    }

    public function setBarcodeId(string $BarcodeId): self
    {
        $this->BarcodeId = $BarcodeId;
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