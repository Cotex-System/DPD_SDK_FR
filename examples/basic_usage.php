<?php

/**
 * Exemple d'utilisation du SDK DPD France
 * 
 * Ce fichier montre comment utiliser toutes les fonctionnalités principales du SDK
 */

require_once __DIR__ . '/../vendor/autoload.php';

use DPD\DPDClient;
use DPD\Models\Address;
use DPD\Models\Parcel;
use DPD\Exceptions\DPDException;
use DPD\Exceptions\ValidationException;

// =====================================================
// 1. INITIALISATION DU CLIENT
// =====================================================

$client = new DPDClient([
    'username' => 'votre_username',
    'password' => 'votre_password',
    'environment' => 'production', // ou 'sandbox'
]);

// L'authentification est automatique lors de la première requête
// Mais vous pouvez aussi l'appeler manuellement :
try {
    $client->authenticate();
    echo "✓ Authentification réussie\n\n";
} catch (DPDException $e) {
    die("✗ Erreur d'authentification : " . $e->getMessage() . "\n");
}


// =====================================================
// 2. CRÉER UN ENVOI
// =====================================================

echo "=== CRÉATION D'UN ENVOI ===\n";

try {
    // Adresse destinataire
    $receiver = new Address([
        'name' => 'Restaurant Le Gourmet',
        'contactName' => 'Marie Dubois',
        'street' => '15 Rue de la Gastronomie',
        'city' => 'Paris',
        'postalCode' => '75001',
        'countryCode' => 'FR',
        'phone' => '+33612345678',
        'email' => 'contact@legourmet.fr'
    ]);

    // Créer le colis
    $parcel = new Parcel([
        'weight' => 2.5,  // kg
        'width' => 30,    // cm
        'height' => 20,   // cm
        'depth' => 10,    // cm
        'reference' => 'COLIS-001',
        'content' => 'Vaisselle professionnelle'
    ]);

    // Créer l'envoi
    $shipment = $client->shipments()->create([
        'receiver' => $receiver->toArray(),
        'parcels' => [$parcel->toArray()],
        'product' => 'DPD_CLASSIC',
        'reference' => 'CMD-2024-001',
    ]);

    echo "✓ Envoi créé avec succès !\n";
    echo "  UUID: {$shipment->getUuid()}\n";
    echo "  Numéro: {$shipment->getShipmentNumber()}\n";
    echo "  Référence: {$shipment->getReference()}\n\n";

} catch (ValidationException $e) {
    echo "✗ Erreur de validation :\n";
    print_r($e->getErrors());
} catch (DPDException $e) {
    echo "✗ Erreur : " . $e->getMessage() . "\n";
}


// =====================================================
// 3. GÉNÉRER UNE ÉTIQUETTE
// =====================================================

echo "=== GÉNÉRATION D'ÉTIQUETTE ===\n";

try {
    // Générer l'étiquette
    $label = $client->labels()->create([
        'shipmentIds' => [$shipment->getUuid()],
        'format' => 'PDF',
        'startPosition' => 'UPPER_LEFT'
    ]);

    // Sauvegarder le PDF
    $labelPath = __DIR__ . '/etiquette_' . $shipment->getShipmentNumber() . '.pdf';
    if ($label->saveToFile($labelPath)) {
        echo "✓ Étiquette générée et sauvegardée : {$labelPath}\n\n";
    }

} catch (DPDException $e) {
    echo "✗ Erreur génération étiquette : " . $e->getMessage() . "\n\n";
}


// =====================================================
// 4. SUIVI DE COLIS
// =====================================================

echo "=== SUIVI DE COLIS ===\n";

try {
    // Obtenir les parcels de l'envoi
    $parcels = $shipment->getParcels();
    
    if (!empty($parcels)) {
        $parcelNumber = $parcels[0]->getParcelNumber();
        
        if ($parcelNumber) {
            $tracking = $client->tracking()->getByParcelNumber($parcelNumber);
            
            echo "✓ Informations de suivi :\n";
            echo "  Numéro: {$tracking->getParcelNumber()}\n";
            echo "  Statut: {$tracking->getStatus()}\n";
            
            $lastEvent = $tracking->getLastEvent();
            if ($lastEvent) {
                echo "  Dernier événement: {$lastEvent['description']}\n";
            }
            
            if ($tracking->isDelivered()) {
                echo "  ✓ Colis livré le : {$tracking->getDeliveryDate()}\n";
            } elseif ($tracking->getEstimatedDeliveryDate()) {
                echo "  Livraison estimée : {$tracking->getEstimatedDeliveryDate()}\n";
            }
            echo "\n";
        }
    }

} catch (DPDException $e) {
    echo "✗ Erreur suivi : " . $e->getMessage() . "\n\n";
}


