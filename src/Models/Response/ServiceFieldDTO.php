<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Service Field DTO
 * 
 * Information about a service field requirement
 */
class ServiceFieldDTO extends AbstractModel
{
    public function getName(): string
    {
        return $this->get('name');
    }

    public function getTitle(): string
    {
        return $this->get('title');
    }

    public function getDescription(): string
    {
        return $this->get('description');
    }

    public function getMandatory(): bool
    {
        return $this->get('mandatory');
    }

    public function getType(): ?string
    {
        return $this->get('type');
    }

    /**
     * @return array<int, string>|null
     */
    public function getPossibleValues(): ?array
    {
        return $this->get('possibleValues');
    }

    public function getValidationType(): ?string
    {
        return $this->get('validationType');
    }

    /**
     * @return array<int, string>|null
     */
    public function getValidationRules(): ?array
    {
        return $this->get('validationRules');
    }
}
