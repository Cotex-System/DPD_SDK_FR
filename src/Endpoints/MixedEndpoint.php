<?php

declare(strict_types=1);

namespace DPD\Endpoints;

class MixedEndpoint extends AbstractEndpoint
{
    /**
     * Créer une URL d'affiliation
     *
     * @param array<string, mixed> $params
     * @return string
     */
    public function createAffiliateUrl(array $params=[]): string
    {
        $response = $this->post('/affiliate/url', $params);

        return $response->getData()['affiliateUrl'] ?? '';
    }

    /**
     * Obtenir les feedbacks des clients
     *
     * @param array<string, mixed> $params
     * example value:
     * "rating": integer (0-5)
     * "description":string
     * "email": string
     * "file": string Base 64 encoded file
     * @return array<string, mixed>
     */
    public function getFeedback(array $params = []): array
    {
        $response = $this->get('/feedback', $params);
        return $response->getData();
    }

    /**
     * Obtenir les payeurs associés au compte
     *
     * @return array<string, mixed>
     */
    public function getPayers(): array
    {
        $response = $this->get('customers/payers');
        return $response->getData();
    }

    /**
     * Obtenir les traductions disponibles
     *
     * @return array<string, mixed>
     */
    public function getTranslations(): array
    {
        $response = $this->get('/translations');
        return $response->getData();
    }

    /**
     * Obtenir les problèmes liés aux envois
     *
     * @param string $problemType Type de problème (ex: "delivery", "pickup", "shipment")
     * @return array<string, mixed>
     */
    public function getProblems(string $problemType): array
    {
        $response = $this->get('/problems', ['problemType' => $problemType]);
        return $response->getData();
    }
}
