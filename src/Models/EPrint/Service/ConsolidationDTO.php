<?php
namespace DPD\Models\EPrint\Service;

use DPD\Models\EPrint\Enum\ETypeConsolidationEnum;
use DPD\Models\ParentDTO;

class ConsolidationDTO extends ParentDTO
{
    public string $type;
    public function __construct(string $type)
    {        $this->type = $type;
    }
    /**     * Get the value of type
     */    public function getType(): string
    {        return $this->type;    }
    /**     * Set the value of type
     */    public function setType(string $type): self
    
    {        
        if(!in_array($type, ETypeConsolidationEnum::values(), true)) {
            throw new \InvalidArgumentException("Invalid type value. Allowed values are: " . implode(", ", ETypeConsolidationEnum::values()));
        }
        $this->type = $type;
        return $this;    }
}