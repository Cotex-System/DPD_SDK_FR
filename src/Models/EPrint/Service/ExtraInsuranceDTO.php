<?php

namespace DPD\Models\EPrint\Service;

use DPD\Models\EPrint\Enum\InsuranceTypeEnum;
use DPD\Models\ParentDTO;
use PhpParser\Builder\Param;

class ExtraInsuranceDTO extends ParentDTO
{

    /** * @var ?string
     * must be of type string in format "XX.XX€" where XX are digits
     * Valeur déclarée en € (montant maximum par colis : 20 000€). 
     */
    public ?string $value;

    public ?string $type;
    public function __construct(?string $value = null, ?string $type = null)
    {
        $this->setValue($value);
        $this->setType($type);
    }
    /**
     * Get the value of value
     * @return ?string
     */    public function getValue(): ?string
    {
        return $this->value;
    }
    /**     * Set the value of value
     * @param ?string|float $value
     * @return self
     */    public function setValue(null|string|float $value): self
    {
        if ($value !== null) {
            if (is_float($value)) {
                $value = number_format($value, 2, '.', '') . '€';
            } elseif (!preg_match('/^\d+(\.\d{2})?€$/', $value)) {
                throw new \InvalidArgumentException("Invalid value format. Expected format is 'XX.XX€' where XX are digits.");
            }
        }
        $this->value = $value;
        return $this;
    }

    /**
     * Get the value of type
     * @return ?string
     */    public function getType(): ?string
    {
        return $this->type;
    }

    /**     * Set the value of type
     * @param ?string $type
     * @return self
     */    public function setType(?string $type): self
    {
        if($type !== null && InsuranceTypeEnum::isValid($type) === false) {
            throw new \InvalidArgumentException("Type must be a valid insurance type.");
        }
        $this->type = $type;
        return $this;
    }
}
