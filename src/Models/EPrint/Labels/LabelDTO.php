<?php
namespace DPD\Models\EPrint\Labels;

use DPD\Models\EPrint\Enum\LabelTypeEnum;
use DPD\Models\ParentDTO;

class LabelDTO extends ParentDTO
{
    /**     * @var string
     * Type d'étiquette (PDF, PDF_A6, EPL,ZPL300,ZPL300_A6,ZPL, PNG...)
     */
    public string $type;
    /**     * @var array
     * Etiquette sous forme de Bytearrays encoder base64
     * 
     */
    public array $Label;
    public function __construct(string $type)
    {
        $this->setType($type);
    }
    /**
     * Get the value of type
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Set the value of type
     */
    public function setType(string $type): self
    {
        if (!in_array($type, LabelTypeEnum::values())) {
            throw new \InvalidArgumentException("Invalid label type: $type");
        }
        $this->type = $type;
        return $this;
    }

    /**
     * Get the value of Label
     */    public function getLabel(): array
    {        return $this->Label;
    }
    /**     * Set the value of Label
     */    public function setLabel(array $Label): self
    {        $this->Label = $Label;
        return $this;    }

    public function decodeLabel(): array
    {
        return array_map(function($label) {
            return base64_decode($label);
        }, $this->Label);
    }
}