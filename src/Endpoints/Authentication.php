<?php

declare(strict_types=1);

namespace DPD\Endpoints;

use DPD\Http\Response;

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
     * POST /auth/tokens - Accepts basic auth
     * 
     * @param string $username Username for basic authentication
     * @param string $password Password for basic authentication
     * @param string $name Human-readable name for the token
     * @param int|null $ttl Optional secret/token TTL in seconds
     * @return array<string, mixed> TokenDTO containing secretId, validUntil, and token
     * 
     * Response structure:
     * [
     *   'secretId' => '032c0270-92b2-40ab-bd5a-455fe33a5718',
     *   'validUntil' => '2024-12-31 23:59:59',
     *   'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9...'
     * ]
     */
    public function createToken(string $username, string $password, string $name = 'API Token', ?int $ttl = null): array
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
        
        return $response->getData();
    }

    /**
     * Obtenir les informations de l'utilisateur connecté
     * 
     * GET /auth/me
     * 
     * @return array<string, mixed> TokenPayloadDTO containing userId, secretId, secretName, permissions, userMetadataDTO
     * 
     * Response structure:
     * [
     *   'userId' => '1',
     *   'secretId' => '032c0270-92b2-40ab-bd5a-455fe33a5718',
     *   'secretName' => 'AMBER GUI',
     *   'permissions' => ['permission1', 'permission2'],
     *   'userMetadataDTO' => [...]
     * ]
     */
    public function getMe(): array
    {
        $response = $this->get('/auth/me');
        return $response->getData();
    }

    /**
     * Obtenir la liste des token-secrets
     * 
     * GET /auth/token-secrets
     * 
     * @return array<int, array<string, mixed>> Array of TokenSecretDTO
     * 
     * Response structure:
     * [
     *   [
     *     'secretId' => '032c0270-92b2-40ab-bd5a-455fe33a5718',
     *     'name' => 'AMBER GUI',
     *     'createdAt' => '2023-01-30 23:59:59'
     *   ],
     *   ...
     * ]
     */
    public function getTokenSecrets(): array
    {
        $response = $this->get('/auth/token-secrets');
        return $response->getData();
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
