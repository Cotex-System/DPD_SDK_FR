<?php

declare(strict_types=1);

namespace DPD\Models\Request;

use DPD\Models\AbstractModel;

/**
 * Status Tracking Request DTO
 * 
 * Used for tracking shipments by various identifiers
 */
class StatusTrackingRequestDTO extends AbstractModel
{
    public function getParcelNumbers(): ?array
    {
        return $this->get('parcelNumbers');
    }

    public function setParcelNumbers(?array $parcelNumbers): self
    {
        $this->set('parcelNumbers', $parcelNumbers);
        return $this;
    }

    public function getShipmentIds(): ?array
    {
        return $this->get('shipmentIds');
    }

    public function setShipmentIds(?array $shipmentIds): self
    {
        $this->set('shipmentIds', $shipmentIds);
        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->get('language');
    }

    public function setLanguage(?string $language): self
    {
        $this->set('language', $language);
        return $this;
    }

    public function getIncludeEvents(): ?bool
    {
        return $this->get('includeEvents');
    }

    public function setIncludeEvents(?bool $includeEvents): self
    {
        $this->set('includeEvents', $includeEvents);
        return $this;
    }
}
