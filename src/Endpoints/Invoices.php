<?php

declare(strict_types=1);

namespace DPD\Endpoints;

/**
 * Gestion des factures
 */
class Invoices extends AbstractEndpoint
{
    /**
     * Lister les factures
     *
     * @param array<string, mixed> $params
     * @return array<string, mixed>
     */
    public function list(array $params = []): array
    {
        $response = $this->get('/invoices', $params);
        return $response->getData();
    }

    /**
     * Obtenir une facture spécifique
     *
     * @param string $invoiceId
     * @return array<string, mixed>
     */
    public function getInvoice(string $invoiceId): array
    {
        $response = $this->get("/invoices/{$invoiceId}");
        return $response->getData();
    }

    /**
     * Télécharger une facture en PDF
     *
     * @param string $invoiceId
     * @return string Base64 encoded PDF
     */
    public function download(string $invoiceId): string
    {
        $response = $this->get("/invoices/{$invoiceId}/download");
        return $response->getData()['content'] ?? '';
    }
}
