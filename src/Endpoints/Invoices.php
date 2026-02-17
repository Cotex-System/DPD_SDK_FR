<?php

declare(strict_types=1);

namespace DPD\Endpoints;

use DPD\Models\Response\InvoiceResponseDTO;

/**
 * Gestion des factures
 */
class Invoices extends AbstractEndpoint
{
   
    /**
     * Obtenir une facture spécifique
     *
     * @param string $invoiceId uuid de la facture/colis
     * @return InvoiceResponseDTO
     */
    public function getInvoice(string $invoiceId): InvoiceResponseDTO
    {
        $response = $this->get("/invoices/{$invoiceId}");
        return new InvoiceResponseDTO($response->getData());
    }

   
}
