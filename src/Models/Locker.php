<?php

declare(strict_types=1);

namespace DPD\Models;

/**
 * Modèle pour un point relais / Locker
 */
class Locker extends AbstractModel
{
    /**
     * Créer un nouveau locker
     *
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    public function getId(): ?string
    {
        return $this->get('id') ?? $this->get('lockerId');
    }

    public function getName(): ?string
    {
        return $this->get('name');
    }

    public function getAddress(): ?string
    {
        return $this->get('address');
    }

    public function getStreet(): ?string
    {
        return $this->get('street');
    }

    public function getCity(): ?string
    {
        return $this->get('city');
    }

    public function getPostalCode(): ?string
    {
        return $this->get('postalCode');
    }

    public function getCountryCode(): ?string
    {
        return $this->get('countryCode');
    }

    public function getLatitude(): ?float
    {
        return $this->get('latitude') ? (float) $this->get('latitude') : null;
    }

    public function getLongitude(): ?float
    {
        return $this->get('longitude') ? (float) $this->get('longitude') : null;
    }

    public function getDistance(): ?float
    {
        return $this->get('distance') ? (float) $this->get('distance') : null;
    }

    /**
     * @return array<string, mixed>
     */
    public function getOpeningHours(): array
    {
        return $this->get('openingHours', []);
    }

    public function getPhone(): ?string
    {
        return $this->get('phone');
    }

    public function getEmail(): ?string
    {
        return $this->get('email');
    }
}
