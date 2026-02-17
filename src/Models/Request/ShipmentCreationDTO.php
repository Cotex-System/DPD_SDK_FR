<?php

declare(strict_types=1);

namespace DPD\Models\Request;

use DPD\Models\AbstractModel;
use DPD\Models\AddressDTO;use DPD\Models\ShipmentServiceDTO;
use DPD\Models\AdditionalServiceDTO;
use DPD\Models\ShipmentParcelDTO;
use DPD\Models\ShipmentPalletDTO;
use DPD\Models\ShipmentPickupDTO;
use DPD\Models\ShipmentFlagDTO;
use DPD\Models\InvoiceOptionsDTO;
use DPD\Models\LimitedQuantityDTO;

/**
 * Shipment Creation Request DTO
 * 
 * Used to create a new shipment
 */
class ShipmentCreationDTO extends AbstractModel
{
    public function getSenderAddress(): ?AddressDTO
    {
        $data = $this->get('senderAddress');
        return $data ? new AddressDTO($data) : null;
    }

    public function setSenderAddress(AddressDTO $senderAddress): self
    {
        $this->set('senderAddress', $senderAddress->toArray());
        return $this;
    }

    public function getReceiverAddress(): ?AddressDTO
    {
        $data = $this->get('receiverAddress');
        return $data ? new AddressDTO($data) : null;
    }

    public function setReceiverAddress(AddressDTO $receiverAddress): self
    {
        $this->set('receiverAddress', $receiverAddress->toArray());
        return $this;
    }

    public function getSystemReturnAddress(): ?AddressDTO
    {
        $data = $this->get('systemReturnAddress');
        return $data ? new AddressDTO($data) : null;
    }

    public function setSystemReturnAddress(?AddressDTO $systemReturnAddress): self
    {
        $this->set('systemReturnAddress', $systemReturnAddress?->toArray());
        return $this;
    }

    public function getReturnAddress(): ?AddressDTO
    {
        $data = $this->get('returnAddress');
        return $data ? new AddressDTO($data) : null;
    }

    public function setReturnAddress(?AddressDTO $returnAddress): self
    {
        $this->set('returnAddress', $returnAddress?->toArray());
        return $this;
    }

    public function getPayerCode(): ?string
    {
        return $this->get('payerCode');
    }

    public function setPayerCode(?string $payerCode): self
    {
        $this->set('payerCode', $payerCode);
        return $this;
    }

    public function getService(): ?ShipmentServiceDTO
    {
        $data = $this->get('service');
        return $data ? new ShipmentServiceDTO($data['serviceAlias'] ?? null) : null;
    }

    public function setService(ShipmentServiceDTO $service): self
    {
        $this->set('service', $service->toArray());
        return $this;
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
     * @param array<int, AdditionalServiceDTO>|null $additionalServices
     */
    public function setAdditionalServices(?array $additionalServices): self
    {
        $this->set('additionalServices', $additionalServices ? array_map(fn($s) => $s->toArray(), $additionalServices) : null);
        return $this;
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
     * @param array<int, ShipmentParcelDTO>|null $parcels
     */
    public function setParcels(?array $parcels): self
    {
        $this->set('parcels', $parcels ? array_map(fn($p) => $p->toArray(), $parcels) : null);
        return $this;
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
     * @param array<int, ShipmentPalletDTO>|null $pallets
     */
    public function setPallets(?array $pallets): self
    {
        $this->set('pallets', $pallets ? array_map(fn($p) => $p->toArray(), $pallets) : null);
        return $this;
    }

    public function getPickup(): ?ShipmentPickupDTO
    {
        $data = $this->get('pickup');
        return $data ? new ShipmentPickupDTO($data) : null;
    }

    public function setPickup(?ShipmentPickupDTO $pickup): self
    {
        $this->set('pickup', $pickup?->toArray());
        return $this;
    }

    public function getContentDescription(): ?string
    {
        return $this->get('contentDescription');
    }

    public function setContentDescription(?string $contentDescription): self
    {
        $this->set('contentDescription', $contentDescription);
        return $this;
    }

    /**
     * @return array<int, string>|null
     */
    public function getShipmentReferences(): ?array
    {
        return $this->get('shipmentReferences');
    }

    /**
     * @param array<int, string>|null $shipmentReferences
     */
    public function setShipmentReferences(?array $shipmentReferences): self
    {
        $this->set('shipmentReferences', $shipmentReferences);
        return $this;
    }

    public function getAdditionalInfo(): ?string
    {
        return $this->get('additionalInfo');
    }

    public function setAdditionalInfo(?string $additionalInfo): self
    {
        $this->set('additionalInfo', $additionalInfo);
        return $this;
    }

    public function getShipmentFlags(): ?ShipmentFlagDTO
    {
        $data = $this->get('shipmentFlags');
        return $data ? new ShipmentFlagDTO($data) : null;
    }

    public function setShipmentFlags(?ShipmentFlagDTO $shipmentFlags): self
    {
        $this->set('shipmentFlags', $shipmentFlags?->toArray());
        return $this;
    }

    public function getInvoiceOptions(): ?InvoiceOptionsDTO
    {
        $data = $this->get('invoiceOptions');
        return $data ? new InvoiceOptionsDTO($data) : null;
    }

    public function setInvoiceOptions(?InvoiceOptionsDTO $invoiceOptions): self
    {
        $this->set('invoiceOptions', $invoiceOptions?->toArray());
        return $this;
    }

    public function getMpsId(): ?string
    {
        return $this->get('mpsId');
    }

    public function setMpsId(?string $mpsId): self
    {
        $this->set('mpsId', $mpsId);
        return $this;
    }

    public function getLimitedQuantityData(): ?LimitedQuantityDTO
    {
        $data = $this->get('limitedQuantityData');
        return $data ? new LimitedQuantityDTO($data) : null;
    }

    public function setLimitedQuantityData(?LimitedQuantityDTO $limitedQuantityData): self
    {
        $this->set('limitedQuantityData', $limitedQuantityData?->toArray());
        return $this;
    }
}
