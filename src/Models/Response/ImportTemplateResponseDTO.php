<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Import Template Response DTO
 * 
 * Returned when getting import templates
 */
class ImportTemplateResponseDTO extends AbstractModel
{
    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getName(): ?string
    {
        return $this->get('name');
    }

    public function getDescription(): ?string
    {
        return $this->get('description');
    }

    public function getType(): ?string
    {
        return $this->get('type');
    }

    public function isDefault(): ?bool
    {
        return $this->get('isDefault');
    }

    /**
     * @return array<int, ImportTemplateItemDTO>|null
     */
    public function getItems(): ?array
    {
        $items = $this->get('items');
        if (!is_array($items)) {
            return null;
        }

        return array_map(function ($item) {
            return new ImportTemplateItemDTO($item);
        }, $items);
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
