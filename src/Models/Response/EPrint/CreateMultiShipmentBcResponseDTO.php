<?php

declare(strict_types=1);

namespace DPD\Models\Response\EPrint;

use DPD\Models\ParentDTO;

class CreateMultiShipmentBcResponseDTO extends ParentDTO
{
    /** @var array<mixed>|null */
    private ?array $shipments = null;

    /**
     * @param array<mixed>|null $shipments
     */
    public function __construct(?array $shipments = null)
    {
        $this->shipments = $shipments;
    }

    /**
     * @param array<string, mixed>|object|string|null $source
     */
    public static function from(array|object|string|null $source): static
    {
        $dto = parent::from($source);

        if ($dto->shipments !== null) {
            return $dto;
        }

        $normalized = null;

        if (is_object($source)) {
            $source = get_object_vars($source);
        }

        if (is_array($source)) {
            if (isset($source['shipments'])) {
                $normalized = $source['shipments'];
            } elseif (isset($source['MultiShipment'])) {
                $normalized = $source['MultiShipment'];
            } elseif (isset($source['ShipmentBc'])) {
                $normalized = $source['ShipmentBc'];
            }
        }

        if (is_object($normalized)) {
            $normalized = get_object_vars($normalized);
        }

        if (is_array($normalized) && isset($normalized['ShipmentBc'])) {
            $normalized = $normalized['ShipmentBc'];
        }

        if ($normalized instanceof \stdClass) {
            $normalized = get_object_vars($normalized);
        }

        if (!is_array($normalized)) {
            $normalized = null;
        }

        $dto->shipments = $normalized;

        return $dto;
    }

    /** @return array<mixed>|null */
    public function getShipments(): ?array
    {
        return $this->shipments;
    }

    /** @return array<mixed>|null */
    public function getMultiShipment(): ?array
    {
        return $this->shipments;
    }
}