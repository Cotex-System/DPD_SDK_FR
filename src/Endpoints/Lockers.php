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
     *  params awaited:
     * countryCode: string (ex: 'FR') required
     * id: string (ex: '12345') optional
     * name: string (ex: 'DPD Pickup') optional
     * search: string (ex: 'Paris') optional
     * lockerType: Available values : PickupStation, ParcelShop (ex: 'PickupStation') optional
     * distanceType: Available values : air, walking, driving (ex: 'driving') optional
     * street: string (ex: '10 rue de la Paix') optional
     * postalCode: string (ex: '75002') optional
     * city: string (ex: 'Paris') optional
     * order:Order by fields. Current possible orders: city, name, id. Example: name,city or city,name. Default: id
     * radius: int (ex: 10) optional
     * limit: int (ex: 10) optional
     * startPointLatitude: float (ex: 48.8566) optional
     * startPointLongitude: float (ex: 2.3522) optional
     * lockerFeatures: array<string> Available values : consigneePickupAllowed, returnAllowed, expressAllowed, codAllowed, codPaymentType_cash, codPaymentType_cheque, codPaymentType_card (ex: '24/7') optional
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
