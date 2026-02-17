<?php

declare(strict_types=1);

namespace DPD\Endpoints;

use DPD\Http\Response;

/**
 * Gestion des collectes (pickup)
 */
class Pickup extends AbstractEndpoint
{

    /**
     * Obtenir la liste des collectes planifiées
     *
     * @param array<string, mixed> $params
     * Example value:
     * order: string Available values : asc, desc
     * sort: string Available values : pallets, id, senderName, address, contactName, contactPhone, contactEmail, parcelCount, parcelWeight, pickupDate, createdAt
     * limit: integer
     * senderName: string
     * address: string
     * contactName: string
     * contactPhone: string
     * contactEmail: string
     * parcelCount: integer
     * parcelWeight: number
     * pickupDate: string (format YYYY-MM-DD)
     * createdAtFrom: string (format YYYY-MM-DD)
     * createdAtTo: string (format YYYY-MM-DD)
     * pallets:string
     * customerName: string
     * @return array<string, mixed>
     */
public function getPickups(array $params = []): array
    {
        $response = $this->get('/pickup', $params);
        return $response->getData();
    }

    /**
     * Planifier une collecte
     *
     * @param array<string, mixed> $data
     * Example value:
     * {
     *      "address": {
     *          "addressId": null,
     *          "name": "test pickup name",
     *          "contactName": "test pickup contact name",
     *          "contactEmail": "test pickup contact name",
     *          "contactPhone": "test pickup contact name",
     *          "contactInfo": null,
     *          "email": "fwmekf@fwemfk.com",
     *          "phone": "+37168888888",
     *          "street": null,
     *          "streetNo": null,
     *          "flatNo": null,
     *          "city": null,
     *          "postalCode": null,
     *          "country": "LV"
     *      },
     *      "shipmentIds": [
     *          "string"
     *      ],
     *      "messageToCourier": null,
     *      "pickupDate": "2021-01-10",
     *      "pickupTimeFrom": "string",
     *      "pickupTimeTo": "string",
     *      "parcel": {
     *          "count": 1000,
     *          "weight": 31500
     *      },
     *      "pallets": [
     *          {
     *              "weight": 32767,
     *              "type": null
     *          }
     *      ],
     *      "payerCode": null
     * }
     * @return array<string, mixed>
     */
    public function schedule(array $data): array
    {
        $response = $this->post('/pickup', $data);
        return $response->getData();
    }

    /**
     * Obtenir les créneaux horaires disponibles pour une collecte
     *
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function getTimeframes(array $params = []): array
    {
        $response = $this->get('/pickup/timeframes', $params);
        return $response->getData();
    }


}
