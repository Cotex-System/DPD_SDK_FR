<?php
namespace DPD\Models\Trace;
use DPD\Models\ParentDTO;

class ParcelInfoDTO extends ParentDTO
{
    /**
     * @var ?string
     */
    public ?string $BarcodeSource;
    /**
     * @var ?string
     */
    public ?string $BarcodeId;

    public function __construct(?string $BarcodeSource = null, ?string $BarcodeId = null)
    {
        $this->BarcodeSource = $BarcodeSource;
        $this->BarcodeId = $BarcodeId;
    }

    /**
     * Get the value of BarcodeId
     */
    public function getBarcodeId(): ?string
    {
        return $this->BarcodeId;
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

    /**
     * Set the value of BarcodeId
     */
    public function setBarcodeId(?string $BarcodeId): self
    {
        $this->BarcodeId = $BarcodeId;

        return $this;
    }
}