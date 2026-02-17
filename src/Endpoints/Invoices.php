<?php

declare(strict_types=1);

namespace DPD\Endpoints;

/**
 * Gestion des factures
 */
class Invoices extends AbstractEndpoint
{
   
    /**
     * Obtenir une facture spécifique
     *
     * @param string $invoiceId uuid de la facture/colis
     * @return array<string, mixed>
     */
    public function getInvoice(string $invoiceId): array
    {
        $response = $this->get("/invoices/{$invoiceId}");
        return $response->getData();
    }

   
}
