<?php

namespace DPD\Models\EPrint\Parcel;

use DPD\Models\ParentDTO;

class ParcelInfoDTO extends ParentDTO
{
    /**     * @var string
     * Code ISO pays/réseau  d'origine du colis (ex : FR, BE, DE, etc.)

     */
    public ?string $BarcodeSource;
    /**     * @var string
     * Numéro d’expédition DPD (ex : 01234567890123456789)
     */
    public ?string $BarcodeId;

    public function __construct(?string $BarcodeSource = null, ?string $BarcodeId = null)
    {
        $this->BarcodeSource = $BarcodeSource;
        $this->BarcodeId = $BarcodeId;
    }
    /**     * Get the value of BarcodeSource
     * @return string|null
     */    public function getBarcodeSource(): ?string
    {
        return $this->BarcodeSource;
    }
    /**     * Set the value of BarcodeSource
     * @param string|null $BarcodeSource
     * @return self
     */    public function setBarcodeSource(?string $BarcodeSource): self
    {
        $this->BarcodeSource = $BarcodeSource;
        return $this;
    }
    /**     * Get the value of BarcodeId
     * @return string|null
     */    public function getBarcodeId(): ?string
    {
        return $this->BarcodeId;
    }
}
