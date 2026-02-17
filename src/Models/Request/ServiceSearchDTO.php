<?php

declare(strict_types=1);

namespace DPD\Models\Request;

use DPD\Models\AbstractModel;

/**
 * Service Search Request DTO
 * 
 * Used to search for available services
 */
class ServiceSearchDTO extends AbstractModel
{
    public function getServiceType(): ?string
    {
        return $this->get('serviceType');
    }

    public function setServiceType(?string $serviceType): self
    {
        $this->set('serviceType', $serviceType);
        return $this;
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getSenderGeography(): ?array
    {
        return $this->get('senderGeography');
    }

    /**
     * @param array<string, mixed>|null $senderGeography
     */
    public function setSenderGeography(?array $senderGeography): self
    {
        $this->set('senderGeography', $senderGeography);
        return $this;
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getReceiverGeography(): ?array
    {
        return $this->get('receiverGeography');
    }

    /**
     * @param array<string, mixed>|null $receiverGeography
     */
    public function setReceiverGeography(?array $receiverGeography): self
    {
        $this->set('receiverGeography', $receiverGeography);
        return $this;
    }

    public function getPackageSize(): ?string
    {
        return $this->get('packageSize');
    }

    public function setPackageSize(?string $packageSize): self
    {
        $this->set('packageSize', $packageSize);
        return $this;
    }

    public function getMainService(): ?string
    {
        return $this->get('mainService');
    }

    public function setMainService(?string $mainService): self
    {
        $this->set('mainService', $mainService);
        return $this;
    }

    public function getMainServiceAlias(): ?string
    {
        return $this->get('mainServiceAlias');
    }

    public function setMainServiceAlias(?string $mainServiceAlias): self
    {
        $this->set('mainServiceAlias', $mainServiceAlias);
        return $this;
    }

    public function getPayerCode(): int
    {
        return $this->get('payerCode');
    }

    public function setPayerCode(int $payerCode): self
    {
        $this->set('payerCode', $payerCode);
        return $this;
    }

    public function getPayerId(): ?int
    {
        return $this->get('payerId');
    }

    public function setPayerId(?int $payerId): self
    {
        $this->set('payerId', $payerId);
        return $this;
    }

    public function getAffiliateLinkId(): ?string
    {
        return $this->get('affiliateLinkId');
    }

    public function setAffiliateLinkId(?string $affiliateLinkId): self
    {
        $this->set('affiliateLinkId', $affiliateLinkId);
        return $this;
    }
}
