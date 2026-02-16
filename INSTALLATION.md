# Guide d'installation et de démarrage

## 📦 Installation

### Prérequis

- PHP 8.0 ou supérieur
- Composer
- Extensions PHP requises : `curl`, `json`
- Compte DPD avec accès API

### Étape 1 : Installation via Composer

```bash
cd /chemin/vers/votre/projet
composer require votrecompany/dpd-france-sdk
```

Ou clonez ce dépôt si vous développez localement :

```bash
git clone https://github.com/votrecompany/dpd-france-sdk.git
cd dpd-france-sdk
composer install
```

### Étape 2 : Configuration

#### Option A : Fichier .env (recommandé)

1. Copiez le fichier d'exemple :
```bash
cp .env.example .env
```

2. Éditez `.env` avec vos identifiants :
```env
DPD_USERNAME=votre_username
DPD_PASSWORD=votre_password
DPD_ENVIRONMENT=production
```

3. Utilisez dans votre code :
```php
<?php
require 'vendor/autoload.php';

// Charger les variables d'environnement (avec vlucas/phpdotenv par exemple)
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$client = new DPD\DPDClient([
    'username' => $_ENV['DPD_USERNAME'],
    'password' => $_ENV['DPD_PASSWORD'],
    'environment' => $_ENV['DPD_ENVIRONMENT'],
]);
```

#### Option B : Configuration directe dans le code

```php
<?php
require 'vendor/autoload.php';

$client = new DPD\DPDClient([
    'username' => 'votre_username',
    'password' => 'votre_password',
    'environment' => 'production',
]);
```

### Étape 3 : Premier envoi

Créez un fichier `test.php` :

```php
<?php
require 'vendor/autoload.php';

use DPD\DPDClient;
use DPD\Models\Address;
use DPD\Models\Parcel;

// Initialiser le client
$client = new DPDClient([
    'username' => 'votre_username',
    'password' => 'votre_password',
    'environment' => 'production',
]);

// Créer une adresse
$receiver = new Address([
    'name' => 'Jean Dupont',
    'street' => '123 Rue de la Paix',
    'city' => 'Paris',
    'postalCode' => '75001',
    'countryCode' => 'FR',
    'phone' => '+33612345678',
    'email' => 'jean.dupont@example.com'
]);

// Créer un colis
$parcel = new Parcel([
    'weight' => 2.5,
    'width' => 30,
    'height' => 20,
    'depth' => 10
]);

// Créer l'envoi
try {
    $shipment = $client->shipments()->create([
        'receiver' => $receiver->toArray(),
        'parcels' => [$parcel->toArray()],
        'product' => 'DPD_CLASSIC',
        'reference' => 'TEST-001'
    ]);
    
    echo "✓ Envoi créé : {$shipment->getUuid()}\n";
    
} catch (Exception $e) {
    echo "✗ Erreur : {$e->getMessage()}\n";
}
```

Exécutez :
```bash
php test.php
```

## 🎯 Cas d'usage courants

### 1. Créer un envoi simple

```php
$shipment = $client->shipments()->create([
    'receiver' => $receiverAddress->toArray(),
    'parcels' => [$parcel->toArray()],
    'product' => 'DPD_CLASSIC',
    'reference' => 'CMD-12345'
]);
```

### 2. Générer une étiquette

```php
$label = $client->labels()->create([
    'shipmentIds' => [$shipment->getUuid()],
    'format' => 'PDF'
]);

$label->saveToFile('etiquette.pdf');
```

### 3. Suivre un colis

```php
$tracking = $client->tracking()->getByParcelNumber('12345678901234');
echo "Statut : {$tracking->getStatus()}\n";
```

### 4. Rechercher des points relais

```php
$lockers = $client->lockers()->searchByPostalCode('75001', 'FR', 10);

foreach ($lockers as $locker) {
    echo "{$locker->getName()} - {$locker->getCity()}\n";
}
```

### 5. Gérer le carnet d'adresses

