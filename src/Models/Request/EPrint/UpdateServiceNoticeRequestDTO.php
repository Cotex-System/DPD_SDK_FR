<?php
namespace DPD\Models\Request\EPrint;

use DPD\Models\EPrint\Address\AddressDTO;
use DPD\Models\ParentDTO;
use DPD\Models\EPrint\CustomerDTO;

class UpdateServiceNoticeRequestDTO extends ParentDTO{
    public string $BarcodeId;
    public string $BarcodeSource;
    public CustomerDTO $customer;
    public int $answerID;
    public ?string $text;
    public ?AddressDTO $address;

    public function __construct(string $BarcodeId, string $BarcodeSource, CustomerDTO $customer, int $answerID, ?string $text = null, ?AddressDTO $address = null)
    {
        $this->BarcodeId = $BarcodeId;
        $this->BarcodeSource = $BarcodeSource;
        $this->customer = $customer;
        $this->answerID = $answerID;
        $this->text = $text;
        $this->address = $address;
    }

    public function getBarcodeId(): string
    {
        return $this->BarcodeId;
    }

    public function getBarcodeSource(): string
    {
        return $this->BarcodeSource;
    }

    public function getCustomer(): CustomerDTO
    {
        return $this->customer;
    }

    public function getAnswerID(): int
    {
        return $this->answerID;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function getAddress(): ?AddressDTO
    {
        return $this->address;
    }
    
    public function setText(?string $text): self
    {
        $this->text = $text;
        return $this;
    }

    public function setAddress(?AddressDTO $address): self
    {
        $this->address = $address;
        return $this;
    }
    
    public function setAnswerID(int $answerID): self
    {
        $this->answerID = $answerID;
        return $this;
    }

    public function setCustomer(CustomerDTO $customer): self
    {
        $this->customer = $customer;
        return $this;
    }

    public function setBarcodeSource(string $BarcodeSource): self
    {
        $this->BarcodeSource = $BarcodeSource;
        return $this;
    }

    public function setBarcodeId(string $BarcodeId): self
    {
        $this->BarcodeId = $BarcodeId;
        return $this;
    }
}