// =====================================================
// 5. RECHERCHER DES POINTS RELAIS
// =====================================================

echo "=== RECHERCHE DE POINTS RELAIS ===\n";

try {
    $lockers = $client->lockers()->searchByPostalCode('75001', 'FR', 5);
    
    echo "✓ Points relais trouvés : " . count($lockers) . "\n";
    
    foreach ($lockers as $index => $locker) {
        echo "\n  " . ($index + 1) . ". {$locker->getName()}\n";
        echo "     Adresse: {$locker->getAddress()}\n";
        echo "     Ville: {$locker->getCity()} ({$locker->getPostalCode()})\n";
        
        if ($locker->getDistance()) {
            echo "     Distance: " . round($locker->getDistance(), 2) . " km\n";
        }
    }
    echo "\n";

} catch (DPDException $e) {
    echo "✗ Erreur recherche lockers : " . $e->getMessage() . "\n\n";
}


// =====================================================
// 6. GESTION DU CARNET D'ADRESSES
// =====================================================

echo "=== CARNET D'ADRESSES ===\n";

try {
    // Créer une adresse
    $newAddress = $client->addresses()->create([
        'name' => 'Magasin Centre Ville',
        'street' => '25 Boulevard Haussmann',
        'city' => 'Paris',
        'postalCode' => '75009',
        'countryCode' => 'FR',
        'type' => 'receiver',
        'phone' => '+33612345678',
    ]);
    
    echo "✓ Adresse créée avec l'ID : {$newAddress->getId()}\n";
    
    // Lister les adresses de type 'receiver'
    $addresses = $client->addresses()->list(['type' => 'receiver']);
    echo "✓ Nombre d'adresses destinataires : " . count($addresses) . "\n\n";

} catch (DPDException $e) {
    echo "✗ Erreur adresses : " . $e->getMessage() . "\n\n";
}


// =====================================================
// 7. CRÉER UN MANIFESTE
// =====================================================

echo "=== CRÉATION DE MANIFESTE ===\n";

try {
    $manifest = $client->manifests()->create([
        'shipmentIds' => [$shipment->getUuid()],
        'format' => 'PDF'
    ]);
    
    echo "✓ Manifeste créé avec l'UUID : {$manifest->getUuid()}\n";
    
    // Sauvegarder le manifeste
    $manifestPath = __DIR__ . '/manifest_' . date('Y-m-d') . '.pdf';
    if ($manifest->saveToFile($manifestPath)) {
        echo "✓ Manifeste sauvegardé : {$manifestPath}\n\n";
    }

} catch (DPDException $e) {
    echo "✗ Erreur manifeste : " . $e->getMessage() . "\n\n";
}


// =====================================================
// 8. LISTER LES ENVOIS
// =====================================================

echo "=== LISTE DES ENVOIS ===\n";

try {
    $shipments = $client->shipments()->list([
        'page' => 1,
        'limit' => 10
    ]);
    
    echo "✓ Envois trouvés : " . count($shipments) . "\n";
    
    foreach ($shipments as $s) {
        echo "  - {$s->getReference()} (UUID: {$s->getUuid()})\n";
    }
    echo "\n";

} catch (DPDException $e) {
    echo "✗ Erreur liste envois : " . $e->getMessage() . "\n\n";
}


// =====================================================
// 9. STATISTIQUES
// =====================================================

echo "=== STATISTIQUES ===\n";

try {
    $stats = $client->statistics()->getStatsByPeriod(
        date('Y-m-d', strtotime('-30 days')),
        date('Y-m-d')
    );
    
    echo "✓ Statistiques des 30 derniers jours :\n";
    print_r($stats);
    echo "\n";

} catch (DPDException $e) {
    echo "✗ Erreur statistiques : " . $e->getMessage() . "\n\n";
}


// =====================================================
// 10. PLANIFIER UNE COLLECTE
// =====================================================

echo "=== PLANIFICATION DE COLLECTE ===\n";

try {
    // Obtenir les créneaux disponibles
    $timeframes = $client->pickup()->getTimeframes([
        'postalCode' => '75001',
        'date' => date('Y-m-d', strtotime('+2 days'))
    ]);
    
    echo "✓ Créneaux de collecte disponibles :\n";
    print_r($timeframes);
    echo "\n";

} catch (DPDException $e) {
    echo "✗ Erreur collecte : " . $e->getMessage() . "\n\n";
}


echo "=== FIN DES EXEMPLES ===\n";
