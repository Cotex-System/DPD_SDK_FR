<?php

declare(strict_types=1);

namespace DPD\Endpoints;

use DPD\Http\Response;
use DPD\Models\Label;

/**
 * Gestion des étiquettes
 */
class Labels extends AbstractEndpoint
{
    /**
     * Créer des étiquettes pour des envois
     *
     * @param array<string, mixed> $data
     *  Example value:
     * {
     *  "shipmentIds": [
     *      "15731b0c-4118-11eb-8bd3-005056bbea5f"
     *  ],
     *  "parcelNumbers": [
     *      "05757894762505"
     *  ],
     *  "offsetPosition": null,
     *  "downloadLabel": true,
     *  "emailLabel": true,
     *  "labelFormat": null,
     *  "paperSize": null,
     *  "dpi": "203"
     *}
     * @return Label
     */
    public function create(array $data): Label
    {
        $response = $this->post('/shipments/labels', $data);
        return new Label($response->getData());
    }

    /**
     * Créer et imprimer des étiquettes
     *
     * @param array<string, mixed> $data
     * Example value:
     * {
     *  "shipmentIds": [
     *      "15731b0c-4118-11eb-8bd3-005056bbea5f"
     *  ],
     *  "parcelNumbers": [
     *      "05757894762505"
     *  ],
     *  "offsetPosition": null,
     *  "downloadLabel": true,
     *  "emailLabel": true,
     *  "labelFormat": null,
     *  "paperSize": null,
     *  "dpi": "203"
     * }
     * @return Label
     */
    public function print(array $data): Label
    {
        $response = $this->post('/shipments/print/labels', $data);
        return new Label($response->getData());
    }

    /**
     * Obtenir une étiquette spécifique pour un envoi client
     * Deprecated
     * @param string $shipmentId
     * @param string $labelId
     * @return Label
     */
    public function getCustomerLabel(string $shipmentId, string $labelId): Label
    {
        $response = $this->get("/customers/shipments/{$shipmentId}/labels/{$labelId}");
        return new Label($response->getData());
    }

    /**
     * Créer des étiquettes pour des envois clients
     * Deprecated
     * @param array<string, mixed> $data
     * @return Label
     */
    public function createCustomerLabels(array $data): Label
    {
        $response = $this->post('/customers/shipment-labels', $data);
        return new Label($response->getData());
    }
}
