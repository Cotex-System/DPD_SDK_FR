<?php
namespace DPD\Models\Response\EPrint;
use DPD\Models\ParentDTO;


class CreateCollectionRequestBcResponseDTO extends ParentDTO{
    /**
     * @var ShipmentDTO[]|null
     */
    private ?array $ShipmentBC = null;

    public function __construct(?array $ShipmentBC = null)
    {
        $this->ShipmentBC = $ShipmentBC;
    }

    public function getShipmentBC(): ?array
    {
        return $this->ShipmentBC;
    }

    public function setShipmentBC(?array $ShipmentBC): self
    {
        $this->ShipmentBC = $ShipmentBC;
        return $this;
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

        $shipment = $source['ShipmentBC'] ?? $source['ShipmentBc'] ?? $source['shipmentBC'] ?? $source['shipmentBc'] ?? null;

        if (is_object($shipment)) {
            $shipment = get_object_vars($shipment);
        }

        if (is_array($shipment)) {
            $dto->ShipmentBC = $shipment;
        }

        return $dto;
    }
}