<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Lead Time Response DTO
 * 
 * Expected delivery time information
 */
class LeadTimeResponseDTO extends AbstractModel
{
    public function getLeadTime(): ?int
    {
        return $this->get('leadTime');
    }

    public function getExpectedDeliveryDate(): ?string
    {
        return $this->get('expectedDeliveryDate');
    }

    public function getCutOffTimeSendingDepot(): ?string
    {
        return $this->get('cutOffTimeSendingDepot');
    }
}
