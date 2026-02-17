<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Locker DTO
 * 
 * Returned when searching for pickup points/lockers
 */
class LockerDTO extends AbstractModel
{
    public function getId(): ?string
    {
        return $this->get('id') ?? $this->get('lockerId');
    }

    public function getName(): ?string
    {
        return $this->get('name');
    }

    public function getType(): ?string
    {
        return $this->get('type') ?? $this->get('lockerType');
    }

    public function getAddress(): ?string
    {
        return $this->get('address');
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

    public function getCountry(): ?string
    {
        return $this->get('country');
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

    public function getPhone(): ?string
    {
        return $this->get('phone');
    }

    public function getEmail(): ?string
    {
        return $this->get('email');
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getOpeningHours(): ?array
    {
        return $this->get('openingHours');
    }

    /**
     * @return array<int, string>|null
     */
    public function getFeatures(): ?array
    {
        return $this->get('features');
    }

    public function getIsOpen(): ?bool
    {
        return $this->get('isOpen');
    }

    public function getIsActive(): ?bool
    {
        return $this->get('isActive');
    }

    public function getDailyCapacity(): ?int
    {
        return $this->get('dailyCapacity');
    }

    public function getAvailableSpace(): ?int
    {
        return $this->get('availableSpace');
    }
}
