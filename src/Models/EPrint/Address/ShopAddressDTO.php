<?php
namespace DPD\Models\EPrint\Address;
use DPD\Models\EPrint\Address\AddressDTO;

class ShopAddressDTO extends AddressDTO{
    /**     * @var string
     * Identifiant du point DPD Relais (Pxxxxx ou FRxxxxx) 
     */
    public string $shopid;
    public function __construct(string $shopid, string $name, string $countryPrefix, string $zipCode, string $city, string $street, ?string $phoneNumber = null, ?string $faxNumber = null, ?string $geoX = null, ?string $geoY = null)
    {
        $this->shopid = $shopid;
        parent::__construct($name, $countryPrefix, $zipCode, $city, $street, $phoneNumber, $faxNumber, $geoX, $geoY);
    }
    /**     * Get the value of shopid
     */    public function getShopid(): string
    {        return $this->shopid;    }
    /**     * Set the value of shopid
     */    public function setShopid(string $shopid): self
    {        $this->shopid = $shopid;
        return $this;    }
}