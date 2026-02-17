<?php

declare(strict_types=1);

namespace DPD\Endpoints;

use DPD\Http\Response;
use DPD\Models\Response\TokenDTO;
use DPD\Models\Response\TokenPayloadDTO;
use DPD\Models\Response\TokenSecretDTO;

/**
 * Gestion de l'authentification
 * 
 * Endpoints basés sur la spécification Swagger DPD API
 */
class Authentication extends AbstractEndpoint
{
    /**
     * Obtenir un nouveau token avec Basic Auth
     * 
     * POST /auth/tokens - Requires basic auth
     * Uses TokenRequestDTO internally
     * 
     * @param string $username Username for basic authentication
     * @param string $password Password for basic authentication
     * @param string $name Human-readable name for the token (TokenRequestDTO::name)
     * @param int|null $ttl Optional secret/token TTL in seconds (TokenRequestDTO::ttl, max: 9999999999999)
     * @return TokenDTO Token with secretId, validUntil, token
     */
    public function createToken(string $username, string $password, string $name = 'API Token', ?int $ttl = null): TokenDTO
    {
        $data = ['name' => $name];
        
        if ($ttl !== null) {
            $data['ttl'] = $ttl;
        }
        
        $credentials = base64_encode("{$username}:{$password}");
        
        // Don't use ensureAuthenticated for this request, use basic auth instead
        $response = $this->httpClient->post('/auth/tokens', $data, [
            'Authorization' => 'Basic ' . $credentials,
        ]);
        
        return new TokenDTO($response->getData());
    }

    /**
     * Obtenir les informations de l'utilisateur connecté
     * 
     * GET /auth/me
     * 
     * @return TokenPayloadDTO User info with userId, secretId, secretName, permissions
     */
    public function getMe(): TokenPayloadDTO
    {
        $response = $this->get('/auth/me');
        return new TokenPayloadDTO($response->getData());
    }

    /**
     * Obtenir la liste des token-secrets
     * 
     * GET /auth/token-secrets
     * 
     * @return array<int, TokenSecretDTO> Array of token secrets
     */
    public function getTokenSecrets(): array
    {
        $response = $this->get('/auth/token-secrets');
        $data = $response->getData();
        
        $secrets = [];
        if (is_array($data)) {
            foreach ($data as $secretData) {
                $secrets[] = new TokenSecretDTO($secretData);
            }
        }
        
        return $secrets;
    }

    /**
     * Supprimer un token existant
     * 
     * DELETE /auth/token-secrets/{id}
     * 
     * @param string $secretId Token-secret ID (UUID format)
     * @return Response
     */
    public function deleteTokenSecret(string $secretId): Response
    {
        return $this->delete("/auth/token-secrets/{$secretId}");
    }
}
