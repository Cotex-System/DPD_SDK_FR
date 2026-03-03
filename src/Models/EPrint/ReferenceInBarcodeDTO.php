<?php
namespace DPD\Models\EPrint;

use DPD\Models\EPrint\Enum\ReferenceTypeEnum;
use DPD\Models\ParentDTO;

class ReferenceInBarcodeDTO extends ParentDTO{
    /** @var string
     * Type de référence à faire apparaître dans le code-barres
     * value comme from @see ReferenceTypeEnum
     * Limité à 20 caractères
     */
    public ?string $type;

    public function __construct(?string $type)
    {
        $this->setType($type);
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        if($type!=null && !ReferenceTypeEnum::isValid($type)){
            throw new \InvalidArgumentException("Invalid value for type: $type");
        }
        $this->type = $type;
        return $this;
    }

}