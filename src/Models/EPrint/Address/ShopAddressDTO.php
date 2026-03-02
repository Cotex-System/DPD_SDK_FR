<?php
namespace DPD\Models\EPrint\Address;
use DPD\Models\ParentDTO;

class ShopAddressDTO extends ParentDTO{
    /**     * @var string
     * Identifiant du point DPD Relais (Pxxxxx ou FRxxxxx) 
     */
    public string $shopid;
    public function __construct(string $shopid)
    {
        $this->shopid = $shopid;
    }
    /**     * Get the value of shopid
     */    public function getShopid(): string
    {        return $this->shopid;    }
    /**     * Set the value of shopid
     */    public function setShopid(string $shopid): self
    {        $this->shopid = $shopid;
        return $this;    }
}