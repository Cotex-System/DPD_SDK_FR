<?php

declare(strict_types=1);

namespace DPD\Models;

/**
 * Additional Service DTO
 * 
 * Represents an additional/optional service for a shipment
 */
class AdditionalServiceDTO extends AbstractModel
{
    public function getServiceAlias(): ?string
    {
        return $this->get('serviceAlias');
    }

    public function setServiceAlias(string $serviceAlias): self
    {
        $this->set('serviceAlias', $serviceAlias);
        return $this;
    }

    /**
     * @return array<int, string>|null
     */
    public function getFields(): ?array
    {
        return $this->get('fields');
    }

    /**
     * @param array<int, string>|null $fields
     */
    public function setFields(?array $fields): self
    {
        $this->set('fields', $fields);
        return $this;
    }
}
