<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Label Response DTO
 * 
 * Returned when creating/downloading labels
 */
class LabelResponseDTO extends AbstractModel
{
    /**
     * @return array<int, string>|null
     */
    public function getShipmentIds(): ?array
    {
        return $this->get('shipmentIds');
    }

    /**
     * @return array<int, string>|null
     */
    public function getParcelNumbers(): ?array
    {
        return $this->get('parcelNumbers');
    }

    public function getLabelFormat(): ?string
    {
        return $this->get('labelFormat');
    }

    /**
     * @return array<int, array<string, mixed>>|null
     */
    public function getPages(): ?array
    {
        return $this->get('pages');
    }

    /**
     * @return array<int, array<string, mixed>>|null
     */
    public function getLabels(): ?array
    {
        return $this->get('labels');
    }
}
