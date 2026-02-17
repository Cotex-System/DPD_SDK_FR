<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Token Secret DTO
 * 
 * Represents a token secret/key
 */
class TokenSecretDTO extends AbstractModel
{
    public function getSecretId(): ?string
    {
        return $this->get('secretId');
    }

    public function getName(): ?string
    {
        return $this->get('name');
    }

    public function getCreatedAt(): ?string
    {
        return $this->get('createdAt');
    }

    public function getUses(): ?int
    {
        return $this->get('uses');
    }

    public function getLastUse(): ?string
    {
        return $this->get('lastUse');
    }

    public function getValidUntil(): ?string
    {
        return $this->get('validUntil');
    }

    public function getCreator(): ?string
    {
        return $this->get('creator');
    }
}
