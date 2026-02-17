# SDK PHP DPD France

SDK PHP pour intégrer l’API DPD France : expéditions, étiquettes, suivi, enlèvements, services et utilitaires.

## Sommaire

- Présentation
- Installation
- Configuration
- Démarrage rapide
- Endpoints disponibles
- Architecture
- Tests
- Qualité de code
- Dépannage
- Contribution

## Présentation

### Prérequis

- PHP `>=8.0`
- Extensions PHP `curl`, `json`
- Composer
- Un compte DPD avec accès API

### Fonctionnalités principales

- Authentification et gestion des tokens
- Création/mise à jour/liste d’expéditions
- Génération d’étiquettes
- Suivi colis
- Carnet d’adresses
- Manifests
- Pickups (collectes)
- Lockers / points relais
- Services, pays, statistiques, factures

## Installation

### Via Composer

```bash
composer require votrecompany/dpd-france-sdk
```

### Développement local

```bash
git clone https://github.com/votrecompany/dpd-france-sdk.git
cd dpd-france-sdk
composer install
```

## Configuration

### Option A — Variables d’environnement (recommandé)

Créez un fichier `.env` :

```env
DPD_API_URL=https://api-sandbox.dpd.fr
DPD_USERNAME=votre_username
DPD_PASSWORD=votre_password
```

### Option B — Configuration directe

```php
<?php

require 'vendor/autoload.php';

use DPD\DPDClient;

$client = new DPDClient([
    'api_url' => 'https://api-sandbox.dpd.fr',
    'username' => 'votre_username',
    'password' => 'votre_password',
]);
```

### Options avancées

```php
$client = new DPDClient([
    'api_url' => 'https://api-sandbox.dpd.fr',
    'username' => 'xxx',
    'password' => 'xxx',
    'timeout' => 60,
    'connect_timeout' => 15,
]);
```

## Démarrage rapide

### 1) Créer un envoi

```php
use DPD\Models\AddressDTO;
use DPD\Models\ShipmentParcelDTO;
use DPD\Models\ShipmentServiceDTO;
use DPD\Models\Request\ShipmentCreationDTO;

$sender = (new AddressDTO())
    ->setName('Sender')
    ->setCity('Paris')
    ->setPostalCode('75001')
    ->setCountry('FR')
    ->setPhone('+33123456789')
    ->setEmail('sender@example.com');

$receiver = (new AddressDTO())
    ->setName('Receiver')
    ->setCity('Lyon')
    ->setPostalCode('69001')
    ->setCountry('FR')
    ->setPhone('+33987654321')
    ->setEmail('receiver@example.com');

$service = (new ShipmentServiceDTO())->setServiceAlias('DPD_CLASSIC');
$parcel = (new ShipmentParcelDTO())->setWeight(2.5)->setSize('M');

$request = (new ShipmentCreationDTO())
    ->setSenderAddress($sender)
    ->setReceiverAddress($receiver)
    ->setService($service)
    ->setParcels([$parcel]);

$shipment = $client->shipments()->create($request->toArray());
echo $shipment->getId();
```

### 2) Générer une étiquette

```php
$label = $client->labels()->create([
    'shipmentIds' => [$shipment->getId()],
    'downloadLabel' => true,
    'labelFormat' => 'application/pdf',
]);

$label->saveToFile('label.pdf');
```

### 3) Suivre un colis

```php
$tracking = $client->tracking()->getByParcelNumber('12345678901234');
echo $tracking->getStatus();
```

### 4) Rechercher des lockers

```php
$lockers = $client->lockers()->search([
    'countryCode' => 'FR',
    'postalCode' => '75001',
    'limit' => 10,
]);
```

## Endpoints disponibles

- `authentication`
- `shipments`
- `labels`
- `tracking`
- `addresses`
- `manifests`
- `pickup`
- `services`
- `countries`
- `lockers`
- `invoices`
- `statistics`
- `profile`
- `import`
- `mixedEndpoint`

## Architecture

```text
src/
├── DPDClient.php
├── Auth/
│   └── Authenticator.php
├── Config/
│   └── Config.php
├── Http/
│   ├── HttpClient.php
│   └── Response.php
├── Endpoints/
│   ├── AbstractEndpoint.php
│   └── ...
├── Models/
│   ├── AbstractModel.php
│   ├── Request/
│   ├── Response/
│   └── ...
└── Exceptions/
    ├── DPDException.php
    ├── AuthenticationException.php
    ├── ValidationException.php
    ├── NotFoundException.php
    └── RateLimitException.php
```

### Principes

- Typage strict (`declare(strict_types=1)`)
- DTOs pour les requêtes/réponses
- Endpoints découplés et testables
- Gestion centralisée des erreurs

## Tests

### Lancer les tests

```bash
# Tous les tests
composer test

# Unitaires (sans credentials)
vendor/bin/phpunit tests/Unit --testdox

# Intégration (avec credentials)
vendor/bin/phpunit tests/Integration --testdox

# Fonctionnels
vendor/bin/phpunit tests/Feature --testdox
```

### État actuel

- Les tests unitaires sont conçus pour fonctionner sans identifiants (mocks HTTP).
- Les tests d’intégration se `skip` automatiquement si `DPD_USERNAME`/`DPD_PASSWORD` ne sont pas définis.

### Variables utiles pour l’intégration

```env
DPD_API_URL=https://api-sandbox.dpd.fr
DPD_USERNAME=votre_username
DPD_PASSWORD=votre_password
```

## Qualité de code

```bash
# Analyse statique
composer phpstan

# Vérification style
composer cs-check

# Correction style
composer cs-fix
```

## Dépannage

### `phpunit` introuvable

```bash
composer install
```

### Erreurs d’authentification en intégration

- Vérifier `DPD_USERNAME`, `DPD_PASSWORD`
- Vérifier l’URL (`DPD_API_URL`) et l’environnement sandbox/production

### Timeouts API

- Augmenter `timeout` et `connect_timeout` dans la config client

## Contribution

Les contributions sont bienvenues : issues, PR, suggestions d’amélioration.

## Licence

MIT