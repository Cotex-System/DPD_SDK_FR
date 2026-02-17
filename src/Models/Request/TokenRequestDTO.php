<?php

declare(strict_types=1);

namespace DPD\Models\Request;

use DPD\Models\AbstractModel;

/**
 * Token Request DTO
 * 
 * Used to create a new authentication token
 */
class TokenRequestDTO extends AbstractModel
{
    /**
     * Create a new TokenRequestDTO
     * 
     * @param string $name Human-readable name for the token
     * @param int|null $ttl Optional secret/token TTL in seconds (max: 9999999999999)
     */
    public function __construct(string $name, ?int $ttl = null)
    {
        $data = ['name' => $name];
        
        if ($ttl !== null) {
            $data['ttl'] = $ttl;
        }
        
        parent::__construct($data);
    }

    public function getName(): string
    {
        return $this->get('name');
    }

    public function getTtl(): ?int
    {
        return $this->get('ttl');
    }
}
