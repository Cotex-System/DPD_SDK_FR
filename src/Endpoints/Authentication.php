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
     * Créer un nouveau token API à partir d'un token d'origine
     * 
     * POST /auth/tokens
     * Le body contient:
     * - name => tokenId
     * - ttl => durée de vie du token (optionnel)
     *
     * Le token d'origine doit être créé sur le portail DPD.
     * L'authentification email/mot de passe n'est pas utilisée.
     * 
     * @param string $originalToken Token d'origine créé sur le site DPD
     * @param string $tokenId Identifiant/nom du token à créer (envoyé dans body[name])
     * @param int|null $ttl Durée de vie du token à créer en secondes (envoyé dans body[ttl])
     * @return TokenDTO Token with secretId, validUntil, token
     */
    public function createToken(string $originalToken, string $tokenId = 'SDK Token', ?int $ttl = null): TokenDTO
    {
        $data = ['name' => $tokenId];
        
        if ($ttl !== null) {
            $data['ttl'] = $ttl;
        }

        // Don't use ensureAuthenticated for this request, use original token auth instead
        $response = $this->httpClient->post('/auth/tokens', $data, [
            'Authorization' => 'Bearer ' . $originalToken,
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
