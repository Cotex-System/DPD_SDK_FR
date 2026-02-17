<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Service Response DTO
 * 
 * Information about an available service
 */
class ServiceDTO extends AbstractModel
{
    public function getServiceName(): string
    {
        return $this->get('serviceName');
    }

    public function getServiceAlias(): ?string
    {
        return $this->get('serviceAlias');
    }

    /**
     * @return array<int, string>|null
     */
    public function getServiceType(): ?array
    {
        return $this->get('serviceType');
    }

    /**
     * @return array<int, array<string, mixed>>|null
     */
    public function getSpecialFields(): ?array
    {
        return $this->get('specialFields');
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getLeadTime(): ?array
    {
        return $this->get('leadTime');
    }

    public function getPrice(): ?float
    {
        return $this->get('price');
    }

    public function getMessage(): ?string
    {
        return $this->get('message');
    }

    /**
     * @return array<int, ServiceDTO>|null
     */
    public function getAdditionalServices(): ?array
    {
        $data = $this->get('additionalServices');
        if (!is_array($data)) {
            return null;
        }
        return array_map(fn($item) => new ServiceDTO($item), $data);
    }

    public function getPackageSize(): ?string
    {
        return $this->get('packageSize');
    }

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getIsReturnAddress(): bool
    {
        return $this->get('isReturnAddress', false);
    }

    public function getIsBookCourier(): bool
    {
        return $this->get('isBookCourier', false);
    }

    public function getAdditionalRestrictionsApply(): ?bool
    {
        return $this->get('additionalRestrictionsApply');
    }
}
