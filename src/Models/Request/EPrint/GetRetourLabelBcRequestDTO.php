<?php

namespace DPD\Models\Request\EPrint;

use DPD\Models\EPrint\Address\AddressDTO;
use DPD\Models\EPrint\Labels\LabelTypeDTO;
use DPD\Models\EPrint\Service\RetourServicesDTO;
use DPD\Models\EPrint\Service\ReverseDTO;
use DPD\Models\ParentDTO;

class GetRetourLabelBcRequestDTO extends ParentDTO
{
    public string $countryCode;
    public string $centerNumber;
    public string $parcelnumber;
    public ?bool $rfnrasbarcode;
    public ?ReferenceInBarcodeDTO $referenceInBarcode;
    public ?RetourServicesDTO $services;
    public ?string $weight;
    public ?AddressDTO $shipperaddress;
    public ?AddressDTO $receiveraddress;
    public ?AddressDTO $overrideShipperLabelAddress;
    public LabelTypeDTO $labelType;
    public ?string $customLabelText;

    public function __construct(string $countryCode, string $centerNumber, string $parcelnumber, ?bool $rfnrasbarcode = null, ?string $referenceInBarcode = null, ?RetourServicesDTO $services = null, ?string $weight = null, ?AddressDTO $shipperaddress = null, ?AddressDTO $receiveraddress = null, ?AddressDTO $overrideShipperLabelAddress = null, LabelTypeDTO $labelType, ?string $customLabelText = null)
    {
        $this->countryCode = $countryCode;
        $this->centerNumber = $centerNumber;
        $this->parcelnumber = $parcelnumber;
        $this->rfnrasbarcode = $rfnrasbarcode;
        $this->referenceInBarcode = $referenceInBarcode;
        $this->services = $services;
        $this->weight = $weight;
        $this->shipperaddress = $shipperaddress;
        $this->receiveraddress = $receiveraddress;
        $this->overrideShipperLabelAddress = $overrideShipperLabelAddress;
        $this->labelType = $labelType;
        $this->customLabelText = $customLabelText;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }
    public function getCenterNumber(): string
    {
        return $this->centerNumber;
    }
    public function getParcelnumber(): string
    {
        return $this->parcelnumber;
    }
    public function getRfnrasbarcode(): ?bool
    {
        return $this->rfnrasbarcode;
    }
    public function getReferenceInBarcode(): ?string
    {
        return $this->referenceInBarcode;
    }
    public function getServices(): ?RetourServicesDTO
    {
        return $this->services;
    }
    public function getWeight(): ?string
    {
        return $this->weight;
    }
    public function getShipperaddress(): ?AddressDTO
    {
        return $this->shipperaddress;
    }
    public function getReceiveraddress(): ?AddressDTO
    {
        return $this->receiveraddress;
    }
    public function getOverrideShipperLabelAddress(): ?AddressDTO
    {
        return $this->overrideShipperLabelAddress;
    }
    public function getLabelType(): LabelTypeDTO
    {
        return $this->labelType;
    }
    public function getCustomLabelText(): ?string
    {
        return $this->customLabelText;
    }

    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;
        return $this;
    }
    public function setCenterNumber(string $centerNumber): self
    {
        $this->centerNumber = $centerNumber;
        return $this;
    }
    public function setParcelnumber(string $parcelnumber): self
    {
        $this->parcelnumber = $parcelnumber;
        return $this;
    }
    public function setRfnrasbarcode(?bool $rfnrasbarcode): self
    {
        $this->rfnrasbarcode = $rfnrasbarcode;
        return $this;
    }
    public function setReferenceInBarcode(?string $referenceInBarcode): self
    {
        $this->referenceInBarcode = $referenceInBarcode;
        return $this;
    }
    public function setServices(?RetourServicesDTO $services): self
    {
        $this->services = $services;
        return $this;
    }
    public function setWeight(?string $weight): self
    {
        $this->weight = $weight;
        return $this;
    }
    public function setShipperaddress(?AddressDTO $shipperaddress): self
    {
        $this->shipperaddress = $shipperaddress;
        return $this;
    }
    public function setReceiveraddress(?AddressDTO $receiveraddress): self
    {
        $this->receiveraddress = $receiveraddress;
        return $this;
    }
    public function setOverrideShipperLabelAddress(?AddressDTO $overrideShipperLabelAddress): self
    {
        $this->overrideShipperLabelAddress = $overrideShipperLabelAddress;
        return $this;
    }
    public function setLabelType(LabelTypeDTO $labelType): self
    {
        $this->labelType = $labelType;
        return $this;
    }
    public function setCustomLabelText(?string $customLabelText): self
    {
        $this->customLabelText = $customLabelText;
        return $this;
    }
}
