<?php
namespace DPD\Models\Trace;
use DPD\Models\ParentDTO;
class ParcelDTO extends ParentDTO
{
    /**
     * @var string|null
     */
    public ?string $parcelnumber;

    /**
     * @var int|null
     */
    public ?int $countrycode;
    /**
     * @var int|null
     */
    public ?int $centernumber;

    public function __construct(?string $parcelnumber = null, ?int $countrycode = null, ?int $centernumber = null)
    {
        $this->parcelnumber = $parcelnumber;
        $this->countrycode = $countrycode;
        $this->centernumber = $centernumber;
    }

    /**
     * Get the value of parcelnumber
     */
    public function getParcelnumber(): ?string
    {
        return $this->parcelnumber;
    }

    /**
     * Set the value of parcelnumber
     */
    public function setParcelnumber(?string $parcelnumber): self
    {
        $this->parcelnumber = $parcelnumber;

        return $this;
    }

    /**
     * Get the value of countrycode
     */
    public function getCountrycode(): ?int
    {
        return $this->countrycode;
    }

    /**
     * Get the value of centernumber
     */
    public function getCenternumber(): ?int
    {
        return $this->centernumber;
    }
}