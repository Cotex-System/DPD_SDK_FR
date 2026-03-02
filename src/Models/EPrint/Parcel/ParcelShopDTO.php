<?php
namespace DPD\Models\EPrint\Parcel;
use DPD\Models\ParentDTO;
use DPD\Models\EPrint\Address\ShopAddressDTO;

class ParcelShopDTO extends ParentDTO
{
    public ?ShopAddressDTO $Shopaddress;
    public function __construct(?ShopAddressDTO $Shopaddress = null)
    {
        $this->Shopaddress = $Shopaddress;
    }
    /**
     * Get the value of Shopaddress
     */
    public function getShopaddress(): ?ShopAddressDTO
    {
        return $this->Shopaddress;
    }
    /**
     * Set the value of Shopaddress
     */
    public function setShopaddress(?ShopAddressDTO $Shopaddress): self
    {        $this->Shopaddress = $Shopaddress;
        return $this;
    }
}


