<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Country Response DTO
 * 
 * Country information
 */
class CountryDTO extends AbstractModel
{
    public function getValue(): string
    {
        return $this->get('value');
    }

    public function getName(): string
    {
        return $this->get('name');
    }

    public function getTranslatedName(): string
    {
        return $this->get('translatedName');
    }

    public function getCode(): string
    {
        return $this->get('code');
    }
}
