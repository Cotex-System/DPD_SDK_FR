<?php

declare(strict_types=1);

namespace DPD\Models\Request;

use DPD\Models\AbstractModel;

/**
 * Address Creation Request DTO
 * 
 * Used for creating or updating addresses
 */
class AddressCreationDTO extends AbstractModel
{
    public function getName(): ?string
    {
        return $this->get('name');
    }

    public function setName(?string $name): self
    {
        $this->set('name', $name);
        return $this;
    }

    public function getContactName(): ?string
    {
        return $this->get('contactName');
    }

    public function setContactName(?string $contactName): self
    {
        $this->set('contactName', $contactName);
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->get('email');
    }

    public function setEmail(?string $email): self
    {
        $this->set('email', $email);
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->get('phone');
    }

    public function setPhone(?string $phone): self
    {
        $this->set('phone', $phone);
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

    public function getStreetNo(): ?string
    {
        return $this->get('streetNo');
    }

    public function setStreetNo(?string $streetNo): self
    {
        $this->set('streetNo', $streetNo);
        return $this;
    }

    public function getFlatNo(): ?string
    {
        return $this->get('flatNo');
    }

    public function setFlatNo(?string $flatNo): self
    {
        $this->set('flatNo', $flatNo);
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

    public function getZip(): ?string
    {
        return $this->get('zip');
    }

    public function setZip(?string $zip): self
    {
        $this->set('zip', $zip);
        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->get('postalCode');
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->set('postalCode', $postalCode);
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

    public function getType(): ?string
    {
        return $this->get('type');
    }

    public function setType(?string $type): self
    {
        $this->set('type', $type);
        return $this;
    }

    public function isDefault(): ?bool
    {
        return $this->get('isDefault');
    }

    public function setIsDefault(?bool $isDefault): self
    {
        $this->set('isDefault', $isDefault);
        return $this;
    }
}
