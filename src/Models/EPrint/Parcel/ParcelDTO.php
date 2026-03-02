<?php
namespace DPD\Models\EPrint\Parcel;
use DPD\Models\ParentDTO;

class ParcelDTO extends ParentDTO
{
    /**     * @var int
     * Code pays (250 = France)
     */
    public ?int $countrycode;
    /**     * @var int
     * Code agence
     */    public ?int $centernumber;
    /**     * @var int
     * Numéro d’expédition
     */    public ?int $parcelnumber;

    public function __construct(?int $countrycode = null, ?int $centernumber = null, ?int $parcelnumber = null){
        $this->countrycode = $countrycode;
        $this->centernumber = $centernumber;
        $this->parcelnumber = $parcelnumber;
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
    {        $this->countrycode = $countrycode;
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
    {        $this->centernumber = $centernumber;
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
    {        $this->parcelnumber = $parcelnumber;
        return $this;
    }

}