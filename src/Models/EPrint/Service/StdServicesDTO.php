<?php

namespace DPD\Models\EPrint\Service;
use DPD\Models\ParentDTO;
use DPD\Models\EPrint\Parcel\ParcelShopDTO;
use DPD\Models\EPrint\Service\ContactDTO;
use DPD\Models\EPrint\Service\ReverseDTO;
use DPD\Models\EPrint\Service\ReverseInverseServicesDTO;

class StdServicesDTO extends ParentDTO{

    public ?ExtraInsuranceDTO $extraInsurance;
    public ?ContactDTO $contact;
    public ?ParcelShopDTO $parcelshop;
    public ?ReverseDTO $reverse;
    public ?ReverseInverseServicesDTO $reverseInverseBCReturn;
    public ?AutoConsolidationDTO $autoConsolidation;
    public ?MarketingDTO $marketing;

    public function __construct(?ExtraInsuranceDTO $extraInsurance = null, ?ContactDTO $contact = null, ?ParcelShopDTO $parcelshop = null, ?ReverseDTO $reverse = null, ?ReverseInverseServicesDTO $reverseInverseBCReturn = null, ?AutoConsolidationDTO $autoConsolidation = null, ?MarketingDTO $marketing = null)
    {
        $this->extraInsurance = $extraInsurance;
        $this->contact = $contact;
        $this->parcelshop = $parcelshop;
        $this->reverse = $reverse;
        $this->reverseInverseBCReturn = $reverseInverseBCReturn;
        $this->autoConsolidation = $autoConsolidation;
        $this->marketing = $marketing;
    }

    


    /**
     * Get the value of extraInsurance
     */
    public function getExtraInsurance(): ?ExtraInsuranceDTO
    {
        return $this->extraInsurance;
    }

    /**
     * Set the value of extraInsurance
     */
    public function setExtraInsurance(?ExtraInsuranceDTO $extraInsurance): self
    {
        $this->extraInsurance = $extraInsurance;

        return $this;
    }

    /**
     * Get the value of contact
     */
    public function getContact(): ?ContactDTO
    {
        return $this->contact;
    }

    /**
     * Set the value of contact
     */
    public function setContact(?ContactDTO $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get the value of parcelshop
     */
    public function getParcelShop(): ?ParcelShopDTO
    {
        return $this->parcelshop;
    }

    /**
     * Set the value of parcelshop
     */
    public function setParcelShop(?ParcelShopDTO $parcelshop): self
    {
        $this->parcelshop = $parcelshop;

        return $this;
    }

    /**
     * Get the value of reverse
     */
    public function getReverse(): ?ReverseDTO
    {
        return $this->reverse;
    }

    /**
     * Set the value of reverse
     */
    public function setReverse(?ReverseDTO $reverse): self
    {
        $this->reverse = $reverse;

        return $this;
    }

    /**
     * Get the value of reverseInverseBCReturn
     */
    public function getReverseInverseBCReturn(): ?ReverseInverseServicesDTO
    {
        return $this->reverseInverseBCReturn;
    }

    /**
     * Set the value of reverseInverseBCReturn
     */
    public function setReverseInverseBCReturn(?ReverseInverseServicesDTO $reverseInverseBCReturn): self
    {
        $this->reverseInverseBCReturn = $reverseInverseBCReturn;
        return $this;
    }


    /**
     * Get the value of autoConsolidation
     */
    public function getAutoConsolidation(): ?AutoConsolidationDTO
    {
        return $this->autoConsolidation;
    }

    /**
     * Set the value of autoConsolidation
     */
    public function setAutoConsolidation(?AutoConsolidationDTO $autoConsolidation): self
    {
        $this->autoConsolidation = $autoConsolidation;

        return $this;
    }

    /**
     * Get the value of marketing
     */
    public function getMarketing(): ?MarketingDTO
    {
        return $this->marketing;
    }

    /**
     * Set the value of marketing
     */
    public function setMarketing(?MarketingDTO $marketing): self
    {
        $this->marketing = $marketing;

        return $this;
    }
}