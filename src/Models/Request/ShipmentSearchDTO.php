<?php

declare(strict_types=1);

namespace DPD\Models\Request;

use DPD\Models\AbstractModel;

/**
 * Shipment Search Request DTO
 * 
 * Used for searching shipments with filters
 */
class ShipmentSearchDTO extends AbstractModel
{
    public function getIds(): ?array
    {
        return $this->get('ids');
    }

    public function setIds(?array $ids): self
    {
        $this->set('ids', $ids);
        return $this;
    }

    public function getStatus(): ?array
    {
        return $this->get('status');
    }

    public function setStatus(?array $status): self
    {
        $this->set('status', $status);
        return $this;
    }

    public function getMainServiceAlias(): ?array
    {
        return $this->get('mainServiceAlias');
    }

    public function setMainServiceAlias(?array $mainServiceAlias): self
    {
        $this->set('mainServiceAlias', $mainServiceAlias);
        return $this;
    }

    public function getAdditionalServiceAlias(): ?array
    {
        return $this->get('additionalServiceAlias');
    }

    public function setAdditionalServiceAlias(?array $additionalServiceAlias): self
    {
        $this->set('additionalServiceAlias', $additionalServiceAlias);
        return $this;
    }

    public function getManifestId(): ?string
    {
        return $this->get('manifestId');
    }

    public function setManifestId(?string $manifestId): self
    {
        $this->set('manifestId', $manifestId);
        return $this;
    }

    public function getPage(): ?int
    {
        return $this->get('page');
    }

    public function setPage(?int $page): self
    {
        $this->set('page', $page);
        return $this;
    }

    public function getLimit(): ?int
    {
        return $this->get('limit');
    }

    public function setLimit(?int $limit): self
    {
        $this->set('limit', $limit);
        return $this;
    }

    public function getSenderName(): ?string
    {
        return $this->get('senderName');
    }

    public function setSenderName(?string $senderName): self
    {
        $this->set('senderName', $senderName);
        return $this;
    }

    public function getReferenceNumber(): ?string
    {
        return $this->get('referenceNumber');
    }

    public function setReferenceNumber(?string $referenceNumber): self
    {
        $this->set('referenceNumber', $referenceNumber);
        return $this;
    }

    public function getParcelNumber(): ?string
    {
        return $this->get('parcelNumber');
    }

    public function setParcelNumber(?string $parcelNumber): self
    {
        $this->set('parcelNumber', $parcelNumber);
        return $this;
    }
}
