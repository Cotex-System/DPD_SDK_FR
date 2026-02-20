# DPD France SDK (reconstruction)

SDK PHP minimal pour démarrer une nouvelle base autour des webservices SOAP DPD France.

## État actuel

Le core est en place avec :

- client principal `DPDClient`
- configuration centralisée `DPD\Config\Config`
- gateway SOAP `DPD\Http\SoapGateway`
- endpoint étiquetage `DPD\Endpoints\EPrintEndpoint`
- endpoint suivi `DPD\Endpoints\WebtraceEndpoint`
- exceptions de base transport/runtime

## Endpoints sources

- EPrint: https://e-station-testenv.cargonet.software/eprintwebservice/eprintwebservice.asmx
- Webtrace: https://e-station-testenv.cargonet.software/trace-service/Webtrace_Service.asmx

## Installation

```bash
composer install
```

## Utilisation rapide

```php
<?php

require 'vendor/autoload.php';

use DPD\DPDClient;

$client = new DPDClient();

// Ping eprint
$isAlive = $client->eprint()->isAlive();

// Appel explicite
$trace = $client->webtrace()->getLastTrace([
    'parcelNumber' => '12345678901234',
]);

// Appel générique d'une opération non encore mappée
$custom = $client->eprint()->CreateShipmentWithLabels([
    // payload SOAP selon la doc DPD
]);
```

## Configuration

```php
$client = new DPDClient([
    'eprint_wsdl' => 'https://.../eprintwebservice.asmx?WSDL',
    'trace_wsdl' => 'https://.../Webtrace_Service.asmx?WSDL',
    'eprint_location' => 'https://.../eprintwebservice.asmx',
    'trace_location' => 'https://.../Webtrace_Service.asmx',
    'connection_timeout' => 20,
    'soap_options' => [
        'trace' => true,
        'exceptions' => true,
    ],
]);
```

## Exemples

- `php examples/eprint_ping.php`
- `php examples/trace_last.php <parcel_number>`

## Détails endpoints eprint

- Documentation générée avec exemples request/response: `docs/eprint-operation-examples.md`

## Détails endpoints webtrace

- Documentation générée avec exemples request/response: `docs/webtrace-operation-examples.md`

## Modèle GeoLabel (doc 02/2026)

- Service métier: `DPDClient::geoLabel()` (`src/Services/GeoLabelService.php`)
- Catalogue services livraison + codes étiquette selon poids: `src/Models/GeoLabel/DeliveryServiceCatalog.php`
- Matrice flux/méthodes: `src/Models/GeoLabel/ServiceMatrix.php`
- Catalogue pays ISO + contraintes code postal: `src/Models/GeoLabel/CountryCatalog.php`
- Enums métier: `src/Models/GeoLabel/Enum/*`
- DTO options GeoLabel: `src/Models/Request/GeoLabel/*`
- Exemple: `php examples/geolabel_context.php`

## Prochaine étape

Mapper progressivement les opérations avec DTOs typés à partir des deux PDFs officiels (GeoLabel + suivi), section par section.
