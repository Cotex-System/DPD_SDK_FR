<?php

namespace DPD\Models\EPrint\Address;

use DPD\Models\ParentDTO;

class AddressInfoDTO extends ParentDTO
{

    /**     * @var string
     * Nom + prénom du contact ou raison sociale
     * limite 32 caractères
     */
    public string $contact;
    /**     * @var string
     * Adresse 1
     * limite 32 caractères
     */
    public string $name2;
    /**     * @var string
     * Adresse 2
     * limite 32 caractères
     */
    public ?string $name3;
    /**     * @var string
     * Adresse 3
     * limite 32 caractères
     */
    public ?string $name4;
    /**     * @var string
     * digicode ou code d'accès 1
     * limite 32 caractères
     */
    public ?string $digicode;
    /**     * @var string
     * digicode ou code d'accès 2
     * limite 32 caractères
     */
    public ?string $digicode2;
    /**     * @var string
     * intercom
     * limite 10 caractères
     */
    public ?string $intercomid;
    /**     * @var string
     * info complémentaire 1
     * limite 32 caractères
     */
    public ?string $vinfo1;
    /**     * @var string
     * info complémentaire 2
     * limite 32 caractères
     */
    public ?string $vinfo2;

    public function __construct(string $contact, string $name2, ?string $name3 = null, ?string $name4 = null, ?string $digicode = null, ?string $digicode2 = null, ?string $intercomid = null, ?string $vinfo1 = null, ?string $vinfo2 = null)
    {
        $this->contact = $contact;
        $this->name2 = $name2;
        $this->name3 = $name3;
        $this->name4 = $name4;
        $this->digicode = $digicode;
        $this->digicode2 = $digicode2;
        $this->intercomid = $intercomid;
        $this->vinfo1 = $vinfo1;
        $this->vinfo2 = $vinfo2;
    }
    /**     * Get the value of contact
     */    public function getContact(): string
    {
        return $this->contact;
    }
    /**     * Set the value of contact
     */    public function setContact(string $contact): self
    {
        if (strlen($contact) > 32) {
            throw new \InvalidArgumentException("Contact must be 32 characters or less.");
        }
        $this->contact = $contact;
        return $this;
    }
    /**     * Get the value of name2
     */    public function getName2(): string
    {
        return $this->name2;
    }
    /**     * Set the value of name2
     */    public function setName2(string $name2): self
    {        if (strlen($name2) > 32) {
            throw new \InvalidArgumentException("Name2 must be 32 characters or less.");
        }
        $this->name2 = $name2;
        return $this;
    }
    /**     * Get the value of name3
     */    public function getName3(): ?string
    {
        return $this->name3;
    }
    /**     * Set the value of name3
     */    public function setName3(?string $name3): self
    {
        if ($name3 !== null && strlen($name3) > 32) {
            throw new \InvalidArgumentException("Name3 must be 32 characters or less.");
        }
        $this->name3 = $name3;
        return $this;
    }
    /**     * Get the value of name4
     */    public function getName4(): ?string
    {
        return $this->name4;
    }
    /**     * Set the value of name4
     */    public function setName4(?string $name4): self
    {
        if ($name4 !== null && strlen($name4) > 32) {
            throw new \InvalidArgumentException("Name4 must be 32 characters or less.");
        }
        $this->name4 = $name4;
        return $this;
    }
    /**     * Get the value of digicode
     */    public function getDigicode(): ?string
    {
        return $this->digicode;
    }
    /**     * Set the value of digicode
     */    public function setDigicode(?string $digicode): self
    {
        if ($digicode !== null && strlen($digicode) > 32) {
            throw new \InvalidArgumentException("Digicode must be 32 characters or less.");
        }
        $this->digicode = $digicode;
        return $this;
    }
    /**     * Get the value of digicode2
     */    public function getDigicode2(): ?string
    {
        return $this->digicode2;
    }
    /**     * Set the value of digicode2
     */    public function setDigicode2(?string $digicode2): self
    {
        if ($digicode2 !== null && strlen($digicode2) > 32) {
            throw new \InvalidArgumentException("Digicode2 must be 32 characters or less.");
        }
         $this->digicode2 = $digicode2;
         return $this;
        
    }
    /**     * Get the value of intercomid
     */    public function getIntercomid(): ?string
    {
        return $this->intercomid;
    }
    /**     * Set the value of intercomid
     */    public function setIntercomid(?string $intercomid): self
    {
        if ($intercomid !== null && strlen($intercomid) > 10) {
            throw new \InvalidArgumentException("Intercomid must be 32 characters or less.");
        }

        $this->intercomid = $intercomid;
        return $this;
    }
    /**     * Get the value of vinfo1
     */    public function getVinfo1(): ?string
    {
        return $this->vinfo1;
    }
    /**     * Set the value of vinfo1
     */    public function setVinfo1(?string $vinfo1): self
    {
        if ($vinfo1 !== null && strlen($vinfo1) > 32) {
            throw new \InvalidArgumentException("Vinfo1 must be 32 characters or less.");
        }
        $this->vinfo1 = $vinfo1;
        return $this;
    }
    /**     * Get the value of vinfo2
     */    public function getVinfo2(): ?string
    {
        return $this->vinfo2;
    }
    /**     * Set the value of vinfo2
     */    public function setVinfo2(?string $vinfo2): self
    {
        if ($vinfo2 !== null && strlen($vinfo2) > 32) {
            throw new \InvalidArgumentException("Vinfo2 must be 32 characters or less.");
        }
        $this->vinfo2 = $vinfo2;
        return $this;
    }
}
