<?php

declare(strict_types=1);

namespace DPD\Endpoints;

use DPD\Models\Response\ShipmentStatsDTO;

/**
 * Gestion des statistiques d'envois
 */
class Statistics extends AbstractEndpoint
{
    /**
     * Obtenir les statistiques d'envois
     *
     * @return ShipmentStatsDTO
     */
    public function getShipmentStats(): ShipmentStatsDTO
    {
        $response = $this->get('/shipments/stats');
        return new ShipmentStatsDTO($response->getData());
    }

    /**
     * Obtenir les statistiques par période
     *
     * @param string $startDate Format: Y-m-d
     * @param string $endDate Format: Y-m-d
     * @return ShipmentStatsDTO
     */
    public function getStatsByPeriod(string $startDate, string $endDate): ShipmentStatsDTO
    {
        $response = $this->get('/shipments/stats', [
            'startDate' => $startDate,
            'endDate' => $endDate,
        ]);
        return new ShipmentStatsDTO($response->getData());
    }
}
