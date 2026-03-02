<?php

namespace DPD\Models\Response\EPrint;

use DPD\Models\EPrint\Address\AddressDTO;
use DPD\Models\EPrint\RetourServices;
use DPD\Models\EPrint\Service\ReverseDTO;
use DPD\Models\ParentDTO;
use DPD\Models\EPrint\Shipment\BcDataExtDTO;

class GetRetourShipmentDataBcResponseDTO extends ParentDTO
{
    /**     * @var BcDataExtDTO
     * Données d’identification du code à barres DPD
     */
    private ?BcDataExtDTO $shipment;
    /**     * @var BcDataExtDTO
     * Données d’identification du code à barres DPD de la livraison retour
     */
    private ?BcDataExtDTO $ShipmentRetour;
    /**     * @var RetourServices
     * Services de retour associés à la livraison
     */
    private ?RetourServices $services;
    /**     * @var AddressDTO
     * Adresse du destinataire de la livraison
     */
    private ?AddressDTO $receiveraddress;
    /**     * @var AddressDTO
     * Adresse de l’expéditeur de la livraison retour
     */
    private ?AddressDTO $shipperaddress;
    /**     * @var AddressDTO
     * Adresse du destinataire de la livraison retour
     */
    private ?AddressDTO $customeraddress;
    /**     * @var string
     * Numéro de compte client 
     */
    private ?string $customernumber;
    /**     * @var string
     * Code agence client 
     */
    private ?string $customer_centernumber;
    /**     * @var string
     * Numéro d’expédition retour
     */
    private ?string $parcelnumber_retour;
    /**     * @var string
     * Code agence retour
     */
    private ?string $centernumber_retour;
    /**     * @var string
     * Code pays retour (250 = France) 
     */
    private ?string $countrycode_retour;
    /**      @var string
     * Numéro d’expédition  
     */
    private ?string $parcelnumber;
    /**      @var string
     * Code agence
     */
    private ?string $centernumber;
    /** @var string
     * Code pays (250 = France)
     */
    private ?string $countrycode;

    public function __construct(?BcDataExtDTO $shipment = null, ?BcDataExtDTO $ShipmentRetour = null, ?ReverseDTO $services = null, ?AddressDTO $receiveraddress = null, ?AddressDTO $shipperaddress = null, ?AddressDTO $customeraddress = null, ?string $customernumber = null, ?string $customer_centernumber = null, ?string $parcelnumber_retour = null, ?string $centernumber_retour = null, ?string $countrycode_retour = null, ?string $parcelnumber = null, ?string $centernumber = null, ?string $countrycode = null)
    {
        $this->shipment = $shipment;
        $this->ShipmentRetour = $ShipmentRetour;
        $this->services = $services;
        $this->receiveraddress = $receiveraddress;
        $this->shipperaddress = $shipperaddress;
        $this->customeraddress = $customeraddress;
        $this->customernumber = $customernumber;
        $this->customer_centernumber = $customer_centernumber;
        $this->parcelnumber_retour = $parcelnumber_retour;
        $this->centernumber_retour = $centernumber_retour;
        $this->countrycode_retour = $countrycode_retour;
        $this->parcelnumber = $parcelnumber;
        $this->centernumber = $centernumber;
        $this->countrycode = $countrycode;
    }

    public function getShipment(): ?BcDataExtDTO
    {
        return $this->shipment;
    }

    public function getShipmentRetour(): ?BcDataExtDTO
    {
        return $this->ShipmentRetour;
    }

    public function getServices(): ?RetourServices
    {
        return $this->services;
    }

    public function getReceiveraddress(): ?AddressDTO
    {
        return $this->receiveraddress;
    }

    public function getShipperaddress(): ?AddressDTO
    {
        return $this->shipperaddress;
    }
    public function getCustomeraddress(): ?AddressDTO
    {
        return $this->customeraddress;
    }
    public function getCustomernumber(): ?string
    {
        return $this->customernumber;
    }
    public function getCustomerCenternumber(): ?string
    {
        return $this->customer_centernumber;
    }
    public function getParcelnumberRetour(): ?string
    {
        return $this->parcelnumber_retour;
    }
    public function getCenternumberRetour(): ?string
    {
        return $this->centernumber_retour;
    }
    public function getCountrycodeRetour(): ?string
    {
        return $this->countrycode_retour;
    }
    public function getParcelnumber(): ?string
    {
        return $this->parcelnumber;
    }
    public function getCenternumber(): ?string
    {
        return $this->centernumber;
    }
    public function getCountrycode(): ?string
    {
        return $this->countrycode;
    }
}
