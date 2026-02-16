<?php

declare(strict_types=1);

namespace DPD\Endpoints;

use DPD\Http\Response;
use DPD\Models\Shipment;

/**
 * Gestion des envois
 */
class Shipments extends AbstractEndpoint
{
    /**
     * Créer un nouvel envoi
     *
     * @param array<string, mixed> $data
     * @return Shipment
     */
    public function create(array $data): Shipment
    {
        $response = $this->post('/shipments', $data);
        return new Shipment($response->getData());
    }

    /**
     * Obtenir un envoi par son UUID
     *
     * @param string $uuid
     * @return Shipment
     */
    public function get(string $uuid): Shipment
    {
        $response = $this->get("/shipments/info/{$uuid}");
        return new Shipment($response->getData());
    }

    /**
     * Lister les envois
     *
     * @param array<string, mixed> $params
     * @return array<int, Shipment>
     */
    public function list(array $params = []): array
    {
        $response = $this->get('/shipments/list', $params);
        $data = $response->getData();

        $shipments = [];
        if (isset($data['data']) && is_array($data['data'])) {
            foreach ($data['data'] as $shipmentData) {
                $shipments[] = new Shipment($shipmentData);
            }
        }

        return $shipments;
    }

    /**
     * Mettre à jour un envoi
     *
     * @param string $uuid
     * @param array<string, mixed> $data
     * @return Shipment
     */
    public function update(string $uuid, array $data): Shipment
    {
        $response = $this->put("/shipments/info/{$uuid}", $data);
        return new Shipment($response->getData());
    }

    /**
     * Supprimer un ou plusieurs envois
     *
     * @param array<string> $uuids
     * @return Response
     */
    public function delete(array $uuids): Response
    {
        return $this->post('/shipments/delete', ['shipmentIds' => $uuids]);
    }

    /**
     * Copier un envoi
     *
     * @param string $uuid
     * @return Shipment
     */
    public function copy(string $uuid): Shipment
    {
        $response = $this->post('/shipments/copy', ['shipmentId' => $uuid]);
        return new Shipment($response->getData());
    }

    /**
     * Obtenir les envois nécessitant une attention
     *
     * @param array<string, mixed> $params
     * @return array<int, Shipment>
     */
    public function needsAttention(array $params = []): array
    {
        $response = $this->get('/shipments/needs-attention', $params);
        $data = $response->getData();

        $shipments = [];
        if (isset($data['data']) && is_array($data['data'])) {
            foreach ($data['data'] as $shipmentData) {
                $shipments[] = new Shipment($shipmentData);
            }
        }

        return $shipments;
    }

    /**
     * Exporter les envois vers Excel
     *
     * @param array<string, mixed> $params
     * @return string Base64 encoded file
     */
    public function exportToExcel(array $params = []): string
    {
        $response = $this->post('/shipments/exportToExcel', $params);
        return $response->getData()['file'] ?? '';
    }

    /**
     * Impression directe d'étiquettes
     *
     * @param array<string, mixed> $data
     * @return Response
     */
    public function directPrint(array $data): Response
    {
        return $this->post('/shipments/direct-print', $data);
    }

    /**
     * Obtenir les actions disponibles pour un produit
     *
     * @param string $productId
     * @return array<string, mixed>
     */
    public function getActions(string $productId): array
    {
        $response = $this->get("/shipments/actions/{$productId}");
        return $response->getData();
    }
}
