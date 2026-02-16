# Architecture du SDK PHP pour l'API DPD France

## 📁 Structure des dossiers

```
DPDApi/
├── src/                          # Code source du SDK
│   ├── DPDClient.php            # Client principal
│   ├── Auth/                     # Authentification
│   │   └── Authenticator.php
│   ├── Config/                   # Configuration
│   │   └── Config.php
│   ├── Endpoints/                # Endpoints de l'API
│   │   ├── AbstractEndpoint.php
│   │   ├── Addresses.php
│   │   ├── Countries.php
│   │   ├── Invoices.php
│   │   ├── Labels.php
│   │   ├── Lockers.php
│   │   ├── Manifests.php
│   │   ├── Pickup.php
│   │   ├── Profile.php
│   │   ├── Services.php
│   │   ├── Shipments.php
│   │   ├── Statistics.php
│   │   └── Tracking.php
│   ├── Exceptions/               # Gestion des erreurs
│   │   ├── AuthenticationException.php
│   │   ├── DPDException.php
│   │   ├── NotFoundException.php
│   │   ├── RateLimitException.php
│   │   └── ValidationException.php
│   ├── Http/                     # Client HTTP
│   │   ├── HttpClient.php
│   │   └── Response.php
│   └── Models/                   # Modèles de données (DTO)
│       ├── AbstractModel.php
│       ├── Address.php
│       ├── Label.php
│       ├── Locker.php
│       ├── Manifest.php
│       ├── Parcel.php
│       ├── Shipment.php
│       └── TrackingInfo.php
├── examples/                     # Exemples d'utilisation
│   ├── basic_usage.php
│   ├── pickup_points.php
│   ├── quick_start.php
│   └── tracking.php
├── tests/                        # Tests unitaires (à créer)
├── composer.json                 # Dépendances Composer
├── README.md                     # Documentation principale
└── .gitignore

```

## 🏗️ Description des composants

### 1. **DPDClient** - Point d'entrée principal
Le client principal qui orchestre toutes les interactions avec l'API.

```php
$client = new DPDClient([
    'username' => 'xxx',
    'password' => 'xxx',
    'environment' => 'production'
]);
```

### 2. **Auth/Authenticator** - Gestion de l'authentification
- Authentification Basic pour obtenir le token initial
- Gestion automatique du renouvellement des tokens
- Bearer token pour les requêtes suivantes

### 3. **Config/Config** - Configuration centralisée
- Gestion des environnements (production/sandbox)
- URLs de base configurables
- Timeouts et options HTTP

### 4. **Http/** - Couche HTTP
- **HttpClient** : Wrapper autour de Guzzle
- **Response** : Gestion unifiée des réponses
- Injection automatique du Bearer token
- Gestion des erreurs HTTP

### 5. **Endpoints/** - Points d'accès à l'API

Chaque endpoint hérite de `AbstractEndpoint` et fournit des méthodes spécifiques :

- **Shipments** : Création, modification, suppression d'envois
- **Labels** : Génération d'étiquettes PDF/ZPL
- **Tracking** : Suivi de colis en temps réel
- **Addresses** : Carnet d'adresses
- **Manifests** : Bordereaux de remise
- **Lockers** : Recherche de points relais
- **Pickup** : Planification de collectes
- **Services** : Services disponibles
- **Countries** : Informations géographiques
- **Invoices** : Gestion des factures
- **Statistics** : Statistiques d'envois
- **Profile** : Profil utilisateur

### 6. **Exceptions/** - Gestion des erreurs

Hiérarchie d'exceptions pour une gestion fine des erreurs :

```
DPDException (base)
├── AuthenticationException (401, 403)
├── NotFoundException (404)
├── ValidationException (422)
└── RateLimitException (429)
```

### 7. **Models/** - Objets métier

Modèles typés pour représenter les données de l'API :

- **Address** : Adresse complète avec getters/setters
- **Parcel** : Informations de colis (poids, dimensions)
- **Shipment** : Envoi complet
- **Label** : Étiquette avec méthode `saveToFile()`
- **TrackingInfo** : Informations de suivi
- **Manifest** : Bordereau de remise
- **Locker** : Point relais avec coordonnées GPS

Tous héritent de `AbstractModel` qui fournit :
- Accès magique aux propriétés
- Conversion en array/JSON
- Méthodes get/set génériques

## 🔄 Flux de fonctionnement

### Exemple : Création d'un envoi

```
1. Client initialise DPDClient
2. Appel à shipments()->create()
3. Shipments vérifie l'authentification
4. Authenticator obtient/renouvelle le token si nécessaire
5. HttpClient effectue la requête POST avec Bearer token
6. Response parse la réponse JSON
7. Shipment model est créé à partir des données
8. Retour au client
```

### Gestion automatique de l'authentification

```
AbstractEndpoint::ensureAuthenticated()
    ↓
Authenticator::isTokenValid() ?
    ↓ NON
Authenticator::authenticate()
    ↓
HttpClient::authenticateBasic()
    ↓
Config::setApiToken()
```

## 🎯 Principes de conception

1. **Single Responsibility** : Chaque classe a une responsabilité unique
2. **Lazy Loading** : Les endpoints ne sont instanciés qu'à la demande
3. **Fluent Interface** : Les modèles permettent le chaînage de méthodes
4. **Type Safety** : Utilisation de PHP 8+ avec typage strict
5. **PSR Compliance** : Respect des standards PSR-4, PSR-12
6. **Extensibilité** : Architecture facilement extensible

## 📊 Diagramme de classes (simplifié)

```
DPDClient
├── Config
├── HttpClient
│   └── Response
├── Authenticator
└── Endpoints
    ├── Shipments → Shipment Model
    ├── Labels → Label Model
    ├── Tracking → TrackingInfo Model
    └── ...
```

## 🔐 Sécurité

- Credentials jamais loggués
- Support SSL/TLS configurable
- Tokens stockés en mémoire uniquement
- Gestion du renouvellement automatique

## 🚀 Prochaines étapes

1. **Tests unitaires** : PHPUnit pour chaque composant
2. **CI/CD** : GitHub Actions pour tests automatiques
3. **Documentation API** : PHPDoc complet
4. **Cache** : Mise en cache des tokens et réponses
5. **Webhooks** : Support des notifications DPD
6. **Rate Limiting** : Gestion intelligente des limites
7. **Retry Logic** : Réessais automatiques en cas d'échec
8. **Logging** : PSR-3 Logger intégré

## 📖 Utilisation avec Composer

```bash
# Installation
composer require votrecompany/dpd-france-sdk

# Mise à jour
composer update votrecompany/dpd-france-sdk
```

## 🤝 Contribution

L'architecture est conçue pour faciliter les contributions :

1. Chaque endpoint est indépendant
2. Ajout de nouveaux modèles simplifié
3. Tests isolés par composant
4. Documentation inline (PHPDoc)
