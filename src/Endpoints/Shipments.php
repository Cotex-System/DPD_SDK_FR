<?php

declare(strict_types=1);

namespace DPD\Endpoints;

use DPD\Http\Response;
use DPD\Models\Shipment;
use DPD\Models\Response\ShipmentDTO;
use DPD\Models\Response\ShipmentPageDTO;

/**
 * Gestion des envois
 */
class Shipments extends AbstractEndpoint
{
    /**
     * Créer un nouvel envoi
     *
     * @param array<string, mixed>|\DPD\Models\Request\ShipmentCreationDTO $data Use ShipmentCreationDTO to build parameters:
     *                                                                                - senderAddress: AddressDTO
     *                                                                                - receiverAddress: AddressDTO
     *                                                                                - service: ShipmentServiceDTO (required)
     *                                                                                - parcels: array<ShipmentParcelDTO> (required)
     *                                                                                - additionalServices: array<AdditionalServiceDTO> (optional)
     *                                                                                - pickup: ShipmentPickupDTO (optional)
     *                                                                                - invoiceOptions: InvoiceOptionsDTO (optional)
     *                                                                                - shipmentFlags: ShipmentFlagDTO (optional)
     * example value:
     * [
     *   {
     *       "senderAddress": {
     *       "name": "test name",
     *       "contactName": "test contact name",
     *       "contactEmail": null,
     *       "contactPhone": null,
     *       "contactInfo": null,
     *       "email": "wmfkwe@mfwekmf.com",
     *       "phone": "+37168888888",
     *       "street": null,
     *       "streetNo": null,
     *       "flatNo": null,
     *       "city": null,
     *       "postalCode": null,
     *       "country": null,
     *       "pudoId": null,
     *       "addressId": null
     *       },
     *       "receiverAddress": {
     *       "name": "test name",
     *       "contactName": "test contact name",
     *       "contactEmail": null,
     *       "contactPhone": null,
     *       "contactInfo": null,
     *       "email": "wmfkwe@mfwekmf.com",
     *       "phone": "+37168888888",
     *       "street": null,
     *       "streetNo": null,
     *       "flatNo": null,
     *       "city": null,
     *       "postalCode": null,
     *       "country": null,
     *       "pudoId": null,
     *       "addressId": null
     *       },
     *       "systemReturnAddress": {
     *       "name": "test name",
     *       "contactName": "test contact name",
     *       "contactEmail": null,
     *       "contactPhone": null,
     *       "contactInfo": null,
     *       "email": "wmfkwe@mfwekmf.com",
     *       "phone": "+37168888888",
     *       "street": null,
     *       "streetNo": null,
     *       "flatNo": null,
     *       "city": null,
     *       "postalCode": null,
     *       "country": null,
     *       "pudoId": null,
     *       "addressId": null
     *       },
     *       "returnAddress": {
     *       "name": "test name",
     *       "contactName": "test contact name",
     *       "contactEmail": null,
     *       "contactPhone": null,
     *       "contactInfo": null,
     *       "email": "wmfkwe@mfwekmf.com",
     *       "phone": "+37168888888",
     *       "street": null,
     *       "streetNo": null,
     *       "flatNo": null,
     *       "city": null,
     *       "postalCode": null,
     *       "country": null,
     *       "pudoId": null,
     *       "addressId": null
     *       },
     *       "payerCode": "11111",
     *       "service": {
     *       "serviceAlias": "DPD_CLASSIC"
     *       },
     *       "additionalServices": [
     *       {
     *           "serviceAlias": "CBL_ADD",
     *           "fields": [
     *           "string"
     *           ]
     *       }
     *       ],
     *       "parcels": [
     *       {
     *           "weight": 31.5,
     *           "parcelNumber": "05757894762505",
     *           "mpsReferences": [
     *           "ref1"
     *           ],
     *           "size": "xs",
     *           "expiryDate": "string"
     *       }
     *       ],
     *       "pallets": [
     *       {
     *           "weight": 32767,
     *           "type": null,
     *           "mpsReferences": [
     *           "ref1"
     *           ]
     *       }
     *       ],
     *       "pickup": {
     *       "messageToCourier": "Please leave behind doors.",
     *       "pickupDate": "2021-01-10",
     *       "pickupTimeFrom": "12:00",
     *       "pickupTimeTo": "17:00"
     *       },
     *       "contentDescription": null,
     *       "shipmentReferences": null,
     *       "additionalInfo": null,
     *       "shipmentFlags": {
     *       "savesSenderAddress": true,
     *       "savesReceiverAddress": true,
     *       "savesSystemReturnAddress": true,
     *       "savesReturnAddress": true,
     *       "generatesDplPin": true,
     *       "getsPrice": true,
     *       "saveSenderDefaultAddress": true,
     *       "saveReceiverDefaultAddress": true,
     *       "saveReturnDefaultAddress": true
     *       },
     *       "invoiceOptions": {
     *       "generatesInvoice": true,
     *       "name": "invoice_name",
     *       "company": "company_name",
     *       "street": "street_name",
     *       "zip": "1005",
     *       "country": "string",
     *       "city": "string",
     *       "emailText": [
     *           "string"
     *       ]
     *       },
     *       "labelOptions": {
     *       "shipmentIds": [
     *           "15731b0c-4118-11eb-8bd3-005056bbea5f"
     *       ],
     *       "parcelNumbers": [
     *           "05757894762505"
     *       ],
     *       "offsetPosition": null,
     *       "downloadLabel": true,
     *       "emailLabel": true,
     *       "labelFormat": null,
     *       "paperSize": null,
     *       "dpi": "203"
     *       },
     *       "mpsId": null,
     *       "limitedQuantityData": {
     *       "unNo": null,
     *       "classCode": null,
     *       "packingGroup": null
     *       }
     *   }
     * ]
     * @return ShipmentDTO
     */
    public function create(array $data): ShipmentDTO
    {
        $response = $this->post('/shipments', $data);
        return new ShipmentDTO($response->getData());
    }
    /**
     * Obtenir les envois avec des paramètres de filtrage
     *  
     * @param array<string, mixed> $params Use ShipmentSearchDTO properties:
     *                                        - ids: array<string> UUID format
     *                                        - status: array<string> (pending, not_booked, not_printed, delivered, returned, in_route, rdl_delivered, rdl_in_route, failed, rejected)
     *                                        - mainServiceAlias: array<string>
     *                                        - additionalServiceAlias: array<string>
     * status:array of string, Available values : pending, not_booked, not_printed, delivered, returned, in_route, rdl_delivered, rdl_in_route, failed, rejected
     * mainServiceAlias:array<string>
     * additionnalServiceAlias:array<string>
     * manifestId:string
     * hasManifest:boolean
     * referenceNumber:string max length 35
     * parcelNumber:string max length 14
     * senderName:string max length 255
     * contactPerson:string max length 255
     * senderAddress:string
     * receiverAddress:string
     * receiver:string max length 255
     * payerCode:string max length 255
     * user:string max length 255
     * direction:string, Available values : domestic, international
     * pickupDateFrom:date
     * pickupDateTo:date
     * creationDateFrom:date
     * creationDateTo:date
     * page:int
     * limit:int
     * @return array<int, ShipmentDTO>
     */
    public function getShipments(array $params = []): array
    {
        $response = $this->get('/shipments', $params);
        $data = $response->getData();

        $shipments = [];
        if (isset($data['data']) && is_array($data['data'])) {
            foreach ($data['data'] as $shipmentData) {
                $shipments[] = new ShipmentDTO($shipmentData);
            }
        }

        return $shipments;
    }
    /**
     * Obtenir un envoi par son UUID
     *
     * @param string $uuid
     * @return ShipmentDTO
     */
    public function getShipment(string $uuid): ShipmentDTO
    {
        $response = $this->get("/shipments/info/{$uuid}");
        return new ShipmentDTO($response->getData());
    }

