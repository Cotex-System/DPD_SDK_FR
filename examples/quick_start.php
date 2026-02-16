<?php

/**
 * Exemple basique : Créer un envoi et générer une étiquette
 */

require_once __DIR__ . '/../vendor/autoload.php';

use DPD\DPDClient;
use DPD\Models\Address;
use DPD\Models\Parcel;

// Initialiser le client
$client = new DPDClient([
    'username' => 'votre_username',
    'password' => 'votre_password',
    'environment' => 'production',
]);

// Créer l'adresse destinataire
$receiver = new Address();
$receiver->setName('Jean Dupont')
    ->setStreet('123 Rue de la Paix')
    ->setCity('Paris')
    ->setPostalCode('75001')
    ->setCountryCode('FR')
    ->setPhone('+33612345678')
    ->setEmail('jean.dupont@example.com');

// Créer le colis
$parcel = new Parcel();
$parcel->setWeight(2.5)
    ->setWidth(30)
    ->setHeight(20)
    ->setDepth(10)
    ->setReference('MON-COLIS-001');

// Créer l'envoi
$shipment = $client->shipments()->create([
    'receiver' => $receiver->toArray(),
    'parcels' => [$parcel->toArray()],
    'product' => 'DPD_CLASSIC',
    'reference' => 'COMMANDE-12345'
]);

echo "Envoi créé ! UUID: {$shipment->getUuid()}\n";

// Générer l'étiquette
$label = $client->labels()->create([
    'shipmentIds' => [$shipment->getUuid()],
    'format' => 'PDF'
]);

// Sauvegarder l'étiquette
$label->saveToFile('etiquette.pdf');

echo "Étiquette générée et sauvegardée dans 'etiquette.pdf'\n";
