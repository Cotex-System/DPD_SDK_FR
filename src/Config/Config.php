<?php

declare(strict_types=1);

namespace DPD\Config;

use InvalidArgumentException;

/**
 * Configuration du SDK DPD
 */
class Config
{
    private const ENVIRONMENTS = [
        'production' => 'https://eserviss.dpd.lv/api/v1',
        'sandbox' => 'https://sandbox.dpd.com/api/v1', // À ajuster selon la doc
    ];

    private ?string $username;
    private ?string $password;
    private ?string $originalToken;
    private string $tokenId;
    private ?int $tokenTtl;
    private string $environment;
    private string $baseUrl;
    private int $timeout;
    private int $connectTimeout;
    private bool $verifySSL;
    private ?string $apiToken = null;

    /**
     * @param array<string, mixed> $config
     */
    public function __construct(array $config)
    {
        $this->username = $config['username'] ?? null;
        $this->password = $config['password'] ?? null;
        $this->originalToken = $config['original_token'] ?? null;
        $this->tokenId = $config['token_id'] ?? 'SDK Token';
        $this->tokenTtl = $config['token_ttl'] ?? null;

        if ($this->originalToken === null && ($this->username === null || $this->password === null)) {
            throw new InvalidArgumentException('original_token is required (or username/password for backward compatibility)');
        }

        $this->environment = $config['environment'] ?? 'production';
        
        // URL de base
        if (isset($config['base_url'])) {
            $this->baseUrl = $config['base_url'];
        } else {
            $this->baseUrl = self::ENVIRONMENTS[$this->environment] 
                ?? throw new InvalidArgumentException('Invalid environment');
        }

        $this->timeout = $config['timeout'] ?? 30;
        $this->connectTimeout = $config['connect_timeout'] ?? 10;
        $this->verifySSL = $config['verify_ssl'] ?? true;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function getOriginalToken(): ?string
    {
        return $this->originalToken;
    }

    public function getTokenId(): string
    {
        return $this->tokenId;
    }

    public function getTokenTtl(): ?int
    {
        return $this->tokenTtl;
    }

    public function getEnvironment(): string
    {
        return $this->environment;
    }

    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }

    public function getConnectTimeout(): int
    {
        return $this->connectTimeout;
    }

    public function shouldVerifySSL(): bool
    {
        return $this->verifySSL;
    }

    public function getApiToken(): ?string
    {
        return $this->apiToken;
    }

    public function setApiToken(string $token): void
    {
        $this->apiToken = $token;
    }

    public function hasApiToken(): bool
    {
        return $this->apiToken !== null;
    }
}
