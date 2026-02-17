<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Pickup Page Response DTO
 * 
 * Paginated list of pickups
 */
class PickupPageDTO extends AbstractModel
{
    /**
     * @return array<int, PickupResponseDTO>|null
     */
    public function getItems(): ?array
    {
        $data = $this->get('items');
        if (!is_array($data)) {
            return null;
        }
        return array_map(fn($item) => new PickupResponseDTO($item), $data);
    }

    public function getTotalPages(): ?int
    {
        return $this->get('totalPages');
    }

    public function getPageCount(): ?int
    {
        return $this->get('pageCount');
    }

    public function getCanHaveNextPage(): ?bool
    {
        return $this->get('canHaveNextPage');
    }
}
