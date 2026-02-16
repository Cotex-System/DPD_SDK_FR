<?php

declare(strict_types=1);

namespace DPD\Http;

use DPD\Config\Config;
use DPD\Exceptions\DPDException;
use DPD\Exceptions\AuthenticationException;
use DPD\Exceptions\ValidationException;
use DPD\Exceptions\NotFoundException;
use DPD\Exceptions\RateLimitException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Client HTTP pour les appels à l'API DPD
 */
class HttpClient
{
    private Client $client;
    private Config $config;
    private LoggerInterface $logger;

    public function __construct(Config $config, LoggerInterface $logger)
    {
        $this->config = $config;
        $this->logger = $logger;

        $this->client = new Client([
            'base_uri' => $config->getBaseUrl(),
            'timeout' => $config->getTimeout(),
            'connect_timeout' => $config->getConnectTimeout(),
            'verify' => $config->shouldVerifySSL(),
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    /**
     * Effectue une requête GET
     *
     * @param string $endpoint
     * @param array<string, mixed> $params
     * @param array<string, string> $headers
     * @return Response
     * @throws DPDException
     */
    public function get(string $endpoint, array $params = [], array $headers = []): Response
    {
        return $this->request('GET', $endpoint, [
            'query' => $params,
            'headers' => $headers,
        ]);
    }

    /**
     * Effectue une requête POST
     *
     * @param string $endpoint
     * @param array<string, mixed> $data
     * @param array<string, string> $headers
     * @return Response
     * @throws DPDException
     */
    public function post(string $endpoint, array $data = [], array $headers = []): Response
    {
        return $this->request('POST', $endpoint, [
            'json' => $data,
            'headers' => $headers,
        ]);
    }

    /**
     * Effectue une requête PUT
     *
     * @param string $endpoint
     * @param array<string, mixed> $data
     * @param array<string, string> $headers
     * @return Response
     * @throws DPDException
     */
    public function put(string $endpoint, array $data = [], array $headers = []): Response
    {
        return $this->request('PUT', $endpoint, [
            'json' => $data,
            'headers' => $headers,
        ]);
    }

    /**
     * Effectue une requête DELETE
     *
     * @param string $endpoint
     * @param array<string, string> $headers
     * @return Response
     * @throws DPDException
     */
    public function delete(string $endpoint, array $headers = []): Response
    {
        return $this->request('DELETE', $endpoint, [
            'headers' => $headers,
        ]);
    }

    /**
     * Effectue une requête HTTP
     *
     * @param string $method
     * @param string $endpoint
     * @param array<string, mixed> $options
     * @return Response
     * @throws DPDException
     */
    private function request(string $method, string $endpoint, array $options = []): Response
    {
        // Ajouter le token Bearer si disponible
        if ($this->config->hasApiToken()) {
            $options['headers']['Authorization'] = 'Bearer ' . $this->config->getApiToken();
        }

        $this->logger->debug("DPD API Request: {$method} {$endpoint}", [
            'options' => $options,
        ]);

        try {
            $response = $this->client->request($method, $endpoint, $options);
            
            $this->logger->debug("DPD API Response: {$response->getStatusCode()}", [
                'body' => (string) $response->getBody(),
            ]);

            return new Response($response);
        } catch (GuzzleException $e) {
            $this->logger->error("DPD API Error: {$e->getMessage()}", [
                'exception' => $e,
            ]);

            $this->handleException($e);
        }
    }

    /**
     * Gère les exceptions Guzzle et les convertit en exceptions DPD
     *
     * @param GuzzleException $exception
     * @throws DPDException
     * @return never
     */
    private function handleException(GuzzleException $exception): void
    {
        $response = method_exists($exception, 'getResponse') ? $exception->getResponse() : null;
        $statusCode = $response?->getStatusCode() ?? 0;
        $body = $response ? (string) $response->getBody() : '';
        
        $errorData = [];
        if ($body) {
            $errorData = json_decode($body, true) ?? [];
        }

        $message = $errorData['message'] ?? $errorData['title'] ?? $exception->getMessage();

        match ($statusCode) {
            401, 403 => throw new AuthenticationException($message, $statusCode, $exception),
            404 => throw new NotFoundException($message, $statusCode, $exception),
            422 => throw new ValidationException($message, $statusCode, $errorData['errors'] ?? [], $exception),
            429 => throw new RateLimitException($message, $statusCode, $exception),
            default => throw new DPDException($message, $statusCode, $exception),
        };
    }

    /**
     * Authentification Basic pour récupérer le token initial
     *
     * @param string $username
     * @param string $password
     * @return Response
     * @throws DPDException
     */
    public function authenticateBasic(string $username, string $password): Response
    {
        $credentials = base64_encode("{$username}:{$password}");

        return $this->request('POST', '/auth/tokens', [
            'headers' => [
                'Authorization' => 'Basic ' . $credentials,
            ],
        ]);
    }

    public function getConfig(): Config
    {
        return $this->config;
    }
}
