<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Status Tracking Details DTO
 * 
 * Details for each tracking event
 */
class StatusTrackingDetailsDTO extends AbstractModel
{
    public function getStatus(): ?string
    {
        return $this->get('status');
    }

    public function getTimestamp(): ?string
    {
        return $this->get('timestamp');
    }

    public function getDate(): ?string
    {
        return $this->get('date');
    }

    public function getTime(): ?string
    {
        return $this->get('time');
    }

    public function getLocation(): ?string
    {
        return $this->get('location');
    }

    public function getCity(): ?string
    {
        return $this->get('city');
    }

    public function getCountry(): ?string
    {
        return $this->get('country');
    }

    public function getDescription(): ?string
    {
        return $this->get('description');
    }

    public function getSignatoryName(): ?string
    {
        return $this->get('signatoryName');
    }

    public function getProofOfDelivery(): ?string
    {
        return $this->get('proofOfDelivery');
    }
}
