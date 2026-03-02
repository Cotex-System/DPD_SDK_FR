<?php

namespace DPD\Models\EPrint\Address;

use DPD\Models\ParentDTO;

class AddressDTO extends ParentDTO
{

    /**     
     *  @var string
     * Nom (+ prénom dans le cadre d’une expédition Predict, Relais, Consigne ou retour inversé)
     * limite 35 caractères
     */
    public string $name;
    /**     * @var string
     * Code pays DPD ou ISO2/3 France = F | FR | FRA
     * limite 3 caractères
     */
    public string $countryPrefix;
    /**     * @var string
     * Code postal
     * limite 10 caractères
     */
    public string $zipCode;
    /**     * @var string
     * Ville
     * limite 35 caractères
     */
    public string $city;
    /**     * @var string
     * Rue et numéro
     * Longueur = 70 si CollectionRequest ou 35 sinon
     */
    public string $street;
    /**     * @var ?string
     * Numéro de téléphone
     * limite 30 caractères
     */
    public ?string $phoneNumber;
    /**     * @var ?string
     * Numéro de fax
     * limite 30 caractères
     */
    public ?string $faxNumber;
    /**     * @var ?string
     * Coordonnée X (longitude)
     * limite 3.6 (ex: 352.348848)
     */
    public ?string $geoX;
    /**     * @var ?string
     * Coordonnée Y (latitude)
     * limite 3.6 (ex: 48.348848)
     */
    public ?string $geoY;

    public function __construct(string $name, string $countryPrefix, string $zipCode, string $city, string $street, ?string $phoneNumber = null, ?string $faxNumber = null, ?string $geoX = null, ?string $geoY = null)
    {
        $this->setName($name);
        $this->setCountryPrefix($countryPrefix);
        $this->setZipCode($zipCode);
        $this->setCity($city);
        $this->setStreet($street);
        $this->setPhoneNumber($phoneNumber);
        $this->setFaxNumber($faxNumber);
        $this->setGeoX($geoX);
        $this->setGeoY($geoY);
    }

    /**     * Get the value of name
     */    public function getName(): string
    {
        return $this->name;
    }
    /**     * Set the value of name
     */    public function setName(string $name): self
    {
        if (strlen($name) > 35) {
            throw new \InvalidArgumentException("Name must be 35 characters or less.");
        }

        $this->name = $name;
        return $this;
    }
    /**     * Get the value of countryPrefix
     */    public function getCountryPrefix(): string
    {
        return $this->countryPrefix;
    }
    /**     * Set the value of countryPrefix
     */    public function setCountryPrefix(string $countryPrefix): self
    {
        if (strlen($countryPrefix) > 3) {
            throw new \InvalidArgumentException("Country prefix must be 3 characters or less.");
        }
        $this->countryPrefix = $countryPrefix;
        return $this;
    }
    /**     * Get the value of zipCode
     */    public function getZipCode(): string
    {
        return $this->zipCode;
    }
    /**     * Set the value of zipCode
     */    public function setZipCode(string $zipCode): self
    {
        if (strlen($zipCode) > 10) {
            throw new \InvalidArgumentException("Zip code must be 10 characters or less.");
        }
        $this->zipCode = $zipCode;
        return $this;
    }
    /**     * Get the value of city
     */    public function getCity(): string
    {
        return $this->city;
    }
    /**     * Set the value of city
     */    public function setCity(string $city): self
    {
        if (strlen($city) > 35) {
            throw new \InvalidArgumentException("City must be 35 characters or less.");
        }
         
        $this->city = $city;
        return $this;
    }
    /**     * Get the value of street
     */    public function getStreet(): string
    {
        return $this->street;
    }
    /**     * Set the value of street
     */    public function setStreet(string $street): self
    {
        if (strlen($street) > 70) {
            throw new \InvalidArgumentException("Street must be 70 characters or less.");
        }
         
        $this->street = $street;
        return $this;
    }
    /**     * Get the value of phoneNumber
     */    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }
    /**     * Set the value of phoneNumber
     */    public function setPhoneNumber(?string $phoneNumber): self
    {
        if($phoneNumber !== null && strlen($phoneNumber) > 30) {
            throw new \InvalidArgumentException("Phone number must be 30 characters or less.");
        }
         
        $this->phoneNumber = $phoneNumber;
        return $this;
    }
    /**     * Get the value of faxNumber
     */    public function getFaxNumber(): ?string
    {
        return $this->faxNumber;
    }
    /**     * Set the value of faxNumber
     */    public function setFaxNumber(?string $faxNumber): self
    {
        if($faxNumber !== null && strlen($faxNumber) > 30) {
            throw new \InvalidArgumentException("Fax number must be 30 characters or less.");
        }
         
        $this->faxNumber = $faxNumber;
        return $this;
    }
    /**     * Get the value of geoX
     */    public function getGeoX(): ?string
    {
        return $this->geoX;
    }
    /**     * Set the value of geoX
     */    public function setGeoX(?string $geoX): self
    {
        if($geoX !== null && !preg_match('/^-?\d{1,3}\.\d{1,6}$/', $geoX)) {
            throw new \InvalidArgumentException("GeoX must be in the format of a decimal number with up to 3 digits before the decimal point and up to 6 digits after (e.g., 352.348848).");
        }
        $this->geoX = $geoX;
        return $this;
    }
    /**     * Get the value of geoY
     */    public function getGeoY(): ?string
    {
        return $this->geoY;
    }
    /**     * Set the value of geoY
     */    public function setGeoY(?string $geoY): self
    {
        if($geoY !== null && !preg_match('/^-?\d{1,3}\.\d{1,6}$/', $geoY)) {
            throw new \InvalidArgumentException("GeoY must be in the format of a decimal number with up to 3 digits before the decimal point and up to 6 digits after (e.g., 352.348848).");
        }
        $this->geoY = $geoY;
        return $this;
    }
}
