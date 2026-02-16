<?php

declare(strict_types=1);

namespace DPD\Auth;

use DPD\Config\Config;
use DPD\Exceptions\AuthenticationException;
use DPD\Http\HttpClient;
use DPD\Http\Response;

/**
 * Gestion de l'authentification avec l'API DPD
 */
class Authenticator
{
    private HttpClient $httpClient;
    private Config $config;
    private ?string $accessToken = null;
    private ?int $expiresAt = null;

    public function __construct(HttpClient $httpClient, Config $config)
    {
        $this->httpClient = $httpClient;
        $this->config = $config;
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
            $response = $this->httpClient->authenticateBasic(
                $this->config->getUsername(),
                $this->config->getPassword()
            );

            $data = $response->getData();

            if (!isset($data['token'])) {
                throw new AuthenticationException('Token not found in response');
            }

            $this->accessToken = $data['token'];
            $this->config->setApiToken($this->accessToken);

            // Calculer l'expiration (généralement fourni dans la réponse)
            if (isset($data['expires_in'])) {
                $this->expiresAt = time() + (int) $data['expires_in'];
            } else {
                // Par défaut, on considère que le token expire dans 1 heure
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
     * @return array<string, mixed>
     * @throws AuthenticationException
     */
    public function getMe(): array
    {
        if (!$this->isTokenValid()) {
            $this->authenticate();
        }

        try {
            $response = $this->httpClient->get('/auth/me');
            return $response->getData();
        } catch (\Exception $e) {
            throw new AuthenticationException(
                'Failed to get user info: ' . $e->getMessage(),
                0,
                $e
            );
        }
    }
}
