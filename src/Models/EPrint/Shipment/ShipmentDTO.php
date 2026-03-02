<?php

namespace DPD\Models\EPrint\Shipment;

use DPD\Models\EPrint\Enum\ETypeEnum;
use DPD\Models\ParentDTO;

class ShipmentDTO extends ParentDTO
{
    /**     * @var int
     * Code pays (250 = France)
     */
    public ?int $countrycode;
    /**     * @var int
     * Code agence
     */
    public ?int $centernumber;
    /**     * @var int
     * Numéro d'expédition
     */
    public ?int $parcelnumber;
    /**     * @var EtypeEnum
     * Type d'expédition 
     */
    public ?string $type;
    /**     * @var int
     * Code barre de l'expédition
     */
    public ?int $barcode;

    public function __construct(?int $countrycode = null, ?int $centernumber = null, ?int $parcelnumber = null, ?string $type = null, ?int $barcode = null)
    {
        $this->countrycode = $countrycode;
        $this->centernumber = $centernumber;
        $this->parcelnumber = $parcelnumber;
        $this->setType($type);
        $this->barcode = $barcode;
    }
    /**     * Get the value of countrycode
     * @return int|null
     */    public function getCountrycode(): ?int
    {
        return $this->countrycode;
    }
    /**     * Set the value of countrycode
     * @param int|null $countrycode
     * @return self
     */    public function setCountrycode(?int $countrycode): self
    {
        $this->countrycode = $countrycode;
        return $this;
    }
    /**     * Get the value of centernumber
     * @return int|null
     */    public function getCenternumber(): ?int
    {
        return $this->centernumber;
    }
    /**     * Set the value of centernumber
     * @param int|null $centernumber
     * @return self
     */    public function setCenternumber(?int $centernumber): self
    {
        $this->centernumber = $centernumber;
        return $this;
    }
    /**     * Get the value of parcelnumber
     * @return int|null
     */    public function getParcelnumber(): ?int
    {
        return $this->parcelnumber;
    }
    /**     * Set the value of parcelnumber
     * @param int|null $parcelnumber
     * @return self
     */    public function setParcelnumber(?int $parcelnumber): self
    {
        $this->parcelnumber = $parcelnumber;
        return $this;
    }
    /**     * Get the value of type
     * @return string|null
     */    public function getType(): ?string
    {
        return $this->type;
    }
    /**     * Set the value of type
     * @param string|null $type
     * @return self
     */    public function setType(?string $type): self
    {
        if($type !== null && !in_array($type, ETypeEnum::values(), true)) {
            throw new \InvalidArgumentException("Invalid type value. Allowed values are: " . implode(", ", ETypeEnum::values()));
        }
        $this->type = $type;
        return $this;
    }
    /**     * Get the value of barcode
     * @return int|null
     */    public function getBarcode(): ?int
    {
        return $this->barcode;
    }
    /**     * Set the value of barcode
     * @param int|null $barcode
     * @return self
     */    public function setBarcode(?int $barcode): self
    {
        $this->barcode = $barcode;
        return $this;
    }
}
