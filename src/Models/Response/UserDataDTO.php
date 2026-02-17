<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * User Data DTO
 * 
 * Returned when getting user profile information
 */
class UserDataDTO extends AbstractModel
{
    public function getUserId(): ?string
    {
        return $this->get('userId');
    }

    public function getName(): ?string
    {
        return $this->get('name');
    }

    public function getEmail(): ?string
    {
        return $this->get('email');
    }

    public function getPhone(): ?string
    {
        return $this->get('phone');
    }

    public function getCompanyName(): ?string
    {
        return $this->get('companyName');
    }

    public function getPayerCode(): ?string
    {
        return $this->get('payerCode');
    }

    public function getLanguage(): ?string
    {
        return $this->get('language');
    }

    public function getPermissions(): ?array
    {
        return $this->get('permissions');
    }

    public function getUserMetadata(): ?array
    {
        return $this->get('userMetadata');
    }

    public function isActive(): ?bool
    {
        return $this->get('active');
    }
}
