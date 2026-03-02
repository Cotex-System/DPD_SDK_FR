<?php

namespace DPD\Models\EPrint\Service;
use DPD\Models\ParentDTO;

class MarketingDTO extends ParentDTO
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}