```php
// Créer une adresse
$address = $client->addresses()->create([
    'name' => 'Magasin Paris',
    'street' => '15 Rue du Commerce',
    'city' => 'Paris',
    'postalCode' => '75015',
    'countryCode' => 'FR',
    'type' => 'receiver'
]);

// Lister les adresses
$addresses = $client->addresses()->list(['type' => 'receiver']);
```

## 🔧 Configuration avancée

### Logging avec Monolog

```bash
composer require monolog/monolog
```

```php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('dpd');
$logger->pushHandler(new StreamHandler(__DIR__ . '/dpd.log', Logger::DEBUG));

$client = new DPDClient([
    'username' => 'xxx',
    'password' => 'xxx',
    'logger' => $logger
]);
```

### Timeouts personnalisés

```php
$client = new DPDClient([
    'username' => 'xxx',
    'password' => 'xxx',
    'timeout' => 60,           // 60 secondes
    'connect_timeout' => 15,   // 15 secondes
]);
```

### URL personnalisée

```php
$client = new DPDClient([
    'username' => 'xxx',
    'password' => 'xxx',
    'base_url' => 'https://custom-dpd-api.com/api/v1',
]);
```

## 🧪 Tests

Pour exécuter les tests (une fois créés) :

```bash
# Tests unitaires
composer test

# Analyse statique
composer phpstan

# Vérification du code
composer cs-check
```

## 🐛 Débogage

### Activer les logs de debug

```php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('dpd');
$logger->pushHandler(new StreamHandler('php://stdout', Logger::DEBUG));

$client = new DPDClient([
    'username' => 'xxx',
    'password' => 'xxx',
    'logger' => $logger
]);
```

### Gestion des erreurs

```php
use DPD\Exceptions\DPDException;
use DPD\Exceptions\ValidationException;
use DPD\Exceptions\AuthenticationException;

try {
    $shipment = $client->shipments()->create($data);
} catch (ValidationException $e) {
    // Erreur de validation
    echo "Erreurs de validation :\n";
    print_r($e->getErrors());
} catch (AuthenticationException $e) {
    // Erreur d'authentification
    echo "Échec de l'authentification : {$e->getMessage()}\n";
} catch (DPDException $e) {
    // Autre erreur DPD
    echo "Erreur DPD : {$e->getMessage()}\n";
    echo "Code : {$e->getCode()}\n";
}
```

## 📚 Ressources

- [Documentation complète](README.md)
- [Architecture du SDK](ARCHITECTURE.md)
- [Exemples d'utilisation](examples/)
- [Documentation API DPD](https://dpd.com/api)

## 🆘 Support

En cas de problème :

1. Vérifiez vos identifiants DPD
2. Consultez les logs (`dpd.log`)
3. Vérifiez la [documentation API DPD](https://dpd.com/api)
4. Ouvrez une issue sur GitHub

## ⚠️ Notes importantes

- **Production vs Sandbox** : Utilisez `environment => 'sandbox'` pour vos tests
- **Sécurité** : Ne commitez jamais vos identifiants (utilisez `.env` et `.gitignore`)
- **Rate Limiting** : Respectez les limites de l'API DPD
- **SSL** : Gardez `verify_ssl => true` en production

## 🚀 Déploiement

### Sur votre serveur

1. Uploadez le projet via FTP/Git
2. Installez les dépendances :
   ```bash
   composer install --no-dev --optimize-autoloader
   ```
3. Configurez `.env` avec les credentials de production
4. Assurez-vous que les permissions sont correctes

### Avec Docker (exemple)

```dockerfile
FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

RUN composer install --no-dev --optimize-autoloader

EXPOSE 80
```

## ✅ Checklist de mise en production

- [ ] Identifiants de production configurés
- [ ] `verify_ssl => true`
- [ ] Logging configuré
- [ ] Gestion des erreurs en place
- [ ] Tests effectués
- [ ] `.env` ajouté à `.gitignore`
- [ ] Documentation mise à jour
