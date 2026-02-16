# SDK PHP pour l'API DPD France

SDK PHP moderne et complet pour interagir avec l'API DPD France. Permet de gérer facilement vos envois, étiquettes, suivis et toutes les fonctionnalités de l'API DPD.

## 📋 Prérequis

- PHP 8.0 ou supérieur
- Extension cURL activée
- Extension JSON activée
- Compte DPD avec accès API

## 🚀 Installation

Via Composer :

```bash
composer require votrecompany/dpd-france-sdk
```

## 🔧 Configuration

### Initialisation du client

```php
<?php

require 'vendor/autoload.php';

use DPD\DPDClient;

$client = new DPDClient([
    'username' => 'votre_username',
    'password' => 'votre_password',
    'environment' => 'production', // ou 'sandbox'
]);
```

### Variables d'environnement (recommandé)

Créez un fichier `.env` :

```env
DPD_USERNAME=votre_username
DPD_PASSWORD=votre_password
DPD_ENVIRONMENT=production
```

## 📦 Utilisation

### Créer un envoi

```php
use DPD\Models\Shipment;
use DPD\Models\Address;
use DPD\Models\Parcel;

// Créer l'adresse destinataire
$receiver = new Address([
    'name' => 'Jean Dupont',
    'street' => '123 Rue de la Paix',
    'city' => 'Paris',
    'postalCode' => '75001',
    'countryCode' => 'FR',
    'phone' => '+33612345678',
    'email' => 'jean.dupont@example.com'
]);

// Créer le colis
$parcel = new Parcel([
    'weight' => 2.5, // en kg
    'width' => 30,   // en cm
    'height' => 20,  // en cm
    'depth' => 10    // en cm
]);

// Créer l'envoi
$shipment = $client->shipments()->create([
    'receiver' => $receiver,
    'parcels' => [$parcel],
    'product' => 'DPD_CLASSIC',
    'reference' => 'CMD-12345'
]);

echo "Envoi créé avec succès ! UUID: " . $shipment->uuid;
```

### Générer une étiquette

```php
// Générer l'étiquette pour un envoi
$label = $client->labels()->create([
    'shipmentIds' => [$shipment->uuid],
    'format' => 'PDF', // PDF, ZPL, etc.
    'startPosition' => 'UPPER_LEFT'
]);

// Télécharger le PDF de l'étiquette
file_put_contents('etiquette.pdf', base64_decode($label->content));
```

### Suivre un colis

```php
// Suivi par numéro de colis
$tracking = $client->tracking()->getByParcelNumber('12345678901234');

echo "Statut: " . $tracking->status . "\n";
echo "Dernier événement: " . $tracking->lastEvent->description . "\n";
```

### Gérer le carnet d'adresses

```php
// Lister les adresses
$addresses = $client->addresses()->list(['type' => 'receiver']);

// Créer une nouvelle adresse
$newAddress = $client->addresses()->create([
    'name' => 'Restaurant La Belle Époque',
    'street' => '45 Avenue des Champs-Élysées',
    'city' => 'Paris',
    'postalCode' => '75008',
    'countryCode' => 'FR',
    'type' => 'receiver'
]);
```

### Créer un manifeste

```php
// Créer un manifeste pour plusieurs envois
$manifest = $client->manifests()->create([
    'shipmentIds' => [$shipment1->uuid, $shipment2->uuid],
    'format' => 'PDF'
]);

// Télécharger le manifeste
file_put_contents('manifest.pdf', base64_decode($manifest->content));
```

### Gérer les points relais (Lockers)

```php
// Rechercher des Pickup points autour d'une adresse
$lockers = $client->lockers()->search([
    'countryCode' => 'FR',
    'postalCode' => '75001',
    'limit' => 10
]);

foreach ($lockers as $locker) {
    echo $locker->name . " - " . $locker->address . "\n";
}
```

## 📚 Fonctionnalités principales

### Endpoints disponibles

- ✅ **Authentication** - Gestion des tokens et authentification
- ✅ **Shipments** - Création, modification, suppression d'envois
- ✅ **Labels** - Génération d'étiquettes (PDF, ZPL)
- ✅ **Tracking** - Suivi des colis en temps réel
- ✅ **Addresses** - Gestion du carnet d'adresses
- ✅ **Manifests** - Création de bordereaux de remise
- ✅ **Lockers** - Recherche de points relais
- ✅ **Pickup** - Planification de collectes
- ✅ **Services** - Consultation des services disponibles
- ✅ **Countries & Cities** - Informations géographiques
- ✅ **Invoices** - Gestion des factures
- ✅ **Statistics** - Statistiques d'envois

### Gestion des erreurs

```php
use DPD\Exceptions\DPDException;
use DPD\Exceptions\AuthenticationException;
use DPD\Exceptions\ValidationException;

try {
    $shipment = $client->shipments()->create($data);
} catch (ValidationException $e) {
    echo "Erreur de validation: " . $e->getMessage();
    print_r($e->getErrors());
} catch (AuthenticationException $e) {
    echo "Erreur d'authentification: " . $e->getMessage();
} catch (DPDException $e) {
    echo "Erreur DPD: " . $e->getMessage();
}
```

### Logging

```php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('dpd');
$logger->pushHandler(new StreamHandler('dpd.log', Logger::DEBUG));

$client = new DPDClient([
    'username' => 'votre_username',
    'password' => 'votre_password',
    'logger' => $logger
]);
```

## 🏗️ Architecture du SDK

```
src/
├── DPDClient.php              # Client principal
├── Config/
│   └── Config.php             # Configuration du SDK
├── Auth/
│   └── Authenticator.php      # Gestion de l'authentification
├── Http/
│   ├── HttpClient.php         # Client HTTP (Guzzle)
│   └── Response.php           # Wrapper de réponse
├── Endpoints/
│   ├── AbstractEndpoint.php   # Classe de base pour les endpoints
│   ├── Shipments.php          # Gestion des envois
│   ├── Labels.php             # Gestion des étiquettes
│   ├── Tracking.php           # Suivi de colis
│   ├── Addresses.php          # Carnet d'adresses
│   ├── Manifests.php          # Bordereaux
│   ├── Lockers.php            # Points relais
│   ├── Pickup.php             # Collectes
│   ├── Services.php           # Services
│   ├── Countries.php          # Pays
│   ├── Invoices.php           # Factures
│   └── Statistics.php         # Statistiques
├── Models/
│   ├── Shipment.php
│   ├── Address.php
│   ├── Parcel.php
│   ├── Label.php
│   ├── Tracking.php
│   ├── Manifest.php
│   ├── Locker.php
│   └── ...
└── Exceptions/
    ├── DPDException.php
    ├── AuthenticationException.php
    ├── ValidationException.php
    ├── NotFoundException.php
    └── RateLimitException.php
```

## 🧪 Tests

```bash
# Exécuter les tests
composer test

# Analyse statique
composer phpstan

# Vérification du style de code
composer cs-check
```

## 📖 Documentation de l'API

Pour plus de détails sur l'API DPD, consultez la [documentation officielle](https://dpd.com/api).

## 🤝 Contribution

Les contributions sont les bienvenues ! N'hésitez pas à ouvrir une issue ou une pull request.

## 📄 Licence

MIT

## 🔗 Liens utiles

- [Documentation API DPD](https://dpd.com/api)
- [Support DPD](https://www.dpd.fr/contact)

## ⚠️ Support

Pour toute question ou problème :
- Ouvrez une [issue sur GitHub](https://github.com/votrecompany/dpd-france-sdk/issues)
- Consultez la documentation
