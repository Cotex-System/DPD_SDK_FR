<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;
use DPD\Models\AddressDTO;
use DPD\Models\ParcelDTO;
use DPD\Models\PalletDTO;

/**
 * Pickup Response DTO
 * 
 * Returned when getting pickup information
 */
class PickupResponseDTO extends AbstractModel
{
    public function getId(): ?string
    {
        return $this->get('id');
    }

    /**
     * @return array<int, string>|null
     */
    public function getShipmentIds(): ?array
    {
        return $this->get('shipmentIds');
    }

    public function getSenderName(): ?string
    {
        return $this->get('senderName');
    }

    public function getAddress(): ?string
    {
        return $this->get('address');
    }

    public function getContactName(): ?string
    {
        return $this->get('contactName');
    }

    public function getContactInfo(): ?string
    {
        return $this->get('contactInfo');
    }

    public function getContactEmail(): ?string
    {
        return $this->get('contactEmail');
    }

    public function getContactPhone(): ?string
    {
        return $this->get('contactPhone');
    }

    public function getPickupDate(): ?string
    {
        return $this->get('pickupDate');
    }

    public function getPickupTimeFrom(): ?string
    {
        return $this->get('pickupTimeFrom');
    }

    public function getPickupTimeTo(): ?string
    {
        return $this->get('pickupTimeTo');
    }

    public function getParcelCount(): ?int
    {
        return $this->get('parcelCount');
    }

    public function getParcelWeight(): ?float
    {
        return $this->get('parcelWeight');
    }

    /**
     * @return array<int, PalletDTO>|null
     */
    public function getPallets(): ?array
    {
        $data = $this->get('pallets');
        if (!is_array($data)) {
            return null;
        }
        return array_map(fn($item) => new PalletDTO($item), $data);
    }

    public function getPalletDisplay(): ?string
    {
        return $this->get('palletDisplay');
    }

    public function getParcelWeightDisplay(): ?string
    {
        return $this->get('parcelWeightDisplay');
    }

    public function getCustomerName(): ?string
    {
        return $this->get('customerName');
    }

    public function getMessageToCourier(): ?string
    {
        return $this->get('messageToCourier');
    }

    public function getCreatedAt(): ?string
    {
        return $this->get('createdAt');
    }
}
