<?php

declare(strict_types=1);

namespace DPD\Auth;

use DPD\Config\Config;
use DPD\Exceptions\AuthenticationException;
use DPD\Http\HttpClient;
use DPD\Http\Response;
use DPD\Models\Response\TokenPayloadDTO;
use TheSeer\Tokenizer\Token;

/**
 * Gestion de l'authentification avec l'API DPD
 */
class Authenticator
{
    private HttpClient $httpClient;
    private Config $config;
    private ?string $accessToken = null;
    private ?int $expiresAt = null;
    private ?\DPD\Endpoints\Authentication $authEndpoint = null;

    public function __construct(HttpClient $httpClient, Config $config)
    {
        $this->httpClient = $httpClient;
        $this->config = $config;
    }

    /**
     * Obtenir l'instance de l'endpoint Authentication
     * 
     * @return \DPD\Endpoints\Authentication
     */
    private function getAuthEndpoint(): \DPD\Endpoints\Authentication
    {
        if ($this->authEndpoint === null) {
            $this->authEndpoint = new \DPD\Endpoints\Authentication($this->httpClient, $this);
        }
        
        return $this->authEndpoint;
    }

    /**
     * Authentifie l'utilisateur et récupère un token
     *
     * @throws AuthenticationException
     */
    public function authenticate(): void
    {
        if ($this->isTokenValid()) {
            return;
        }

        try {
            // Use the Authentication endpoint to create a token
            $data = $this->getAuthEndpoint()->createToken(
                $this->config->getUsername(),
                $this->config->getPassword(),
                'SDK Token'
            );

            if (!isset($data['token'])) {
                throw new AuthenticationException('Token not found in response');
            }

            $this->accessToken = $data['token'];
            $this->config->setApiToken($this->accessToken);

            // Calculate expiration from validUntil if provided
            if (isset($data['validUntil'])) {
                $validUntil = strtotime($data['validUntil']);
                if ($validUntil !== false) {
                    $this->expiresAt = $validUntil;
                } else {
                    // Default: token expires in 1 hour
                    $this->expiresAt = time() + 3600;
                }
            } else {
                // Default: token expires in 1 hour
                $this->expiresAt = time() + 3600;
            }
        } catch (\Exception $e) {
            throw new AuthenticationException(
                'Failed to authenticate: ' . $e->getMessage(),
                0,
                $e
            );
        }
    }

    /**
     * Vérifie si le token actuel est valide
     */
    public function isTokenValid(): bool
    {
        if ($this->accessToken === null || $this->expiresAt === null) {
            return false;
        }

        // Considérer le token invalide 5 minutes avant son expiration
        return time() < ($this->expiresAt - 300);
    }

    /**
     * Obtenir le token d'accès actuel
     */
    public function getAccessToken(): ?string
    {
        if (!$this->isTokenValid()) {
            $this->authenticate();
        }

        return $this->accessToken;
    }

    /**
     * Forcer le renouvellement du token
     */
    public function refreshToken(): void
    {
        $this->accessToken = null;
        $this->expiresAt = null;
        $this->authenticate();
    }

    /**
     * Obtenir les informations de l'utilisateur connecté
     *
     * @return TokenPayloadDTO
     * @throws AuthenticationException
     */
    public function getMe(): TokenPayloadDTO
    {
        if (!$this->isTokenValid()) {
            $this->authenticate();
        }

        try {
            return $this->getAuthEndpoint()->getMe();
        } catch (\Exception $e) {
            throw new AuthenticationException(
                'Failed to get user info: ' . $e->getMessage(),
                0,
                $e
            );
        }
    }

    /**
     * Obtenir la liste des token-secrets
     *
     * @return array<int, array<string, mixed>>
     * @throws AuthenticationException
     */
    public function getTokenSecrets(): array
    {
        if (!$this->isTokenValid()) {
            $this->authenticate();
        }

        try {
            return $this->getAuthEndpoint()->getTokenSecrets();
        } catch (\Exception $e) {
            throw new AuthenticationException(
                'Failed to get token secrets: ' . $e->getMessage(),
                0,
                $e
            );
        }
    }

    /**
     * Supprimer un token-secret
     *
     * @param string $secretId Token-secret ID (UUID format)
     * @return void
     * @throws AuthenticationException
     */
    public function deleteTokenSecret(string $secretId): void
    {
        if (!$this->isTokenValid()) {
            $this->authenticate();
        }

        try {
            $this->getAuthEndpoint()->deleteTokenSecret($secretId);
        } catch (\Exception $e) {
            throw new AuthenticationException(
                'Failed to delete token secret: ' . $e->getMessage(),
                0,
                $e
            );
        }
    }
}
