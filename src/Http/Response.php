<?php

declare(strict_types=1);

namespace DPD\Http;

use Psr\Http\Message\ResponseInterface;

/**
 * Wrapper pour les réponses HTTP
 */
class Response
{
    private ResponseInterface $response;
    private mixed $data;

    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;
        $this->parseBody();
    }

    /**
     * Parse le corps de la réponse
     */
    private function parseBody(): void
    {
        $body = (string) $this->response->getBody();
        
        if (empty($body)) {
            $this->data = null;
            return;
        }

        $contentType = $this->response->getHeaderLine('Content-Type');

        if (str_contains($contentType, 'application/json')) {
            $this->data = json_decode($body, true);
        } else {
            $this->data = $body;
        }
    }

    /**
     * Obtenir les données décodées
     *
     * @return mixed
     */
    public function getData(): mixed
    {
        return $this->data;
    }

    /**
     * Obtenir le code de statut HTTP
     */
    public function getStatusCode(): int
    {
        return $this->response->getStatusCode();
    }

    /**
     * Obtenir un en-tête spécifique
     */
    public function getHeader(string $name): string
    {
        return $this->response->getHeaderLine($name);
    }

    /**
     * Obtenir tous les en-têtes
     *
     * @return array<string, array<string>>
     */
    public function getHeaders(): array
    {
        return $this->response->getHeaders();
    }

    /**
     * Obtenir le corps brut
     */
    public function getBody(): string
    {
        return (string) $this->response->getBody();
    }

    /**
     * Vérifier si la requête a réussi (2xx)
     */
    public function isSuccessful(): bool
    {
        return $this->getStatusCode() >= 200 && $this->getStatusCode() < 300;
    }

    /**
     * Accès magique aux données
     */
    public function __get(string $name): mixed
    {
        return $this->data[$name] ?? null;
    }

    /**
     * Vérifier si une clé existe
     */
    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }
}
