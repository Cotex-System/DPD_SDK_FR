<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;
use DPD\Models\AddressDTO;
use DPD\Models\ShipmentServiceDTO;
use DPD\Models\AdditionalServiceDTO;
use DPD\Models\ShipmentParcelDTO;
use DPD\Models\ShipmentPalletDTO;
use DPD\Models\ShipmentFlagDTO;

/**
 * Shipment Response DTO
 * 
 * Returned when getting shipment information
 */
class ShipmentDTO extends AbstractModel
{
    public function getId(): ?string
    {
        return $this->get('id');
    }

    /**
     * @return array<int, string>|null
     */
    public function getParcelNumbers(): ?array
    {
        return $this->get('parcelNumbers');
    }

    public function getSenderAddress(): ?AddressDTO
    {
        $data = $this->get('senderAddress');
        return $data ? new AddressDTO($data) : null;
    }

    public function getReceiverAddress(): ?AddressDTO
    {
        $data = $this->get('receiverAddress');
        return $data ? new AddressDTO($data) : null;
    }

    public function getSystemReturnAddress(): ?AddressDTO
    {
        $data = $this->get('systemReturnAddress');
        return $data ? new AddressDTO($data) : null;
    }

    public function getReturnAddress(): ?AddressDTO
    {
        $data = $this->get('returnAddress');
        return $data ? new AddressDTO($data) : null;
    }

    public function getService(): ?ShipmentServiceDTO
    {
        $data = $this->get('service');
        return $data ? new ShipmentServiceDTO($data['serviceAlias'] ?? null) : null;
    }

    /**
     * @return array<int, AdditionalServiceDTO>|null
     */
    public function getAdditionalServices(): ?array
    {
        $data = $this->get('additionalServices');
        if (!is_array($data)) {
            return null;
        }
        return array_map(fn($item) => new AdditionalServiceDTO($item), $data);
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getPayer(): ?array
    {
        return $this->get('payer');
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getInvoice(): ?array
    {
        return $this->get('invoice');
    }

    /**
     * @return array<int, ShipmentParcelDTO>|null
     */
    public function getParcels(): ?array
    {
        $data = $this->get('parcels');
        if (!is_array($data)) {
            return null;
        }
        return array_map(fn($item) => new ShipmentParcelDTO($item), $data);
    }

    /**
     * @return array<int, ShipmentPalletDTO>|null
     */
    public function getPallets(): ?array
    {
        $data = $this->get('pallets');
        if (!is_array($data)) {
            return null;
        }
        return array_map(fn($item) => new ShipmentPalletDTO($item), $data);
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getPickup(): ?array
    {
        return $this->get('pickup');
    }

    public function getContentDescription(): ?string
    {
        return $this->get('contentDescription');
    }

    /**
     * @return array<int, string>|null
     */
    public function getShipmentReferences(): ?array
    {
        return $this->get('shipmentReferences');
    }

    public function getAdditionalInfo(): ?string
    {
        return $this->get('additionalInfo');
    }

    public function getShipmentFlags(): ?ShipmentFlagDTO
    {
        $data = $this->get('shipmentFlags');
        return $data ? new ShipmentFlagDTO($data) : null;
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getDplPin(): ?array
    {
        return $this->get('dplPin');
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getShipmentLabels(): ?array
    {
        return $this->get('shipmentLabels');
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getLabelOptions(): ?array
    {
        return $this->get('labelOptions');
    }

    public function getStatus(): ?string
    {
        return $this->get('status');
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getActions(): ?array
    {
        return $this->get('actions');
    }

    public function getManifestId(): ?string
    {
        return $this->get('manifestId');
    }
}
