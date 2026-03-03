<?php

declare(strict_types=1);

namespace DPD\Models\Response\EPrint;

use DPD\Models\ParentDTO;

class CreateReverseInverseShipmentBcResponseDTO extends ParentDTO{
    /** @var ShipmentDTO[]|null */
    private ?array $shipment = null;

    public function __construct(?array $shipment = null)
    {
        $this->shipment = $shipment;
    }

    /**
     * @param array<string, mixed>|object|string|null $source
     */
    public static function from(array|object|string|null $source): static
    {
        $dto = parent::from($source);

        if (is_object($source)) {
            $source = get_object_vars($source);
        }

        if (!is_array($source)) {
            return $dto;
        }

        $rawShipment = $source['shipment'] ?? $source['Shipment'] ?? $source['ShipmentBc'] ?? null;

        if ($rawShipment === null) {
            return $dto;
        }

        if (is_object($rawShipment)) {
            $rawShipment = get_object_vars($rawShipment);
        }

        if (is_array($rawShipment) && isset($rawShipment['Shipment'])) {
            $rawShipment = $rawShipment['Shipment'];
        }

        if (is_object($rawShipment)) {
            $rawShipment = get_object_vars($rawShipment);
        }

        if (!is_array($rawShipment)) {
            return $dto;
        }

        if ($rawShipment === []) {
            $dto->shipment = [];
            return $dto;
        }

        $isList = array_keys($rawShipment) === range(0, count($rawShipment) - 1);
        $dto->shipment = $isList ? $rawShipment : [$rawShipment];

        return $dto;
    }

    public function getShipment(): ?array
    {
        return $this->shipment;
    }
}