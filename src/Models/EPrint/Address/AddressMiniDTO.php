<?php
namespace DPD\Models\EPrint\Address;
use DPD\Models\ParentDTO;

class AddressMiniDTO extends ParentDTO{
    /** @var string
     * Rue (inclue le n° de rue)
     * limite 35 caractères
     */
    public string $street;
    /** @var string
     * Code postal
     * limite 10 caractères
     */
    public string $postalCode;
    /** @var string
     * Ville
     * limite 35 caractères
     */
    public string $city;
    /** @var string
     * Code pays au format ISO 3166-1 alpha-2
     * France=FR, Belgique=BE, Luxembourg=LU, Pays-Bas=NL, Allemagne=DE, Royaume-Uni=GB, Espagne=ES, Italie=IT, Portugal=PT, Suisse=CH
     * limite 3 caractères
     */
    public string $countryPrefix="FR";

    public function __construct(string $street, string $postalCode, string $city, string $countryPrefix = "FR")
    {
        $this->street = $street;
        $this->postalCode = $postalCode;
        $this->city = $city;
        $this->countryPrefix = $countryPrefix;
    }
    /**
     * Get the value of street
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * Set the value of street
     */
    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of postalCode
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * Set the value of postalCode
     */
    public function setPostalCode(string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get the value of city
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Set the value of city
     */
    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of countryPrefix
     */
    public function getCountryPrefix(): string
    {
        return $this->countryPrefix;
    }

    /**
     * Set the value of countryPrefix
     */
    public function setCountryPrefix(string $countryPrefix): self
    {
        $this->countryPrefix = $countryPrefix;

        return $this;
    }
}