<?php
namespace DPD\Models\Request\EPrint;

use DPD\Models\EPrint\CustomerDTO;
use DPD\Models\ParentDTO;

/**
 * Class GetServiceNoticesRequestDTO
 * @package DPD\Models\Request\EPrint
 * DTO pour la requete GetServiceNotices
 */
class GetServiceNoticesRequestDTO extends ParentDTO{
    public CustomerDTO $customer;
    public string $language="F";

    public function __construct(CustomerDTO $customer, string $language = "F")
    {
        $this->customer = $customer;
        $this->language = $language;
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

    public function getLanguage(): string
    {
        return $this->language;
    }
    public function setLanguage(string $language): self
    {
        $this->language = $language;
        return $this;
    }
}