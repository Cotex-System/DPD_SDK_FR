<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Manifest Response DTO
 * 
 * Returned when creating or retrieving manifests
 */
class ManifestResponseDTO extends AbstractModel
{
    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getUuid(): ?string
    {
        return $this->get('uuid');
    }

    public function getDate(): ?string
    {
        return $this->get('date');
    }

    public function getStatus(): ?string
    {
        return $this->get('status');
    }

    public function getShipmentCount(): ?int
    {
        return $this->get('shipmentCount');
    }

    public function getParcelCount(): ?int
    {
        return $this->get('parcelCount');
    }

    public function getContent(): ?string
    {
        return $this->get('content') ?? $this->get('pdf');
    }

    public function getFileContent(): ?string
    {
        return $this->get('fileContent');
    }

    public function getFileName(): ?string
    {
        return $this->get('fileName');
    }

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

    public function getTotalWeight(): ?float
    {
        return $this->get('totalWeight') ? (float) $this->get('totalWeight') : null;
    }

    public function getCreatedAt(): ?string
    {
        return $this->get('createdAt');
    }

    public function getUpdatedAt(): ?string
    {
        return $this->get('updatedAt');
    }
}
