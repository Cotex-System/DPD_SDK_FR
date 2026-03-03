<?php
namespace DPD\Models\EPrint\Service;
use DPD\Models\ParentDTO;
use DPD\Models\EPrint\Service\SlaveServicesDTO;

class SlaveRequestDTO extends ParentDTO
{
    public string $weight;
    public string $referencenumber;
    public ?string $reference2;
    public ?string $reference3;
    public ?string $reference4;
    public SlaveServicesDTO $services;

    public function __construct(string $weight, string $referencenumber, ?string $reference2, ?string $reference3, ?string $reference4, SlaveServicesDTO $services)
    {
        $this->weight = $weight;
        $this->referencenumber = $referencenumber;
        $this->reference2 = $reference2;
        $this->reference3 = $reference3;
        $this->reference4 = $reference4;
        $this->services = $services;
    }

    public function getweight(): string
    {
        return $this->weight;
    }
    public function getReferencenumber(): string
    {
        return $this->referencenumber;
    }
    public function getReference2(): ?string
    {        return $this->reference2;
    }
    public function getReference3(): ?string
    {        return $this->reference3;
    }
    public function getReference4(): ?string
    {        return $this->reference4;
    }
    public function getServices(): SlaveServicesDTO
    {        return $this->services;
    }
}