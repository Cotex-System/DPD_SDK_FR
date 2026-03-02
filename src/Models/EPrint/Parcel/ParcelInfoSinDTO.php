<?php

namespace DPD\Models\EPrint\Parcel;

use DPD\Models\ParentDTO;

class ParcelInfoSinDTO extends ParentDTO
{
    /**     * @var string
     * Code ISO pays/réseau d'origine du colis (ex : FR, BE, DE, etc.)
     */
    public ?string $BarcodeSource;
    /**     * @var string
     * Numéro d’expédition DPD (ex : 01234567890123456789)
     */
    public ?string $BarcodeId;
    /**     * @var string
     * Identifiant de l’expédition 
     */
    public ?string $Sin;

    public function __construct(?string $BarcodeSource = null, ?string $BarcodeId = null, ?string $Sin = null)
    {
        $this->BarcodeSource = $BarcodeSource;
        $this->BarcodeId = $BarcodeId;
        $this->Sin = $Sin;
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
    /**     * Set the value of BarcodeId
     * @param string|null $BarcodeId
     * @return self
     */    public function setBarcodeId(?string $BarcodeId): self
    {
        $this->BarcodeId = $BarcodeId;
        return $this;
    }
    /**     * Get the value of Sin
     * @return string|null
     */    public function getSin(): ?string
    {
        return $this->Sin;
    }
    /**     * Set the value of Sin
     * @param string|null $Sin
     * @return self
     */    public function setSin(?string $Sin): self
    {
        $this->Sin = $Sin;
        return $this;
    }
}
