<?php
namespace DPD\Models\EPrint\Service;
use DPD\Models\ParentDTO;

class SlaveServicesDTO extends ParentDTO
{
    public ?ExtraInsuranceDTO $extraInsurance;

    public function __construct(?ExtraInsuranceDTO $extraInsurance = null)
    {
        $this->extraInsurance = $extraInsurance;
    }
    public function getExtraInsurance(): ?ExtraInsuranceDTO
    {
        return $this->extraInsurance;
    }

    public function setExtraInsurance(?ExtraInsuranceDTO $extraInsurance): self
    {
        $this->extraInsurance = $extraInsurance;
        return $this;
    }
}