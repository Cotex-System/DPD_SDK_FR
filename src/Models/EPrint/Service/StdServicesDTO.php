<?php

namespace DPD\Models\EPrint\Service;
use DPD\Models\ParentDTO;
use DPD\Models\EPrint\Parcel\ParcelDTO;
use DPD\Models\EPrint\Service\ContactDTO;

class StdServicesDTO extends ParentDTO{

    public ?ExtraInsuranceDTO $extraInsurance;
    public ?ContactDTO $contact;
    public ?ParcelDTO $parcel;
    public ?ReverseDTO $reverse;
    public ?ReverseInverseReturnBcDTO $reverseInverseBcReturn;
    public ?AutoConsolidationDTO $autoConsolidation;
    public ?MarketingDTO $marketing;

    public function __construct(?ExtraInsuranceDTO $extraInsurance = null, ?ContactDTO $contact = null, ?ParcelDTO $parcel = null, ?ReverseDTO $reverse = null, ?ReverseInverseReturnBcDTO $reverseInverseBcReturn = null, ?AutoConsolidationDTO $autoConsolidation = null, ?MarketingDTO $marketing = null)
    {
        $this->extraInsurance = $extraInsurance;
        $this->contact = $contact;
        $this->parcel = $parcel;
        $this->reverse = $reverse;
        $this->reverseInverseBcReturn = $reverseInverseBcReturn;
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
     * Get the value of parcel
     */
    public function getParcel(): ?ParcelDTO
    {
        return $this->parcel;
    }

    /**
     * Set the value of parcel
     */
    public function setParcel(?ParcelDTO $parcel): self
    {
        $this->parcel = $parcel;

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
     * Get the value of reverseInverseBcReturn
     */
    public function getReverseInverseBcReturn(): ?ReverseInverseReturnBcDTO
    {
        return $this->reverseInverseBcReturn;
    }

    /**
     * Set the value of reverseInverseBcReturn
     */
    public function setReverseInverseBcReturn(?ReverseInverseReturnBcDTO $reverseInverseBcReturn): self
    {
        $this->reverseInverseBcReturn = $reverseInverseBcReturn;

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