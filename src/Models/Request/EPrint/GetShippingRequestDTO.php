<?php
namespace DPD\Models\Request\EPrint;

use DPD\Models\EPrint\CustomerDTO;
use DPD\Models\ParentDTO;

class GetShippingRequestDTO extends ParentDTO{
    /**     * @var string
     * Date de création de l’expédition au format JJ/MM/AAAA)
     */
    public string $date;
    public CustomerDTO $customer;

    public function __construct(string $date, CustomerDTO $customer)
    {
        $this->date = $date;
        $this->customer = $customer;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;
        return $this;
    }

    public function getCustomer(): CustomerDTO
    {
        return $this->customer;
    }

    public function setCustomer(CustomerDTO $customer): self
    {
        $this->customer = $customer;
        return $this;
    }
    
}