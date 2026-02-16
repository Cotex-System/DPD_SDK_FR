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
        $response = $this->get('/status/tracking', ['parcelNumber' => $parcelNumber]);
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
}
