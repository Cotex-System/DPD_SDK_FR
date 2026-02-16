<?php

declare(strict_types=1);

namespace DPD\Endpoints;

use DPD\Auth\Authenticator;
use DPD\Http\HttpClient;
use DPD\Http\Response;

/**
 * Classe de base pour tous les endpoints
 */
abstract class AbstractEndpoint
{
    protected HttpClient $httpClient;
    protected Authenticator $authenticator;

    public function __construct(HttpClient $httpClient, Authenticator $authenticator)
    {
        $this->httpClient = $httpClient;
        $this->authenticator = $authenticator;
    }

    /**
     * Assure que l'utilisateur est authentifié avant chaque requête
     */
    protected function ensureAuthenticated(): void
    {
        if (!$this->authenticator->isTokenValid()) {
            $this->authenticator->authenticate();
        }
    }

    /**
     * Effectue une requête GET
     *
     * @param string $endpoint
     * @param array<string, mixed> $params
     * @return Response
     */
    protected function get(string $endpoint, array $params = []): Response
    {
        $this->ensureAuthenticated();
        return $this->httpClient->get($endpoint, $params);
    }

    /**
     * Effectue une requête POST
     *
     * @param string $endpoint
     * @param array<string, mixed> $data
     * @return Response
     */
    protected function post(string $endpoint, array $data = []): Response
    {
        $this->ensureAuthenticated();
        return $this->httpClient->post($endpoint, $data);
    }

    /**
     * Effectue une requête PUT
     *
     * @param string $endpoint
     * @param array<string, mixed> $data
     * @return Response
     */
    protected function put(string $endpoint, array $data = []): Response
    {
        $this->ensureAuthenticated();
        return $this->httpClient->put($endpoint, $data);
    }

    /**
     * Effectue une requête DELETE
     *
     * @param string $endpoint
     * @return Response
     */
    protected function delete(string $endpoint): Response
    {
        $this->ensureAuthenticated();
        return $this->httpClient->delete($endpoint);
    }
}
