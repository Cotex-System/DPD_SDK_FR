<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Token Response DTO
 * 
 * Returned when creating a new authentication token
 */
class TokenDTO extends AbstractModel
{
    public function getSecretId(): ?string
    {
        return $this->get('secretId');
    }

    public function getValidUntil(): ?string
    {
        return $this->get('validUntil');
    }

    public function getToken(): ?string
    {
        return $this->get('token');
    }
}
