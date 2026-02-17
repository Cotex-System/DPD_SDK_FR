<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Time Frame Response DTO
 * 
 * Returned when requesting delivery timeframes
 */
class TimeFrameResponseDTO extends AbstractModel
{
    public function getDate(): ?string
    {
        return $this->get('date');
    }

    public function getDeliveryDate(): ?string
    {
        return $this->get('deliveryDate');
    }

    public function getTimeFrameFrom(): ?string
    {
        return $this->get('timeFrameFrom');
    }

    public function getTimeFrameTo(): ?string
    {
        return $this->get('timeFrameTo');
    }

    public function getService(): ?string
    {
        return $this->get('service');
    }

    public function getServiceName(): ?string
    {
        return $this->get('serviceName');
    }

    public function getIsAvailable(): ?bool
    {
        return $this->get('isAvailable');
    }

    public function getPriority(): ?int
    {
        return $this->get('priority');
    }

    public function getLeadTime(): ?int
    {
        return $this->get('leadTime');
    }

    public function getCost(): ?float
    {
        return $this->get('cost') ? (float) $this->get('cost') : null;
    }

    public function getCurrency(): ?string
    {
        return $this->get('currency');
    }
}
