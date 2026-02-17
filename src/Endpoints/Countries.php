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
     * @param string $direction 'origin' ou 'destination' pour filtrer les pays d'origine ou de destination
     * @return array<string, mixed>
     */
    public function list(string $direction): array
    {
        $response = $this->get('/countries', ['direction' => $direction]);
        return $response->getData();
    }

    /**
     * Obtenir la liste des pays avec points relais
     *
     * @return array<string, mixed>
     */
    public function getLockerCountries(): array
    {
        $response = $this->get('/countries/lockers');
        return $response->getData();
    }

    /**
     * Rechercher des villes
     *
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function searchCities(string $countryCode): array
    {
        $response = $this->get('/cities', ['countryCode' => $countryCode]);
        return $response->getData();
    }


}