    /**
     * Lister les envois
     *
     * @param int $page
     * 
     * @return array<int, ShipmentDTO>
     */
    public function list(int $page = 0): array
    {
        $response = $this->get('/shipments/list', ["page"=>$page]);
        $data = $response->getData();

        $shipments = [];
        if (isset($data['data']) && is_array($data['data'])) {
            foreach ($data['data'] as $shipmentData) {
                $shipments[] = new ShipmentDTO($shipmentData);
            }
        }

        return $shipments;
    }

    /**
     * Mettre à jour un envoi
     *
     * @param string $uuid Shipment UUID
     * @param array<string, mixed> $data Use ShipmentCreationDTO properties (same as create)
     * @return ShipmentDTO
     */
    public function update(string $uuid, array $data): ShipmentDTO
    {
        $response = $this->put("/shipments/info/{$uuid}", $data);
        return new ShipmentDTO($response->getData());
    }

    /**
     * Supprimer un ou plusieurs envois
     *
     * @param array<string> $uuids
     * @return Response
     */
    public function deleteShipment(array $uuids): Response
    {
        $string=implode(',', $uuids);
        return $this->delete('/shipments', ['ids' => $string]);
    }

    /**
     * Copier un envoi
     *
     * @param string $uuid
     * @return ShipmentDTO
     */
    public function copy(string $uuid): ShipmentDTO
    {
        $response = $this->post('/shipments/copy', ['shipmentId' => $uuid]);
        return new ShipmentDTO($response->getData());
    }

