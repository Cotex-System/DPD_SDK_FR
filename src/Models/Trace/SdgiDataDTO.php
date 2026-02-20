<?php
namespace DPD\Models\Trace;
use DPD\Models\ParentDTO;
class SdgiDataDTO extends ParentDTO
{
    /**
     * Date de début - créneau horaire de livraison
     * @var string|null
     */
    public ?string $StartDate;
    /**
     * Date de fin - créneau horaire de livraison
     * @var string|null
     */
    public ?string $EndDate;
    /**
     * Heure de début - créneau horaire de livraison
     * @var string|null
     */
    public ?string $StartTime;
    /**
     * Heure de fin - créneau horaire de livraison
     * @var string|null
     */
    public ?string $EndTime;

    public function __construct(?string $StartDate,?string $EndDate,?string $StartTime,?string $EndTime)
    {
        $this->StartDate = $StartDate;
        $this->EndDate = $EndDate;
        $this->StartTime = $StartTime;
        $this->EndTime = $EndTime;
    }


    /**
     * Get the value of StartDate
     */
    public function getStartDate(): ?string
    {
        return $this->StartDate;
    }

    /**
     * Set the value of StartDate
     */
    public function setStartDate(?string $StartDate): self
    {
        $this->StartDate = $StartDate;

        return $this;
    }

    /**
     * Get the value of EndDate
     */
    public function getEndDate(): ?string
    {
        return $this->EndDate;
    }

    /**
     * Set the value of EndDate
     */
    public function setEndDate(?string $EndDate): self
    {
        $this->EndDate = $EndDate;

        return $this;
    }

    /**
     * Get the value of StartTime
     */
    public function getStartTime(): ?string
    {
        return $this->StartTime;
    }

    /**
     * Set the value of StartTime
     */
    public function setStartTime(?string $StartTime): self
    {
        $this->StartTime = $StartTime;

        return $this;
    }

    /**
     * Get the value of EndTime
     */
    public function getEndTime(): ?string
    {
        return $this->EndTime;
    }

    /**
     * Set the value of EndTime
     */
    public function setEndTime(?string $EndTime): self
    {
        $this->EndTime = $EndTime;

        return $this;
    }
}