<?php

declare(strict_types=1);

namespace DPD\Models\Response\EPrint;

use DPD\Models\EPrint\Shipment\ShipmentBcDTO;
use DPD\Models\ParentDTO;

class CreateReverseInverseShipmentWithLabelsBcResponseDTO extends ParentDTO{

    private ?ShipmentBcDTO $shipment = null;
    /** @var LabelDTO[]|null */
    private ?array $labels = null;
    public function __construct(?ShipmentBcDTO $shipment = null, ?array $labels = null)
    {
        $this->shipment = $shipment;
        $this->labels = $labels;
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
        if ($rawShipment !== null && (is_array($rawShipment) || is_object($rawShipment) || is_string($rawShipment))) {
            if (is_object($rawShipment)) {
                $rawShipment = get_object_vars($rawShipment);
            }

            if (is_array($rawShipment) && isset($rawShipment['Type']) && !isset($rawShipment['type'])) {
                $rawShipment['type'] = $rawShipment['Type'];
            }

            $dto->shipment = ShipmentBcDTO::from($rawShipment);
        }

        $rawLabels = $source['labels'] ?? $source['Labels'] ?? null;
        if (is_object($rawLabels)) {
            $rawLabels = get_object_vars($rawLabels);
        }

        if (is_array($rawLabels) && isset($rawLabels['Label']) && is_array($rawLabels['Label'])) {
            $rawLabels = $rawLabels['Label'];
        }

        if (is_array($rawLabels)) {
            $dto->labels = $rawLabels;
        }

        return $dto;
    }

    public function getShipment(): ?ShipmentBcDTO
    {
        return $this->shipment;
    }
    public function getLabels(): ?array
    {        return $this->labels;
    }
}