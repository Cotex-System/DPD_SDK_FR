<?php

declare(strict_types=1);

namespace DPD\Endpoints;

use DPD\Models\Response\ServiceDTO;

/**
 * Gestion des services disponibles
 */
class Services extends AbstractEndpoint
{
    /**
     * Obtenir la liste des services disponibles
     *
     * @param array<string, mixed> $params Use ServiceSearchDTO properties:
     *                                      - senderGeography (required): address DTO with country
     *                                      - receiverGeography (required): address DTO with country
     *                                      - payerCode: int (required)
     *                                      - mainServiceAlias: string (optional)
     *                                      - packageSize: string (optional: xs, s, m, l, xl)
     *                                      - mainService: string (optional)
     *                                      - serviceType: string (optional)
     * @return array<int, ServiceDTO> Array of available services
     */
    public function list(array $params = []): array
    {
        $response = $this->get('/services', $params);
        $data = $response->getData();
        
        $services = [];
        if (is_array($data)) {
            foreach ($data as $serviceData) {
                $services[] = new ServiceDTO($serviceData);
            }
        }
        
        return $services;
    }

    /**
     * Obtenir un service spécifique
     *
     * @param array<string, mixed> $data Use ServiceSearchDTO (same parameters as list)
     * @return ServiceDTO Service information
     */
    public function getServicesData(array $data): ServiceDTO
    {
        $response = $this->get("/service/data",  $data);
        return new ServiceDTO($response->getData());
    }
}
