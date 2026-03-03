<?php

namespace DPD\Models\EPrint\Service;

use DPD\Models\EPrint\Enum\ContactTypeEnum;
use DPD\Models\ParentDTO;
use DPD\Models\EPrint\Service\Secure;

class ContactDTO extends ParentDTO
{
    public ?string $sms;
    public ?string $email;
    public ?string $autoText;
    public ?string $type;
    public ?Secure $secureService;

    public function __construct(?string $sms = null, ?string $email = null, ?string $autoText = null, ?string $type = null, ?Secure $secureService = null)
    {
        $this->sms = $sms;
        $this->email = $email;
        $this->autoText = $autoText;
        $this->type = $type;
        $this->secureService = $secureService;
    }

    /**
     * Get the value of sms
     */
    public function getSms(): ?string
    {
        return $this->sms;
    }
    /**
     * Set the value of sms
     */    public function setSms(?string $sms): self
    {
        $this->sms = $sms;
        return $this;
    }
    /**
     * Get the value of email
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set the value of email
     */    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * Get the value of autoText
     */    public function getAutoText(): ?string
    {
        return $this->autoText;
    }
    /**
     * Set the value of autoText
     */    public function setAutoText(?string $autoText): self
    {
        $this->autoText = $autoText;
        return $this;
    }
    /**
     * Get the value of type
     */    public function getType(): ?string
    {
        return $this->type;
    }
    /**     * Set the value of type
     */    public function setType(?string $type): self
    {
        if ($type !== null && !ContactTypeEnum::isValid($type)) {
            throw new \InvalidArgumentException("Invalid type value. Allowed values are: sms, email, autoText");
        }
        $this->type = $type;
        return $this;
    }
    /**     * Get the value of secureService
     */    public function getSecureService(): ?Secure
    {
        return $this->secureService;
    }
    /**     * Set the value of secureService
     */    public function setSecureService(?Secure $secureService): self
    {
        $this->secureService = $secureService;
        return $this;
    }
}
