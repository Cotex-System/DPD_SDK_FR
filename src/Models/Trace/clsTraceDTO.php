<?php
namespace DPD\Models\Trace;
use DPD\Models\ParentDTO;
use DPD\Models\Trace\clsTraceDetailsDTO;

class clsTraceDTO extends ParentDTO
{
    /** @var ?string */
    public ?string $ScanDate;
    /** @var ?string */
    public ?string $ScanTime;
    /** @var ?int */
    public ?int $StatusNumber;
    /** @var ?string */
    public ?string $StatusDescription;
    /** @var ?string */
    public ?string $CenterName;
    /** @var ?string */
    public ?string $CenterNumber;
    /** @var ?string */
    public ?string $User;
    /** @var ?string */
    public ?string $Remark;
    /** @var ?string */
    public ?string $Info;
    /** @var ?array<clsTraceDetailsDTO> */
    public ?array $Details;

    public function __construct(?string $ScanDate = null, ?string $ScanTime = null, ?int $StatusNumber = null, ?string $StatusDescription = null, ?string $CenterName = null, ?string $CenterNumber = null, ?string $User = null, ?string $Remark = null, ?string $Info = null, ?array $Details = null)
    {
        $this->ScanDate = $ScanDate;
        $this->ScanTime = $ScanTime;
        $this->StatusNumber = $StatusNumber;
        $this->StatusDescription = $StatusDescription;
        $this->CenterName = $CenterName;
        $this->CenterNumber = $CenterNumber;
        $this->User = $User;
        $this->Remark = $Remark;
        $this->Info = $Info;
        $this->Details = $Details;
    }

    /**
     * Get the value of ScanDate
     */
    public function getScanDate(): ?string
    {
        return $this->ScanDate;
    }

    /**
     * Set the value of ScanDate
     */
    public function setScanDate(?string $ScanDate): self
    {
        $this->ScanDate = $ScanDate;

        return $this;
    }

    /**
     * Get the value of ScanTime
     */
    public function getScanTime(): ?string
    {
        return $this->ScanTime;
    }

    /**
     * Set the value of ScanTime
     */
    public function setScanTime(?string $ScanTime): self
    {
        $this->ScanTime = $ScanTime;

        return $this;
    }

    /**
     * Get the value of StatusNumber
     */
    public function getStatusNumber(): ?int
    {
        return $this->StatusNumber;
    }

    /**
     * Set the value of StatusNumber
     */
    public function setStatusNumber(?int $StatusNumber): self
    {
        $this->StatusNumber = $StatusNumber;

        return $this;
    }

    /**
     * Get the value of StatusDescription
     */
    public function getStatusDescription(): ?string
    {
        return $this->StatusDescription;
    }

    /**
     * Set the value of StatusDescription
     */
    public function setStatusDescription(?string $StatusDescription): self
    {
        $this->StatusDescription = $StatusDescription;

        return $this;
    }

    /**
     * Get the value of CenterName
     */
    public function getCenterName(): ?string
    {
        return $this->CenterName;
    }

    /**
     * Set the value of CenterName
     */
    public function setCenterName(?string $CenterName): self
    {
        $this->CenterName = $CenterName;

        return $this;
    }

    /**
     * Get the value of CenterNumber
     */
    public function getCenterNumber(): ?string
    {
        return $this->CenterNumber;
    }

    /**
     * Set the value of CenterNumber
     */
    public function setCenterNumber(?string $CenterNumber): self
    {
        $this->CenterNumber = $CenterNumber;

        return $this;
    }

    /**
     * Get the value of User
     */
    public function getUser(): ?string
    {
        return $this->User;
    }

    /**
     * Set the value of User
     */
    public function setUser(?string $User): self
    {
        $this->User = $User;

        return $this;
    }

    /**
     * Get the value of Remark
     */
    public function getRemark(): ?string
    {
        return $this->Remark;
    }

    /**
     * Set the value of Remark
     */
    public function setRemark(?string $Remark): self
    {
        $this->Remark = $Remark;

        return $this;
    }

    /**
     * Get the value of Info
     */
    public function getInfo(): ?string
    {
        return $this->Info;
    }

    /**
     * Set the value of Info
     */
    public function setInfo(?string $Info): self
    {
        $this->Info = $Info;

        return $this;
    }

    /**
     * Get the value of Details
     */
    public function getDetails(): ?array
    {
        return $this->Details;
    }

    /**
     * Set the value of Details
     */
    public function setDetails(?array $Details): self
    {
        $this->Details = $Details;

        return $this;
    }
    public function addDetail(clsTraceDetailsDTO $detail): self
    {
        if ($this->Details === null) {
            $this->Details = [];
        }
        $this->Details[] = $detail;

        return $this;
    }
}
