<?php

declare(strict_types=1);

namespace DPD\Models\Response;

use DPD\Models\AbstractModel;

/**
 * Token Payload DTO
 * 
 * Contains user information from the decoded token
 */
class TokenPayloadDTO extends AbstractModel
{
    public function getUserId(): ?string
    {
        return $this->get('userId');
    }

    public function getSecretId(): ?string
    {
        return $this->get('secretId');
    }

    public function getSecretName(): ?string
    {
        return $this->get('secretName');
    }

    /**
     * @return array<int, string>|null
     */
    public function getPermissions(): ?array
    {
        return $this->get('permissions');
    }

    /**
     * @return array<string, mixed>|null
     */
    public function getUserMetadata(): ?array
    {
        return $this->get('userMetadataDTO');
    }
}
