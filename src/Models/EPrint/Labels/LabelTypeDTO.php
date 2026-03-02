<?php

namespace DPD\Models\EPrint\Labels;

use DPD\Models\EPrint\Enum\LabelTypeEnum;
use DPD\Models\ParentDTO;

class LabelTypeDTO extends ParentDTO
{
    /**     * @var string
     * Type de document à imprimer (PDF, PDF_A6, EPL, PNG) 
     */
    public ?string $type;
    public function __construct(?string $type)
    {
        $this->setType($type);
    }
    /**     * Get the value of type
     */    public function getType(): ?string
    {
        return $this->type;
    }
    /**     * Set the value of type
     */    public function setType(?string $type): self
    {
        if($type!=null && !in_array($type, LabelTypeEnum::values())) {
            throw new \InvalidArgumentException("Invalid label type: $type");
        }
        $this->type = $type;
        return $this;
    }
}