    /**
     * Obtenir les envois nécessitant une attention
     *
     * @param int $page
     * @return array<int, ShipmentDTO>
     */
    public function needsAttention(int $page = 0): array
    {
        $response = $this->get('/shipments/needs-attention', ["page"=>$page]);
        $data = $response->getData();

        $shipments = [];
        if (isset($data['data']) && is_array($data['data'])) {
            foreach ($data['data'] as $shipmentData) {
                $shipments[] = new ShipmentDTO($shipmentData);
            }
        }

        return $shipments;
    }

    /**
     * Exporter les envois vers Excel
     *
     * @param array<string, mixed> $params list of UUIDs
     * @return string Base64 encoded file
     */
    public function exportToExcel(array $params = []): string
    {
        $string=implode(',', $params);
        $response = $this->delete('/shipments/exportToExcel', ['selectedOrders' => $string]);
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

    /**
     * Obtenir les statistiques d'envois
     *
      * 
      * @return array<string, mixed>
     */
    public function getStats(): array
    {
        $response = $this->get('/shipments/stats');
        return $response->getData();
    }

    public function getLeadtime(?string $originCountry = null, ?string $originPostalCode = null, ?string $destinationCountry = null,
    ?string $destinationPostalCode = null, ?string $productAlias = null, array $additionalServiceAlias = []): array
    {
        $params=[];
        if ($originCountry !== null) {
            $params['originCountry'] = $originCountry;
        }
        if ($originPostalCode !== null) {
            $params['originPostalCode'] = $originPostalCode;
        }
        if ($destinationCountry !== null) {
            $params['destinationCountry'] = $destinationCountry;
        }
        if ($destinationPostalCode !== null) {
            $params['destinationPostalCode'] = $destinationPostalCode;
        }
        if ($productAlias !== null) {
            $params['productAlias'] = $productAlias;
        }
        if (!empty($additionalServiceAlias)) {
            $params['additionalServiceAlias'] = implode(',', $additionalServiceAlias);
        }

        $response = $this->get('/shipments/leadtime', $params);
        return $response->getData();
    }

    /**
     * S'abonner aux événements de suivi pour un colis
     *
     * @param string $parcelNumber
     * @param string $callbackUrl
     * @return Response
     */
    public function SusbcribeToParcel(string $parcelNumber, string $callbackUrl): Response
    {
        return $this->post('/status/events/subscribe', [
            'parcelNumber' => $parcelNumber,
            'callbackUrl' => $callbackUrl,
        ]);
    }

    /**
     * Se désabonner des événements de suivi pour un colis
     *
     * @param string $parcelNumber
     * @param string $callbackUrl
     * @return Response
     */
    public function UnsubscribeFromParcel(string $parcelNumber, string $callbackUrl): Response
    {
        return $this->post('/status/events/unsubscribe', [
            'parcelNumber' => $parcelNumber,
            'callbackUrl' => $callbackUrl,
        ]);
    }
}
