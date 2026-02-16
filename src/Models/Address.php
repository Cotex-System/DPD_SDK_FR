<?php

declare(strict_types=1);

namespace DPD\Models;

/**
 * Modèle pour une adresse
 */
class Address extends AbstractModel
{
    /**
     * Créer une nouvelle adresse
     *
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    public function getId(): ?string
    {
        return $this->get('id');
    }

    public function getName(): ?string
    {
        return $this->get('name');
    }

    public function setName(string $name): self
    {
        $this->set('name', $name);
        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->get('street');
    }

    public function setStreet(string $street): self
    {
        $this->set('street', $street);
        return $this;
    }

    public function getCity(): ?string
    {
        return $this->get('city');
    }

    public function setCity(string $city): self
    {
        $this->set('city', $city);
        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->get('postalCode');
    }

    public function setPostalCode(string $postalCode): self
    {
        $this->set('postalCode', $postalCode);
        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->get('countryCode');
    }

    public function setCountryCode(string $countryCode): self
    {
        $this->set('countryCode', $countryCode);
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->get('phone');
    }

    public function setPhone(string $phone): self
    {
        $this->set('phone', $phone);
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->get('email');
    }

    public function setEmail(string $email): self
    {
        $this->set('email', $email);
        return $this;
    }

    public function getContactName(): ?string
    {
        return $this->get('contactName');
    }

    public function setContactName(string $contactName): self
    {
        $this->set('contactName', $contactName);
        return $this;
    }

    public function getType(): ?string
    {
        return $this->get('type');
    }

    public function setType(string $type): self
    {
        $this->set('type', $type);
        return $this;
    }
}
