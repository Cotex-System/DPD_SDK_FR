<?php

declare(strict_types=1);

namespace DPD\Models\Request;

use DPD\Models\AbstractModel;

/**
 * Manifest Creation Request DTO
 * 
 * Used to create/print manifests
 */
class ManifestCreationDTO extends AbstractModel
{
    /**
     * @return array<int, string>|null
     */
    public function getShipmentIds(): ?array
    {
        return $this->get('shipmentIds');
    }

    /**
     * @param array<int, string>|null $shipmentIds
     */
    public function setShipmentIds(?array $shipmentIds): self
    {
        $this->set('shipmentIds', $shipmentIds);
        return $this;
    }

    /**
     * @return array<int, string>|null
     */
    public function getParcelNumbers(): ?array
    {
        return $this->get('parcelNumbers');
    }

    /**
     * @param array<int, string>|null $parcelNumbers
     */
    public function setParcelNumbers(?array $parcelNumbers): self
    {
        $this->set('parcelNumbers', $parcelNumbers);
        return $this;
    }
}
