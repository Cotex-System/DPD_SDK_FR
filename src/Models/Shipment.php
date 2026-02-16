<?php

declare(strict_types=1);

namespace DPD\Models;

/**
 * Modèle pour un envoi
 */
class Shipment extends AbstractModel
{
    /**
     * Créer un nouvel envoi
     *
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    public function getUuid(): ?string
    {
        return $this->get('uuid');
    }

    public function getShipmentNumber(): ?string
    {
        return $this->get('shipmentNumber');
    }

    public function getReference(): ?string
    {
        return $this->get('reference');
    }

    public function setReference(string $reference): self
    {
        $this->set('reference', $reference);
        return $this;
    }

    public function getProduct(): ?string
    {
        return $this->get('product');
    }

    public function setProduct(string $product): self
    {
        $this->set('product', $product);
        return $this;
    }

    public function getReceiver(): ?Address
    {
        $receiverData = $this->get('receiver');
        return $receiverData ? new Address($receiverData) : null;
    }

    public function setReceiver(Address $receiver): self
    {
        $this->set('receiver', $receiver->toArray());
        return $this;
    }

    public function getSender(): ?Address
    {
        $senderData = $this->get('sender');
        return $senderData ? new Address($senderData) : null;
    }

    public function setSender(Address $sender): self
    {
        $this->set('sender', $sender->toArray());
        return $this;
    }

    /**
     * @return array<int, Parcel>
     */
    public function getParcels(): array
    {
        $parcelsData = $this->get('parcels', []);
        $parcels = [];
        
        foreach ($parcelsData as $parcelData) {
            $parcels[] = new Parcel($parcelData);
        }

        return $parcels;
    }

    /**
     * @param array<int, Parcel> $parcels
     */
    public function setParcels(array $parcels): self
    {
        $parcelsData = [];
        foreach ($parcels as $parcel) {
            $parcelsData[] = $parcel->toArray();
        }
        
        $this->set('parcels', $parcelsData);
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->get('status');
    }

    public function getCreatedAt(): ?string
    {
        return $this->get('createdAt');
    }

    public function getUpdatedAt(): ?string
    {
        return $this->get('updatedAt');
    }
}
