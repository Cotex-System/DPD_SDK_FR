<?php

declare(strict_types=1);

namespace DPD\Endpoints;

/**
 * Gestion des services disponibles
 */
class Services extends AbstractEndpoint
{
    /**
     * Obtenir la liste des services disponibles
     *
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function list(array $params = []): array
    {
        $response = $this->get('/services', $params);
        return $response->getData();
    }

    /**
     * Obtenir un service spécifique
     *
     * @param string $serviceId
     * @return array<string, mixed>
     */
    public function get(string $serviceId): array
    {
        $response = $this->get("/services/{$serviceId}");
        return $response->getData();
    }
}
