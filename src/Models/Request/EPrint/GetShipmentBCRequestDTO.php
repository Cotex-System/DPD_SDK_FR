<?php

namespace DPD\Models\Request\EPrint;

use DPD\Models\ParentDTO;
use DPD\Models\Trace\CustomerDTO;

class GetShipmentBCRequestDTO extends ParentDTO
{
    public string $Barcode;
    public string $BarcodeSource;
    public string $BarcodeId;
    public CustomerDTO $customer;
    public function __construct(string $Barcode, string $BarcodeSource, string $BarcodeId, CustomerDTO $customer)
    {
        $this->Barcode = $Barcode;
        $this->BarcodeSource = $BarcodeSource;
        $this->BarcodeId = $BarcodeId;
        $this->customer = $customer;
    }

    public function getBarcode(): string
    {
        return $this->Barcode;
    }
    public function setBarcode(string $Barcode): self
    {
        $this->Barcode = $Barcode;
        return $this;
    }
    public function getBarcodeSource(): string
    {
        return $this->BarcodeSource;
    }
    public function setBarcodeSource(string $BarcodeSource): self
    {
        $this->BarcodeSource = $BarcodeSource;
        return $this;
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
