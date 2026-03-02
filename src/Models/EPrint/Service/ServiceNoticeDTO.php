<?php

namespace DPD\Models\EPrint\Service;

use DPD\Models\ParentDTO;
use DPD\Models\EPrint\CustomerDTO;

class ServiceNoticeDTO extends ParentDTO
{
    public ?string $BarcodeId;
    public ?string $BarcodeSource;
    public CustomerDTO $customer;
    public ?string $reason;
    public ?string $date;
    public ?string $weight;
    public ?string $info;
    public ?string $counterquestion;
    /**     * @var string|null
     * Type de la notice de service pick or dely
     */
    public ?string $type;

    public function __construct(?string $BarcodeId, ?string $BarcodeSource, CustomerDTO $customer, ?string $reason = null, ?string $date = null, ?string $weight = null, ?string $info = null, ?string $counterquestion = null, ?string $type = null)
    {
        $this->BarcodeId = $BarcodeId;
        $this->BarcodeSource = $BarcodeSource;
        $this->customer = $customer;
        $this->reason = $reason;
        $this->date = $date;
        $this->weight = $weight;
        $this->info = $info;
        $this->counterquestion = $counterquestion;
        $this->type = $type;
    }

    public function getBarcodeId(): ?string
    {
        return $this->BarcodeId;
    }
    public function getBarcodeSource(): ?string
    {
        return $this->BarcodeSource;
    }
    public function getCustomer(): CustomerDTO
    {
        return $this->customer;
    }
    public function getReason(): ?string
    {
        return $this->reason;
    }
    public function getDate(): ?string
    {
        return $this->date;
    }
    public function getWeight(): ?string
    {
        return $this->weight;
    }
    public function getInfo(): ?string
    {
        return $this->info;
    }
    public function getCounterquestion(): ?string
    {
        return $this->counterquestion;
    }
    public function getType(): ?string
    {
        return $this->type;
    }

    public function setReason(?string $reason): self
    {
        $this->reason = $reason;
        return $this;
    }
    public function setDate(?string $date): self
    {
        $this->date = $date;
        return $this;
    }
    public function setWeight(?string $weight): self
    {
        $this->weight = $weight;
        return $this;
    }
    public function setInfo(?string $info): self
    {
        $this->info = $info;
        return $this;
    }
    public function setCounterquestion(?string $counterquestion): self
    {
        $this->counterquestion = $counterquestion;
        return $this;
    }
    public function setType(?string $type): self
    {
        if ($type !== null && !in_array($type, ['pick', 'dely'])) {
            throw new \InvalidArgumentException("Type must be either 'pick' or 'dely'");
        }
        $this->type = $type;
        return $this;
    }
}
