<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Shipment Page Response DTO
 * 
 * Paginated list of shipments
 */
class ShipmentPageDTO extends AbstractModel
{
    /**
     * @return array<int, ShipmentDTO>|null
     */
    public function getItems(): ?array
    {
        $data = $this->get('items');
        if (!is_array($data)) {
            return null;
        }
        return array_map(fn($item) => new ShipmentDTO($item), $data);
    }

    public function getTotal(): ?int
    {
        return $this->get('total');
    }

    public function getCurrentPage(): ?int
    {
        return $this->get('currentPage');
    }

    public function getPageSize(): ?int
    {
        return $this->get('pageSize');
    }
}
