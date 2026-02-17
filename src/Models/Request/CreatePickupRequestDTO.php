<?php

declare(strict_types=1);

namespace DPD\Models\Request;

use DPD\Models\AbstractModel;
use DPD\Models\ParcelDTO;
use DPD\Models\PalletDTO;

/**
 * Create Pickup Request DTO
 * 
 * Used to create a new pickup request
 */
class CreatePickupRequestDTO extends AbstractModel
{
    /**
     * @return array<string, mixed>|null
     */
    public function getAddress(): ?array
    {
        return $this->get('address');
    }

    /**
     * @param array<string, mixed>|null $address
     */
    public function setAddress(?array $address): self
    {
        $this->set('address', $address);
        return $this;
    }

    /**
     * @return array<int, string>|null
     */
    public function getShipmentIds(): ?array
    {
        return $this->get('shipmentIds');
    }

    /**
     * @param array<int, string>|null $shipmentIds
     */
    public function setShipmentIds(?array $shipmentIds): self
    {
        $this->set('shipmentIds', $shipmentIds);
        return $this;
    }

    public function getMessageToCourier(): ?string
    {
        return $this->get('messageToCourier');
    }

    public function setMessageToCourier(?string $messageToCourier): self
    {
        $this->set('messageToCourier', $messageToCourier);
        return $this;
    }

    public function getPickupDate(): string
    {
        return $this->get('pickupDate');
    }

    public function setPickupDate(string $pickupDate): self
    {
        $this->set('pickupDate', $pickupDate);
        return $this;
    }

    public function getPickupTimeFrom(): string
    {
        return $this->get('pickupTimeFrom');
    }

    public function setPickupTimeFrom(string $pickupTimeFrom): self
    {
        $this->set('pickupTimeFrom', $pickupTimeFrom);
        return $this;
    }

    public function getPickupTimeTo(): string
    {
        return $this->get('pickupTimeTo');
    }

    public function setPickupTimeTo(string $pickupTimeTo): self
    {
        $this->set('pickupTimeTo', $pickupTimeTo);
        return $this;
    }

    public function getParcel(): ?ParcelDTO
    {
        $data = $this->get('parcel');
        return $data ? new ParcelDTO($data) : null;
    }

    public function setParcel(?ParcelDTO $parcel): self
    {
        $this->set('parcel', $parcel?->toArray());
        return $this;
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

    /**
     * @param array<int, PalletDTO>|null $pallets
     */
    public function setPallets(?array $pallets): self
    {
        $this->set('pallets', $pallets ? array_map(fn($p) => $p->toArray(), $pallets) : null);
        return $this;
    }

    public function getPayerCode(): ?int
    {
        return $this->get('payerCode');
    }

    public function setPayerCode(?int $payerCode): self
    {
        $this->set('payerCode', $payerCode);
        return $this;
    }
}
