<?php
namespace DPD\Models\Request\EPrint;

use DPD\Models\EPrint\Address\AddressDTO;
use DPD\Models\EPrint\Labels\LabelTypeDTO;
use DPD\Models\ParentDTO;
use DPD\Models\Trace\CustomerDTO;

class GetLabelBcRequestDTO extends ParentDTO{
    public CustomerDTO $customer;
    /**     * @var string
     * Numéro de l’expédition 
     * limite à 28 caractères
     */
    public string $shipmentNumber;
    public ?AddressDTO $overrideShipperLabelAddress;
    public LabelTypeDTO $labelType;
    public ?bool $refnrasbarcode;
    public ReferenceInBarcodeDTO $referenceInBarcode;

    public function __construct(CustomerDTO $customer, string $shipmentNumber, ?AddressDTO $overrideShipperLabelAddress, LabelTypeDTO $labelType, ?bool $refnrasbarcode, ReferenceInBarcodeDTO $referenceInBarcode)
    {
        $this->customer = $customer;
        $this->shipmentNumber = $shipmentNumber;
        $this->overrideShipperLabelAddress = $overrideShipperLabelAddress;
        $this->labelType = $labelType;
        $this->refnrasbarcode = $refnrasbarcode;
        $this->referenceInBarcode = $referenceInBarcode;
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
    public function getShipmentNumber(): string
    {
        return $this->shipmentNumber;
    }
    public function setShipmentNumber(string $shipmentNumber): self
    {
        $this->shipmentNumber = $shipmentNumber;
        return $this;
    }
    public function getOverrideShipperLabelAddress(): ?AddressDTO
    {
        return $this->overrideShipperLabelAddress;
    }
    public function setOverrideShipperLabelAddress(?AddressDTO $overrideShipperLabelAddress): self
    {
        $this->overrideShipperLabelAddress = $overrideShipperLabelAddress;
        return $this;
    }
    public function getLabelType(): LabelTypeDTO
    {
        return $this->labelType;
    }
    public function setLabelType(LabelTypeDTO $labelType): self
    {
        $this->labelType = $labelType;
        return $this;
    }
    public function getRefnrasbarcode(): ?bool{
        return $this->refnrasbarcode;
    }
    public function setRefnrasbarcode(?bool $refnrasbarcode): self
    {
        $this->refnrasbarcode = $refnrasbarcode;
        return $this;
    }
    public function getReferenceInBarcode(): ReferenceInBarcodeDTO
    {
        return $this->referenceInBarcode;
    }
    public function setReferenceInBarcode(ReferenceInBarcodeDTO $referenceInBarcode): self
    {
        $this->referenceInBarcode = $referenceInBarcode;
        return $this;
    }

}