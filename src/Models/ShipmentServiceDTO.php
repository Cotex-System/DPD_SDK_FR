<?php

declare(strict_types=1);

namespace DPD\Models;

/**
 * Shipment Service DTO
 * 
 * Defines the main shipping service to use
 */
class ShipmentServiceDTO extends AbstractModel
{
    public function __construct(?string $serviceAlias = null)
    {
        $data = [];
        if ($serviceAlias !== null) {
            $data['serviceAlias'] = $serviceAlias;
        }
        parent::__construct($data);
    }

    public function getServiceAlias(): ?string
    {
        return $this->get('serviceAlias');
    }

    public function setServiceAlias(string $serviceAlias): self
    {
        $this->set('serviceAlias', $serviceAlias);
        return $this;
    }
}
