<?php

declare(strict_types=1);

namespace DPD\Endpoints;

use DPD\Models\TrackingInfo;

/**
 * Suivi des colis
 */
class Tracking extends AbstractEndpoint
{
    /**
     * Suivre un colis par son numéro
     *
     * @param string $parcelNumber
     * @return TrackingInfo
     */
    public function getByParcelNumber(string $parcelNumber): TrackingInfo
    {
        $response = $this->get('/status/tracking', ['pknr' => $parcelNumber]);
        return new TrackingInfo($response->getData());
    }

    /**
     * Suivre plusieurs colis
     *
     * @param array<string> $parcelNumbers
     * @return array<int, TrackingInfo>
     */
    public function getMultiple(array $parcelNumbers): array
    {
        $trackingInfos = [];
        
        foreach ($parcelNumbers as $parcelNumber) {
            try {
                $trackingInfos[] = $this->getByParcelNumber($parcelNumber);
            } catch (\Exception $e) {
                // Continue même si un numéro échoue
                continue;
            }
        }

        return $trackingInfos;
    }

    /**
     * Suivre un colis par référence
     *
     * @param string $reference
     * @return array<int, TrackingInfo>
     */
    public function getByReference(string $reference): array
    {
        $response = $this->get('/status/tracking', ['reference' => $reference]);
        $data = $response->getData();

        $trackingInfos = [];
        if (is_array($data)) {
            foreach ($data as $trackingData) {
                $trackingInfos[] = new TrackingInfo($trackingData);
            }
        } else {
            $trackingInfos[] = new TrackingInfo($data);
        }

        return $trackingInfos;
    }

    /**
     * Suivre les colis avec des paramètres personnalisés
     *
     * @param array<string, mixed> $params
     * Examples de paramètres :
     *  pknr:string - numéro de colis
     * details:string -  0 default. 2 and greater for more details
     * show_all:string -0 or 1
     * lang:string - fr, en, de, etc.
     * typ:string -Search type. Option to search parcel by reference - '5', Possibility to receive csv file instead of json - '10'
     * var:string -If search type - '5' (by reference) this field is mandatory - customer ID number must be provided.
     * tel:string - phone number
     * @return array<int, TrackingInfo>
     */
    public function getTrackings(array $params = []): array
    {
        $response = $this->get('/status/tracking', $params);
        $data = $response->getData();

        $trackingInfos = [];
        if (is_array($data)) {
            foreach ($data as $trackingData) {
                $trackingInfos[] = new TrackingInfo($trackingData);
            }
        } else {
            $trackingInfos[] = new TrackingInfo($data);
        }

        return $trackingInfos;
    }
}
