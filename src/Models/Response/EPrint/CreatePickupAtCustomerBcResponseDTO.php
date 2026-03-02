<?php
namespace DPD\Models\Response\EPrint;
use DPD\Models\ParentDTO;

class CreatePickupAtCustomerBcResponseDTO extends ParentDTO{
    private int $Sin;
    public function __construct(int $Sin)
    {
        $this->Sin = $Sin;
    }
    public function getSin(): int
    {
        return $this->Sin;
    }
}