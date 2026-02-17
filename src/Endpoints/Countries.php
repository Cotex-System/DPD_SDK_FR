<?php

declare(strict_types=1);

namespace DPD\Endpoints;

use DPD\Models\Response\CountryDTO;

/**
 * Gestion des pays et villes
 */
class Countries extends AbstractEndpoint
{
    /**
     * Obtenir la liste des pays
     * 
     * @param string $direction 'origin' ou 'destination' pour filtrer les pays d'origine ou de destination
     * @return array<int, CountryDTO> Array of countries with value, name, translatedName, code
     */
    public function list(string $direction): array
    {
        $response = $this->get('/countries', ['direction' => $direction]);
        $data = $response->getData();
        
        $countries = [];
        if (is_array($data)) {
            foreach ($data as $countryData) {
                $countries[] = new CountryDTO($countryData);
            }
        }
        
        return $countries;
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
