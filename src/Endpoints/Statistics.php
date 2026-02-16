<?php

declare(strict_types=1);

namespace DPD\Endpoints;

/**
 * Gestion des statistiques d'envois
 */
class Statistics extends AbstractEndpoint
{
    /**
     * Obtenir les statistiques d'envois
     *
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function getShipmentStats(array $params = []): array
    {
        $response = $this->get('/shipments/stats', $params);
        return $response->getData();
    }

    /**
     * Obtenir les statistiques par période
     *
     * @param string $startDate Format: Y-m-d
     * @param string $endDate Format: Y-m-d
     * @return array<string, mixed>
     */
    public function getStatsByPeriod(string $startDate, string $endDate): array
    {
        return $this->getShipmentStats([
            'startDate' => $startDate,
            'endDate' => $endDate,
        ]);
    }
}
