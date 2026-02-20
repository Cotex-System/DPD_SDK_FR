<?php
namespace DPD\Models\Trace;
use DPD\Models\ParentDTO;

class clsTraceDetailsDTO extends ParentDTO
{
    /** @var ?string */
    public ?string $ID;
    /** @var ?string */
    public ?string $Text;
    /** @var ?string */
    public ?string $Data;

    public function __construct(?string $ID = null, ?string $Text = null, ?string $Data = null)
    {
        $this->ID = $ID;
        $this->Text = $Text;
        $this->Data = $Data;
    }

    

    /**
     * Get the value of ID
     */
    public function getID(): ?string
    {
        return $this->ID;
    }

    /**
     * Set the value of ID
     */
    public function setID(?string $ID): self
    {
        $this->ID = $ID;

        return $this;
    }

    /**
     * Get the value of Text
     */
    public function getText(): ?string
    {
        return $this->Text;
    }

    /**
     * Set the value of Text
     */
    public function setText(?string $Text): self
    {
        $this->Text = $Text;

        return $this;
    }

    /**
     * Get the value of Data
     */
    public function getData(): ?string
    {
        return $this->Data;
    }

    /**
     * Set the value of Data
     */
    public function setData(?string $Data): self
    {
        $this->Data = $Data;

        return $this;
    }
}