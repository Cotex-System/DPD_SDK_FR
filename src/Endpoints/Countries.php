<?php

declare(strict_types=1);

namespace DPD\Endpoints;

/**
 * Gestion des pays et villes
 */
class Countries extends AbstractEndpoint
{
    /**
     * Obtenir la liste des pays
     *
     * @return array<string, mixed>
     */
    public function list(): array
    {
        $response = $this->get('/countries');
        return $response->getData();
    }

    /**
     * Obtenir un pays spécifique
     *
     * @param string $countryCode
     * @return array<string, mixed>
     */
    public function getByCode(string $countryCode): array
    {
        $response = $this->get("/countries/{$countryCode}");
        return $response->getData();
    }

    /**
     * Rechercher des villes
     *
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function searchCities(array $params): array
    {
        $response = $this->get('/cities', $params);
        return $response->getData();
    }

    /**
     * Rechercher des villes par code postal
     *
     * @param string $postalCode
     * @param string $countryCode
     * @return array<string, mixed>
     */
    public function getCitiesByPostalCode(string $postalCode, string $countryCode = 'FR'): array
    {
        return $this->searchCities([
            'postalCode' => $postalCode,
            'countryCode' => $countryCode,
        ]);
    }
}
