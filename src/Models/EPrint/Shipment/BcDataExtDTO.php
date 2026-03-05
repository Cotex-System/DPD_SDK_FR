<?php
namespace DPD\Models\EPrint\Shipment;
use DPD\Models\ParentDTO;

class BcDataExtDTO extends ParentDTO{
    /**     * @var string
     * Contenu du code à barres DPD 
     */
    public ?string $BarCode;
    /**     * @var string
     * Numéro d’expédition  
     */
    public ?string $BarCodeId;
    /**     * @var int
     * Code country 250=France
     */
    public ?int $BarCodeSource;

    /**
     * Get the value of BarCode
     */
    public function getBarCode(): ?string
    {
        return $this->BarCode;
    }

    /**
     * Set the value of BarCode
     */
    public function setBarCode(?string $BarCode): self
    {
        $this->BarCode = $BarCode;

        return $this;
    }

    /**
     * Get the value of BarCodeId
     */
    public function getBarCodeId(): ?string
    {
        return $this->BarCodeId;
    }

    /**
     * Set the value of BarCodeId
     */
    public function setBarCodeId(?string $BarCodeId): self
    {
        $this->BarCodeId = $BarCodeId;

        return $this;
    }

    /**
     * Get the value of BarCodeSource
     */
    public function getBarCodeSource(): ?int
    {
        return $this->BarCodeSource;
    }

    /**
     * Set the value of BarCodeSource
     */
    public function setBarCodeSource(?int $BarCodeSource): self
    {
        $this->BarCodeSource = $BarCodeSource;

        return $this;
    }
}