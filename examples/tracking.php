<?php

/**
 * Exemple : Suivi de plusieurs colis
 */

require_once __DIR__ . '/../vendor/autoload.php';

use DPD\DPDClient;
use DPD\Exceptions\DPDException;

$client = new DPDClient([
    'username' => 'votre_username',
    'password' => 'votre_password',
]);

// Liste des numéros de colis à suivre
$parcelNumbers = [
    '12345678901234',
    '12345678901235',
    '12345678901236',
];

echo "=== SUIVI DE COLIS ===\n\n";

foreach ($parcelNumbers as $parcelNumber) {
    try {
        $tracking = $client->tracking()->getByParcelNumber($parcelNumber);
        
        echo "Colis: {$parcelNumber}\n";
        echo "Statut: {$tracking->getStatus()}\n";
        
        if ($tracking->isDelivered()) {
            echo "✓ LIVRÉ le {$tracking->getDeliveryDate()}\n";
        } else {
            echo "En cours de livraison\n";
            if ($tracking->getEstimatedDeliveryDate()) {
                echo "Livraison estimée: {$tracking->getEstimatedDeliveryDate()}\n";
            }
        }
        
        // Afficher les événements
        $events = $tracking->getEvents();
        echo "Événements récents:\n";
        foreach (array_slice($events, 0, 3) as $event) {
            echo "  - {$event['date']} : {$event['description']}\n";
        }
        
        echo "\n";
        
    } catch (DPDException $e) {
        echo "✗ Erreur pour {$parcelNumber}: {$e->getMessage()}\n\n";
    }
}
