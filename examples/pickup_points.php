<?php

/**
 * Exemple : Recherche de points relais et création d'envoi vers un point relais
 */

require_once __DIR__ . '/../vendor/autoload.php';

use DPD\DPDClient;
use DPD\Models\Address;
use DPD\Models\Parcel;

$client = new DPDClient([
    'username' => 'votre_username',
    'password' => 'votre_password',
]);

// Rechercher des points relais autour d'un code postal
$postalCode = '75001';
$lockers = $client->lockers()->searchByPostalCode($postalCode, 'FR', 5);

echo "=== POINTS RELAIS DISPONIBLES À {$postalCode} ===\n\n";

foreach ($lockers as $index => $locker) {
    echo ($index + 1) . ". {$locker->getName()}\n";
    echo "   {$locker->getAddress()}\n";
    echo "   {$locker->getPostalCode()} {$locker->getCity()}\n";
    
    if ($locker->getDistance()) {
        echo "   Distance: " . round($locker->getDistance(), 2) . " km\n";
    }
    
    echo "   ID: {$locker->getId()}\n";
    echo "\n";
}

// Créer un envoi vers le premier point relais trouvé
if (!empty($lockers)) {
    $selectedLocker = $lockers[0];
    
    echo "=== CRÉATION D'ENVOI VERS POINT RELAIS ===\n";
    echo "Point relais sélectionné: {$selectedLocker->getName()}\n\n";
    
    // Adresse destinataire (client final)
    $receiver = new Address([
        'name' => 'Marie Martin',
        'phone' => '+33612345678',
        'email' => 'marie.martin@example.com',
        // Pour un point relais, on utilise l'adresse du locker
        'street' => $selectedLocker->getStreet(),
        'city' => $selectedLocker->getCity(),
        'postalCode' => $selectedLocker->getPostalCode(),
        'countryCode' => 'FR',
    ]);
    
    $parcel = new Parcel([
        'weight' => 1.5,
        'width' => 25,
        'height' => 15,
        'depth' => 8,
    ]);
    
    $shipment = $client->shipments()->create([
        'receiver' => $receiver->toArray(),
        'parcels' => [$parcel->toArray()],
        'product' => 'DPD_PICKUP', // Produit point relais
        'reference' => 'CMD-PICKUP-001',
        'services' => [
            'pickup' => [
                'lockerId' => $selectedLocker->getId(),
            ]
        ]
    ]);
    
    echo "✓ Envoi créé vers le point relais !\n";
    echo "  UUID: {$shipment->getUuid()}\n";
    echo "  Numéro: {$shipment->getShipmentNumber()}\n";
}
