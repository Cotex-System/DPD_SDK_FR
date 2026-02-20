<?php
namespace DPD\Models\Request\Trace;
use DPD\Models\ParentDTO;
use DPD\Models\Trace\CustomerDTO;
use DPD\Models\Trace\Enum\ReferenceSearchModeEnum;

class GetShipmentTraceByReferenceDTO extends ParentDTO
{
    public string $Reference;
    public ?string $ShippingDate;
    public CustomerDTO $Customer;
    public ?string $Language;
    public ?ReferenceSearchModeEnum $ReferenceSearchMode;
    public ?bool $GetImages;
    public ?string $Options;
    

    /**
     * Get the value of ReferenceSearchMode
     */
    public function getReferenceSearchMode(): ?string
    {
        return $this->ReferenceSearchMode;
    }

    /**
     * Set the value of ReferenceSearchMode
     */
    public function setReferenceSearchMode(?string $ReferenceSearchMode): self
    {
        if ($ReferenceSearchMode !== null && !ReferenceSearchModeEnum::isValid($ReferenceSearchMode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value for ReferenceSearchMode: %s. Allowed values are: %s', $ReferenceSearchMode, implode(', ', ReferenceSearchModeEnum::values())));
        }
        $this->ReferenceSearchMode = $ReferenceSearchMode;

        return $this;
    }
}