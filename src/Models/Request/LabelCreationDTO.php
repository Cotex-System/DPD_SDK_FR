<?php

declare(strict_types=1);

namespace DPD\Models\Request;

use DPD\Models\AbstractModel;

/**
 * Label Creation Request DTO
 * 
 * Used to create/download labels
 */
class LabelCreationDTO extends AbstractModel
{
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

    /**
     * @return array<int, string>|null
     */
    public function getParcelNumbers(): ?array
    {
        return $this->get('parcelNumbers');
    }

    /**
     * @param array<int, string>|null $parcelNumbers
     */
    public function setParcelNumbers(?array $parcelNumbers): self
    {
        $this->set('parcelNumbers', $parcelNumbers);
        return $this;
    }

    public function getOffsetPosition(): ?int
    {
        return $this->get('offsetPosition');
    }

    public function setOffsetPosition(?int $offsetPosition): self
    {
        $this->set('offsetPosition', $offsetPosition);
        return $this;
    }

    public function getDownloadLabel(): ?bool
    {
        return $this->get('downloadLabel');
    }

    public function setDownloadLabel(?bool $downloadLabel): self
    {
        $this->set('downloadLabel', $downloadLabel);
        return $this;
    }

    public function getEmailLabel(): ?bool
    {
        return $this->get('emailLabel');
    }

    public function setEmailLabel(?bool $emailLabel): self
    {
        $this->set('emailLabel', $emailLabel);
        return $this;
    }

    public function getLabelFormat(): ?string
    {
        return $this->get('labelFormat');
    }

    public function setLabelFormat(?string $labelFormat): self
    {
        $this->set('labelFormat', $labelFormat);
        return $this;
    }

    public function getPaperSize(): ?string
    {
        return $this->get('paperSize');
    }

    public function setPaperSize(?string $paperSize): self
    {
        $this->set('paperSize', $paperSize);
        return $this;
    }

    public function getDpi(): ?string
    {
        return $this->get('dpi');
    }

    public function setDpi(?string $dpi): self
    {
        $this->set('dpi', $dpi);
        return $this;
    }
}
