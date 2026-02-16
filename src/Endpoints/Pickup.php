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
     * Planifier une collecte
     *
     * @param array<string, mixed> $data
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

    /**
     * Annuler une collecte
     *
     * @param string $pickupId
     * @return bool
     */
    public function cancel(string $pickupId): bool
    {
        $response = $this->delete("/pickup/{$pickupId}");
        return $response->isSuccessful();
    }
}
