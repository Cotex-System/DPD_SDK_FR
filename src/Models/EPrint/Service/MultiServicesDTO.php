<?php
namespace DPD\Models\EPrint\Service;

use DPD\Models\EPrint\Labels\PickupDataDTO;
use DPD\Models\ParentDTO;

class MultiServicesDTO extends ParentDTO{
    public ?ConsolidationDTO $consolidation;
    public ?ContactDTO $contact;
    public ?PickupDataDTO $pickupData;

    public function __construct(?ConsolidationDTO $consolidation = null, ?ContactDTO $contact = null, ?PickupDataDTO $pickupData = null)
    {
        $this->consolidation = $consolidation;
        $this->contact = $contact;
        $this->pickupData = $pickupData;
    }

    public function getConsolidation(): ?ConsolidationDTO
    {
        return $this->consolidation;
    }
    public function setConsolidation(?ConsolidationDTO $consolidation): self
    {
        $this->consolidation = $consolidation;
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
     * Get the value of pickupData
     */
    public function getPickupData(): ?PickupDataDTO
    {
        return $this->pickupData;
    }

    /**
     * Set the value of pickupData
     */
    public function setPickupData(?PickupDataDTO $pickupData): self
    {
        $this->pickupData = $pickupData;

        return $this;
    }
}