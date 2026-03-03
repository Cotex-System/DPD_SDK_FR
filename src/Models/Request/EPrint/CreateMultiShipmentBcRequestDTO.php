<?php
namespace DPD\Models\Request\EPrint;

use DPD\Models\EPrint\Address\AddressDTO;
use DPD\Models\EPrint\Address\AddressInfoDTO;
use DPD\Models\EPrint\Service\MultiServicesDTO;
use DPD\Models\EPrint\Service\SlaveRequestDTO;
use DPD\Models\ParentDTO;

class CreateMultiShipmentBcRequestDTO extends ParentDTO{
    /**
     * @var int
     * limité à 3 chiffres
     */
    public int $customer_countrycode;
    /**
     * @var int
     * limité à 3 chiffres
     */
    public int $customer_centernumber;
    /**
     * @var int
     * limité à 6 chiffres
     */
    public int $customer_number;
    /**
     * @var AddressDTO
     * Adresse du destinataire
     */
    public AddressDTO $receiveraddress;
    /**
     * @var ?AddressInfoDTO
     * Informations complémentaires destinataire
     */
    public ?AddressInfoDTO $receiverinfo;
    /**
     * @var AddressDTO
     * Adresse de l’expéditeur
     */
    public AddressDTO $shipperaddress;
    /**
     * @var ?AddressInfoDTO
     * Informations complémentaires expéditeur
     */
    public ?AddressInfoDTO $shipperinfo;
    /**
     * @var ?AddressDTO
     * Adresse de retour (si différente de l’adresse de l’expéditeur)
     */
    public ?AddressDTO $retourAddress;
    /**
     * @var ?MultiServicesDTO
     * Services
     */
    public ?MultiServicesDTO $services;
    /**
     * @var SlaveRequestDTO[]
     */
    public ?array $slaves;

    public function __construct(int $customer_countrycode, int $customer_centernumber, int $customer_number, AddressDTO $receiveraddress, ?AddressInfoDTO $receiverinfo, AddressDTO $shipperaddress, ?AddressInfoDTO $shipperinfo, ?AddressDTO $retourAddress, ?MultiServicesDTO $services, ?array $slaves)
    {
        $this->customer_countrycode = $customer_countrycode;
        $this->customer_centernumber = $customer_centernumber;
        $this->customer_number = $customer_number;
        $this->receiveraddress = $receiveraddress;
        $this->receiverinfo = $receiverinfo;
        $this->shipperaddress = $shipperaddress;
        $this->shipperinfo = $shipperinfo;
        $this->retourAddress = $retourAddress;
        $this->services = $services;
        $this->slaves = $slaves;
    }

    

    /**
     * Get the value of customer_countrycode
     */
    public function getCustomerCountrycode(): int
    {
        return $this->customer_countrycode;
    }

    /**
     * Set the value of customer_countrycode
     */
    public function setCustomerCountrycode(int $customer_countrycode): self
    {
        $this->customer_countrycode = $customer_countrycode;

        return $this;
    }

    /**
     * Get the value of customer_centernumber
     */
    public function getCustomerCenternumber(): int
    {
        return $this->customer_centernumber;
    }

    /**
     * Set the value of customer_centernumber
     */
    public function setCustomerCenternumber(int $customer_centernumber): self
    {
        $this->customer_centernumber = $customer_centernumber;

        return $this;
    }

    /**
     * Get the value of customer_number
     */
    public function getCustomerNumber(): int
    {
        return $this->customer_number;
    }

    /**
     * Set the value of customer_number
     */
    public function setCustomerNumber(int $customer_number): self
    {
        $this->customer_number = $customer_number;

        return $this;
    }

    /**
     * Get the value of receiveraddress
     */
    public function getReceiveraddress(): AddressDTO
    {
        return $this->receiveraddress;
    }

    /**
     * Set the value of receiveraddress
     */
    public function setReceiveraddress(AddressDTO $receiveraddress): self
    {
        $this->receiveraddress = $receiveraddress;

        return $this;
    }

    /**
     * Get the value of receiverinfo
     */
    public function getReceiverinfo(): ?AddressInfoDTO
    {
        return $this->receiverinfo;
    }

    /**
     * Set the value of receiverinfo
     */
    public function setReceiverinfo(?AddressInfoDTO $receiverinfo): self
    {
        $this->receiverinfo = $receiverinfo;

        return $this;
    }

    /**
     * Get the value of shipperaddress
     */
    public function getShipperaddress(): AddressDTO
    {
        return $this->shipperaddress;
    }

    /**
     * Set the value of shipperaddress
     */
    public function setShipperaddress(AddressDTO $shipperaddress): self
    {
        $this->shipperaddress = $shipperaddress;

        return $this;
    }

    /**
     * Get the value of shipperinfo
     */
    public function getShipperinfo(): ?AddressInfoDTO
    {
        return $this->shipperinfo;
    }

    /**
     * Set the value of shipperinfo
     */
    public function setShipperinfo(?AddressInfoDTO $shipperinfo): self
    {
        $this->shipperinfo = $shipperinfo;

        return $this;
    }

    /**
     * Get the value of retourAddress
     */
    public function getRetourAddress(): ?AddressDTO
    {
        return $this->retourAddress;
    }

    /**
     * Set the value of retourAddress
     */
    public function setRetourAddress(?AddressDTO $retourAddress): self
    {
        $this->retourAddress = $retourAddress;

        return $this;
    }

    /**
     * Get the value of services
     */
    public function getServices(): ?MultiServicesDTO
    {
        return $this->services;
    }

    /**
     * Set the value of services
     */
    public function setServices(?MultiServicesDTO $services): self
    {
        $this->services = $services;

        return $this;
    }

    /**
     * Get the value of slaves
     */
    public function getSlaves(): ?array
    {
        return $this->slaves;
    }

    /**
     * Set the value of slaves
     */
    public function setSlaves(?array $slaves): self
    {
        $this->slaves = $slaves;

        return $this;
    }
    public function addSlave(SlaveRequestDTO $slave): self
    {
        if ($this->slaves === null) {
            $this->slaves = [];
        }
        $this->slaves[] = $slave;

        return $this;
    }
}