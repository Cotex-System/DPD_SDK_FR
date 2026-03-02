<?php
namespace DPD\Models\Response\EPrint;

use DPD\Models\EPrint\Address\AddressDTO;
use DPD\Models\EPrint\Address\AddressInfoDTO;
use DPD\Models\EPrint\Service\ContactDTO;
use DPD\Models\ParentDTO;

class GetShipmentBcResponseDTO extends ParentDTO{
    private ?string $countrycode;
    private ?string $centernumber;
    private ?string $parcelnumber;
    private ?string $customer_centernumber;
    private ?string $weight;
    private ?string $referencenumber;
    private ?string $reference2;
    private ?string $reference3;
    private ?AddressDTO $shipperaddress;
    private ?AddressDTO $receiveraddress;
    private ?AddressDTO $customeraddress;
    private ?ContactDTO $contact;
    private ?AddressInfoDTO $addressInfo;
    private ?string $pickup_remark;
    private ?string $delivery_remark;
    private ?string $Barcode;
    private ?string $BarcodeSource;
    private ?string $BarcodeId;

    public function __construct(?string $countrycode = null, ?string $centernumber = null, ?string $parcelnumber = null, ?string $customer_centernumber = null, ?string $weight = null, ?string $referencenumber = null, ?string $reference2 = null, ?string $reference3 = null, ?AddressDTO $shipperaddress = null, ?AddressDTO $receiveraddress = null, ?AddressDTO $customeraddress = null, ?ContactDTO $contact = null, ?AddressInfoDTO $addressInfo = null, ?string $pickup_remark = null, ?string $delivery_remark = null, ?string $Barcode = null, ?string $BarcodeSource = null, ?string $BarcodeId = null)
    {
        $this->countrycode = $countrycode;
        $this->centernumber = $centernumber;
        $this->parcelnumber = $parcelnumber;
        $this->customer_centernumber = $customer_centernumber;
        $this->weight = $weight;
        $this->referencenumber = $referencenumber;
        $this->reference2 = $reference2;
        $this->reference3 = $reference3;
        $this->shipperaddress = $shipperaddress;
        $this->receiveraddress = $receiveraddress;
        $this->customeraddress = $customeraddress;
        $this->contact = $contact;
        $this->addressInfo = $addressInfo;
        $this->pickup_remark = $pickup_remark;
        $this->delivery_remark = $delivery_remark;
        $this->Barcode = $Barcode;
        $this->BarcodeSource = $BarcodeSource;
        $this->BarcodeId = $BarcodeId;
    }

    public function getCountrycode(): ?string
    {
        return $this->countrycode;
    }

    public function getCenternumber(): ?string
    {
        return $this->centernumber;
    }

    public function getParcelnumber(): ?string
    {
        return $this->parcelnumber;
    }
    public function getCustomerCenternumber(): ?string
    {
        return $this->customer_centernumber;
    }
    public function getWeight(): ?string
    {
        return $this->weight;
    }
    public function getReferencenumber(): ?string
    {        return $this->referencenumber;
    
    }

    public function getReference2(): ?string
    {
        return $this->reference2;
    }
    public function getReference3(): ?string
    {
        return $this->reference3;
    }
    public function getShipperaddress(): ?AddressDTO{
        return $this->shipperaddress;
    }
    public function getReceiveraddress(): ?AddressDTO{
        return $this->receiveraddress;
    }
    public function getCustomeraddress(): ?AddressDTO{
        return $this->customeraddress;
    }
    public function getContact(): ?ContactDTO
    {
        return $this->contact;
    }
    public function getAddressInfo(): ?AddressInfoDTO{
        return $this->addressInfo;
    }

    public function getPickupRemark(): ?string
    {
        return $this->pickup_remark;
    }
    public function getDeliveryRemark(): ?string
    {
        return $this->delivery_remark;
    }
    public function getBarcode(): ?string{
        return $this->Barcode;
    }
    public function getBarcodeSource(): ?string{
        return $this->BarcodeSource;
    }
    public function getBarcodeId(): ?string{
        return $this->BarcodeId;
    }
}