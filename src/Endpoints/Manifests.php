<?php

declare(strict_types=1);

namespace DPD\Endpoints;

use DPD\Models\Manifest;

/**
 * Gestion des bordereaux de remise (manifests)
 */
class Manifests extends AbstractEndpoint
{
    /**
     * Créer un manifeste
     *
     * @param array<string, mixed> $data
     * @return Manifest
     */
    public function create(array $data): Manifest
    {
        $response = $this->post('/shipments/manifests', $data);
        return new Manifest($response->getData());
    }

    /**
     * Créer et imprimer un manifeste
     *
     * @param array<string, mixed> $data
     * @return Manifest
     */
    public function print(array $data): Manifest
    {
        $response = $this->post('/shipments/manifests/print', $data);
        return new Manifest($response->getData());
    }

    /**
     * Obtenir un manifeste par son UUID
     *
     * @param string $uuid
     * @return Manifest
     */
    public function getManifest(string $uuid): Manifest
    {
        $response = $this->get("/shipments/manifests/{$uuid}");
        return new Manifest($response->getData());
    }

    /**
     * Obtenir les manifests d'un envoi
     *
     * @param string $shipmentUuid
     * @return array<int, Manifest>
     */
    public function getByShipment(string $shipmentUuid): array
    {
        $response = $this->get("/shipments/{$shipmentUuid}/manifests");
        $data = $response->getData();

        $manifests = [];
        if (is_array($data)) {
            foreach ($data as $manifestData) {
                $manifests[] = new Manifest($manifestData);
            }
        }

        return $manifests;
    }
}
