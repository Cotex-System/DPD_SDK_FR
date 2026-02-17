<?php

declare(strict_types=1);

namespace DPD\Endpoints;

use DPD\Models\Response\PickupResponseDTO;
use DPD\Models\Response\TimeFrameResponseDTO;
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
     * @param array<string, mixed>|\DPD\Models\Request\CreatePickupRequestDTO $data Use CreatePickupRequestDTO:
     *                                                                                  - address: PickupCustomerAddressDTO (optional)
     *                                                                                  - shipmentIds: array<string> (optional)
     *                                                                                  - messageToCourier: string (optional, max 250)
     *                                                                                  - pickupDate: string (required, Y-m-d format)
     *                                                                                  - pickupTimeFrom: string (required)
     *                                                                                  - pickupTimeTo: string (required)
     *                                                                                  - parcel: ParcelDTO (optional)
     *                                                                                  - pallets: array<PalletDTO> (optional)
     *                                                                                  - payerCode: int (optional)
     * @return array<string, mixed>
     */
    public function schedule(array $data): array
    {
        $response = $this->post('/pickup', $data);
        return $response->getData();
    }

    /**
     * Obtenir les créneaux horaires disponibles pour une collecte    /**
     * Obtenir les créneaux horaires disponibles
     *
     * @param array<string, mixed> $params Use TimeFrameRequestDTO properties
     * @return array<int, TimeFrameResponseDTO>
     */
    public function getTimeframes(array $params = []): array
    {
        $response = $this->get('/pickup/timeframes', $params);
        $data = $response->getData();
        
        $timeframes = [];
        if (is_array($data)) {
            foreach ($data as $timeframeData) {
                $timeframes[] = new TimeFrameResponseDTO($timeframeData);
            }
        }
        
        return $timeframes;
    }


}
