<?php
namespace DPD\Models\Trace;
use DPD\Models\ParentDTO;

class ParcelInfoSinDTO extends ParentDTO
{
    /**
     * @var ?string
     */
    public ?string $BarcodeSource;

    /**
     * @var ?string
     */
    public ?string $BarcodeId;

    /**
     * @var ?string
     */
    public ?string $Sin;

    public function __construct(?string $BarcodeSource = null, ?string $BarcodeId = null, ?string $Sin = null)
    {
        $this->BarcodeSource = $BarcodeSource;
        $this->BarcodeId = $BarcodeId;
        $this->Sin = $Sin;
    }

    /**
     * Get the value of Sin
     */
    public function getSin(): ?string
    {
        return $this->Sin;
    }

    /**
     * Set the value of Sin
     */
    public function setSin(?string $Sin): self
    {
        $this->Sin = $Sin;

        return $this;
    }

    /**
     * Get the value of BarcodeId
     */
    public function getBarcodeId(): ?string
    {
        return $this->BarcodeId;
    }

    /**
     * Set the value of BarcodeId
     */
    public function setBarcodeId(?string $BarcodeId): self
    {
        $this->BarcodeId = $BarcodeId;

        return $this;
    }

    /**
     * Get the value of BarcodeSource
     */
    public function getBarcodeSource(): ?string
    {
        return $this->BarcodeSource;
    }

    /**
     * Set the value of BarcodeSource
     */
    public function setBarcodeSource(?string $BarcodeSource): self
    {
        $this->BarcodeSource = $BarcodeSource;

        return $this;
    }
}