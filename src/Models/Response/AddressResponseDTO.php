<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Address Response DTO
 * 
 * Paginated list of addresses
 */
class AddressResponseDTO extends AbstractModel
{
    /**
     * @return array<int, array<string, mixed>>|null
     */
    public function getAddresses(): ?array
    {
        return $this->get('addresses');
    }

    public function getAddressesCount(): ?int
    {
        return $this->get('addressesCount');
    }

    public function getCanHaveNextPage(): ?bool
    {
        return $this->get('canHaveNextPage');
    }

    public function getPaginationType(): ?string
    {
        return $this->get('paginationType');
    }

    public function getTotal(): ?int
    {
        return $this->get('total');
    }

    public function getPageCount(): ?int
    {
        return $this->get('pageCount');
    }

    /**
     * @return array<int, string>|null
     */
    public function getDefaultAddressesIds(): ?array
    {
        return $this->get('defaultAddressesIds');
    }

    public function getTotalPages(): ?int
    {
        return $this->get('totalPages');
    }
}
