<?php

declare(strict_types=1);

namespace DPD\Models;

/**
 * Invoice Options DTO
 * 
 * Options for generating invoices
 */
class InvoiceOptionsDTO extends AbstractModel
{
    public function getGeneratesInvoice(): ?bool
    {
        return $this->get('generatesInvoice');
    }

    public function setGeneratesInvoice(?bool $generatesInvoice): self
    {
        $this->set('generatesInvoice', $generatesInvoice);
        return $this;
    }

    public function getName(): ?string
    {
        return $this->get('name');
    }

    public function setName(?string $name): self
    {
        $this->set('name', $name);
        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->get('company');
    }

    public function setCompany(?string $company): self
    {
        $this->set('company', $company);
        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->get('street');
    }

    public function setStreet(?string $street): self
    {
        $this->set('street', $street);
        return $this;
    }

    public function getZip(): ?string
    {
        return $this->get('zip');
    }

    public function setZip(?string $zip): self
    {
        $this->set('zip', $zip);
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->get('country');
    }

    public function setCountry(?string $country): self
    {
        $this->set('country', $country);
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->get('city');
    }

    public function setCity(?string $city): self
    {
        $this->set('city', $city);
        return $this;
    }

    /**
     * @return array<int, string>|null
     */
    public function getEmailText(): ?array
    {
        return $this->get('emailText');
    }

    /**
     * @param array<int, string>|null $emailText
     */
    public function setEmailText(?array $emailText): self
    {
        $this->set('emailText', $emailText);
        return $this;
    }
}
