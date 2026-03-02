<?php
namespace DPD\Models\EPrint\Service;

use DPD\Models\EPrint\Enum\ReverseTypeEnum;
use DPD\Models\ParentDTO;
use DPD\Models\EPrint\Address\AddressDTO;

class ReverseDTO extends ParentDTO
{
    public ?AddressDTO $retour_receiver;
    /**
     * @var ?string
     * must be of type ReverseTypeEnum
     */
    public ?string $type;
    public ?int $expireOffset;


    public function __construct(?AddressDTO $retour_receiver = null, ?string $type = null, ?int $expireOffset = null)
    {
        $this->retour_receiver = $retour_receiver;
        $this->setType($type);
        $this->expireOffset = $expireOffset;
    }

    /**
     * Get the value of type
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Set the value of type
     */
    public function setType(?string $type): self
    {
        if($type !== null && !in_array($type, ReverseTypeEnum::values(), true)) {
            throw new \InvalidArgumentException("Invalid type value. Allowed values are: " . implode(", ", ReverseTypeEnum::values()));
        }
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of retour_receiver
     */
    public function getRetourReceiver(): ?AddressDTO
    {
        return $this->retour_receiver;
    }

    /**
     * Set the value of retour_receiver
     */
    public function setRetourReceiver(?AddressDTO $retour_receiver): self
    {
        $this->retour_receiver = $retour_receiver;

        return $this;
    }

   

    /**
     * Get the value of expireOffset
     */
    public function getExpireOffset(): ?int
    {
        return $this->expireOffset;
    }

    /**
     * Set the value of expireOffset
     */
    public function setExpireOffset(?int $expireOffset): self
    {
        $this->expireOffset = $expireOffset;

        return $this;
    }
}