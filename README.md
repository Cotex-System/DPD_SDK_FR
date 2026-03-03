# DPD France SDK (PHP)

SDK PHP pour les webservices SOAP DPD France avec DTOs typés pour EPrint (expédition/étiquettes) et Trace (suivi).

## Fonctionnalités

- Client unique: `DPD\DPDClient`
- Endpoints typés:
  - `eprint()` via `DPD\Endpoints\EPrintEndpoint`
  - `trace()` via `DPD\Endpoints\TraceEndpoint`
- Configuration centralisée via `DPD\Config\Config`
- Appels SOAP encapsulés via `DPD\Http\SoapGateway`
- Requêtes/réponses typées avec DTOs (`src/Models/Request`, `src/Models/Response`)
- Jeux de tests unitaires, d’intégration et live

## Prérequis

- PHP >= 8.0
- Extensions PHP: `soap`, `json`, `curl`

## Installation

```bash
composer install
```

## Configuration

Le SDK lit la configuration depuis:

1) le tableau passé à `new Config([...])` (prioritaire)
2) les variables d’environnement
3) les valeurs par défaut testenv

Variables principales:

- `DPD_ENV` (`test` ou `prod`)
- `DPD_TEST_USERID` / `DPD_TEST_PASSWORD`
- `DPD_PROD_USERID` / `DPD_PROD_PASSWORD`
- `DPD_TEST_EPRINT_WSDL` / `DPD_TEST_TRACE_WSDL`
- `DPD_TEST_EPRINT_LOCATION` / `DPD_TEST_TRACE_LOCATION`

Un template complet est disponible dans `.env.example`.

## Démarrage rapide

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use DPD\Config\Config;
use DPD\DPDClient;

$client = new DPDClient(new Config());

// Ping EPrint
$alive = $client->eprint()->isAlive();

// Ping Trace
$traceAlive = $client->trace()->isAlive();
```

## Exemples disponibles

- `php examples/trace_dto_usage.php <shipmentNumber> [countryCode] [centerNumber] [customerNumber]`
- `php examples/eprint_live_complete.php`
- `php examples/trace_live_complete.php [shipmentNumber] [parcel] [reference]`

Les scripts `*_live_complete.php` reprennent des flows proches des tests live (création, lecture, labels, trace).

## Tests

Lancer tous les tests:

```bash
composer test
```

Lancer uniquement EPrint live:

```bash
./vendor/bin/phpunit --filter EPrintEndpointLiveTest
```

Lancer uniquement Trace live:

```bash
./vendor/bin/phpunit --filter TraceEndpointLiveTest
```

Afficher les tests skipés:

```bash
./vendor/bin/phpunit --filter EPrintEndpointLiveTest --log-junit build/junit-eprint-live.xml
```

## Documentation SOAP embarquée

- `docs/eprint-operation-examples.md`
- `docs/webtrace-operation-examples.md`

## Structure utile

- `src/DPDClient.php`
- `src/Config/Config.php`
- `src/Endpoints/EPrintEndpoint.php`
- `src/Endpoints/TraceEndpoint.php`
- `src/Models/Request/*`
- `src/Models/Response/*`
- `tests/`

## Notes

- Les tests live dépendent des permissions et données disponibles côté DPD (certaines opérations peuvent être skipées selon le contexte compte/environnement).
- Les endpoints et formats SOAP ont des variantes de payload; les DTOs et mappings ont été ajustés pour les formes observées en testenv.
