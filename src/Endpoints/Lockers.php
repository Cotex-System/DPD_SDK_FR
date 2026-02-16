<?php

declare(strict_types=1);

namespace DPD\Endpoints;

use DPD\Models\Locker;

/**
 * Gestion des points relais / Lockers
 */
class Lockers extends AbstractEndpoint
{
    /**
     * Rechercher des points relais
     *
     * @param array<string, mixed> $params
     * @return array<int, Locker>
     */
    public function search(array $params): array
    {
        $response = $this->get('/lockers', $params);
        $data = $response->getData();

        $lockers = [];
        if (isset($data['data']) && is_array($data['data'])) {
            foreach ($data['data'] as $lockerData) {
                $lockers[] = new Locker($lockerData);
            }
        }

        return $lockers;
    }

    /**
     * Obtenir un point relais par son ID
     *
     * @param string $id
     * @return Locker
     */
    public function getLocker(string $id): Locker
    {
        $response = $this->get("/lockers/{$id}");
        return new Locker($response->getData());
    }

    /**
     * Rechercher des points relais par code postal
     *
     * @param string $postalCode
     * @param string $countryCode
     * @param int $limit
     * @return array<int, Locker>
     */
    public function searchByPostalCode(
        string $postalCode,
        string $countryCode = 'FR',
        int $limit = 10
    ): array {
        return $this->search([
            'postalCode' => $postalCode,
            'countryCode' => $countryCode,
            'limit' => $limit,
        ]);
    }

    /**
     * Rechercher des points relais par ville
     *
     * @param string $city
     * @param string $countryCode
     * @param int $limit
     * @return array<int, Locker>
     */
    public function searchByCity(
        string $city,
        string $countryCode = 'FR',
        int $limit = 10
    ): array {
        return $this->search([
            'city' => $city,
            'countryCode' => $countryCode,
            'limit' => $limit,
        ]);
    }
}
