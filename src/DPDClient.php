<?php

declare(strict_types=1);

namespace DPD;

use DPD\Auth\Authenticator;
use DPD\Config\Config;
use DPD\Http\HttpClient;
use DPD\Endpoints\Shipments;
use DPD\Endpoints\Labels;
use DPD\Endpoints\Tracking;
use DPD\Endpoints\Addresses;
use DPD\Endpoints\Manifests;
use DPD\Endpoints\Lockers;
use DPD\Endpoints\Pickup;
use DPD\Endpoints\Services;
use DPD\Endpoints\Countries;
use DPD\Endpoints\Invoices;
use DPD\Endpoints\Statistics;
use DPD\Endpoints\Profile;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

/**
 * Client principal pour l'API DPD France
 */
class DPDClient
{
    private Config $config;
    private HttpClient $httpClient;
    private Authenticator $authenticator;
    private LoggerInterface $logger;

    // Endpoints
    private ?Shipments $shipments = null;
    private ?Labels $labels = null;
    private ?Tracking $tracking = null;
    private ?Addresses $addresses = null;
    private ?Manifests $manifests = null;
    private ?Lockers $lockers = null;
    private ?Pickup $pickup = null;
    private ?Services $services = null;
    private ?Countries $countries = null;
    private ?Invoices $invoices = null;
    private ?Statistics $statistics = null;
    private ?Profile $profile = null;

    /**
     * @param array<string, mixed> $config
     */
    public function __construct(array $config = [])
    {
        $this->config = new Config($config);
        $this->logger = $config['logger'] ?? new NullLogger();
        
        $this->httpClient = new HttpClient($this->config, $this->logger);
        $this->authenticator = new Authenticator($this->httpClient, $this->config);
    }

    /**
     * Authentification et récupération du token
     */
    public function authenticate(): void
    {
        $this->authenticator->authenticate();
    }

    /**
     * Gestion des envois
     */
    public function shipments(): Shipments
    {
        if ($this->shipments === null) {
            $this->shipments = new Shipments($this->httpClient, $this->authenticator);
        }
        return $this->shipments;
    }

    /**
     * Gestion des étiquettes
     */
    public function labels(): Labels
    {
        if ($this->labels === null) {
            $this->labels = new Labels($this->httpClient, $this->authenticator);
        }
        return $this->labels;
    }

    /**
     * Suivi des colis
     */
    public function tracking(): Tracking
    {
        if ($this->tracking === null) {
            $this->tracking = new Tracking($this->httpClient, $this->authenticator);
        }
        return $this->tracking;
    }

    /**
     * Carnet d'adresses
     */
    public function addresses(): Addresses
    {
        if ($this->addresses === null) {
            $this->addresses = new Addresses($this->httpClient, $this->authenticator);
        }
        return $this->addresses;
    }

    /**
     * Bordereaux de remise
     */
    public function manifests(): Manifests
    {
        if ($this->manifests === null) {
            $this->manifests = new Manifests($this->httpClient, $this->authenticator);
        }
        return $this->manifests;
    }

    /**
     * Points relais / Lockers
     */
    public function lockers(): Lockers
    {
        if ($this->lockers === null) {
            $this->lockers = new Lockers($this->httpClient, $this->authenticator);
        }
        return $this->lockers;
    }

    /**
     * Planification de collectes
     */
    public function pickup(): Pickup
    {
        if ($this->pickup === null) {
            $this->pickup = new Pickup($this->httpClient, $this->authenticator);
        }
        return $this->pickup;
    }

    /**
     * Services disponibles
     */
    public function services(): Services
    {
        if ($this->services === null) {
            $this->services = new Services($this->httpClient, $this->authenticator);
        }
        return $this->services;
    }

    /**
     * Pays et villes
     */
    public function countries(): Countries
    {
        if ($this->countries === null) {
            $this->countries = new Countries($this->httpClient, $this->authenticator);
        }
        return $this->countries;
    }

    /**
     * Factures
     */
    public function invoices(): Invoices
    {
        if ($this->invoices === null) {
            $this->invoices = new Invoices($this->httpClient, $this->authenticator);
        }
        return $this->invoices;
    }

    /**
     * Statistiques
     */
    public function statistics(): Statistics
    {
        if ($this->statistics === null) {
            $this->statistics = new Statistics($this->httpClient, $this->authenticator);
        }
        return $this->statistics;
    }

    /**
     * Profil utilisateur
     */
    public function profile(): Profile
    {
        if ($this->profile === null) {
            $this->profile = new Profile($this->httpClient, $this->authenticator);
        }
        return $this->profile;
    }

    /**
     * Obtenir la configuration
     */
    public function getConfig(): Config
    {
        return $this->config;
    }

    /**
     * Obtenir le client HTTP
     */
    public function getHttpClient(): HttpClient
    {
        return $this->httpClient;
    }
}
