<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Import Template Item DTO
 * 
 * Item within an import template
 */
class ImportTemplateItemDTO extends AbstractModel
{
    public function getColumnIndex(): ?int
    {
        return $this->get('columnIndex');
    }

    public function getFieldName(): ?string
    {
        return $this->get('fieldName');
    }

    public function getFieldType(): ?string
    {
        return $this->get('fieldType');
    }

    public function isRequired(): ?bool
    {
        return $this->get('required');
    }

    public function getDefaultValue(): ?string
    {
        return $this->get('defaultValue');
    }

    public function getMapping(): ?array
    {
        return $this->get('mapping');
    }
}
