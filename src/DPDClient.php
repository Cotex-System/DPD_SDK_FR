<?php

declare(strict_types=1);

namespace DPD;

use DPD\Config\Config;
use DPD\Endpoints\TraceEndpoint;
use DPD\Http\SoapGateway;
use InvalidArgumentException;

/**
 * Client principal SDK DPD orienté SOAP.
 *
 * Cette classe initialise et expose deux passerelles:
 * - eprint (étiquetage / expédition),
 * - trace (suivi).
 *
 * Elle fournit des helpers explicites pour appeler une opération SOAP
 * et configurer les credentials DPD via headers SOAP.
 */
final class DPDClient
{
    /**
     * Namespace SOAP DPD pour eprint (sans slash terminal dans le WSDL eprint).
     */
    private const EPRINT_NAMESPACE = 'http://www.cargonet.software';

    /**
     * Namespace SOAP DPD pour trace (avec slash terminal dans le WSDL trace).
     */
    private const TRACE_NAMESPACE = 'http://www.cargonet.software/';

    /**
     * Passerelle SOAP vers le service eprint.
     */
    private SoapGateway $eprintGateway;

    /**
     * Passerelle SOAP vers le service trace.
     */
    private SoapGateway $traceGateway;

    /**
     * Endpoint Trace typé (Request DTO -> Response DTO).
     */
    private TraceEndpoint $traceEndpoint;

    /**
     * @param array<string, mixed>|Config $config
     */
    public function __construct(array|Config $config = [])
    {
        // Normalise la configuration vers l'objet Config interne.
        $resolved = $config instanceof Config ? $config : new Config($config);

        // Les options SOAP sont partagées entre eprint et trace.
        $options = $resolved->soapOptions();

        // Initialise la passerelle eprint depuis son WSDL.
        $this->eprintGateway = new SoapGateway(
            $resolved->eprintWsdl(),
            $options,
            $resolved->eprintLocation()
        );

        // Initialise la passerelle trace depuis son WSDL.
        $this->traceGateway = new SoapGateway(
            $resolved->traceWsdl(),
            $options,
            $resolved->traceLocation()
        );

        $this->traceEndpoint = new TraceEndpoint($this->traceGateway);
    }

    /**
     * Expose la passerelle SOAP eprint pour les besoins avancés.
     */
    public function eprintGateway(): SoapGateway
    {
        return $this->eprintGateway;
    }

    /**
     * Expose la passerelle SOAP trace pour les besoins avancés.
     */
    public function traceGateway(): SoapGateway
    {
        return $this->traceGateway;
    }

    /**
     * Expose les opérations Trace typées via DTOs.
     */
    public function trace(): TraceEndpoint
    {
        return $this->traceEndpoint;
    }

    /**
     * Configure le header UserCredentials sur les deux services.
     *
     * @param string $userId Identifiant DPD.
     * @param string $password Mot de passe DPD.
     */
    public function setCredentials(string $userId, string $password): void
    {
        $this->setEprintCredentials($userId, $password);
        $this->setTraceCredentials($userId, $password);
    }

    /**
     * Configure le header UserCredentials uniquement pour eprint.
     */
    public function setEprintCredentials(string $userId, string $password): void
    {
        $this->eprintGateway->setUserCredentials(self::EPRINT_NAMESPACE, $userId, $password);
    }

    /**
     * Configure le header UserCredentials uniquement pour trace.
     */
    public function setTraceCredentials(string $userId, string $password): void
    {
        $this->traceGateway->setUserCredentials(self::TRACE_NAMESPACE, $userId, $password);
    }

    /**
     * Appelle une opération du service eprint.
     *
     * @param string $operation Nom exact de l'opération SOAP.
     * @param array<string, mixed> $payload Argument de l'opération.
     * @return mixed Réponse SOAP brute.
     */
    public function callEprint(string $operation, array $payload = []): mixed
    {
        return $this->eprintGateway->call($operation, $payload);
    }

    /**
     * Appelle une opération du service trace.
     *
     * @param string $operation Nom exact de l'opération SOAP.
     * @param array<string, mixed> $payload Argument de l'opération.
     * @return mixed Réponse SOAP brute.
     */
    public function callTrace(string $operation, array $payload = []): mixed
    {
        return $this->traceGateway->call($operation, $payload);
    }

    /**
     * Appel générique d'une opération SOAP par nom de service.
     *
     * Services acceptés:
     * - eprint
     * - trace
     *
     * @param string $service Nom du service ciblé.
     * @param string $operation Nom de l'opération SOAP.
     * @param array<string, mixed> $payload Payload de l'opération.
     * @return mixed Réponse SOAP brute.
     */
    public function call(string $service, string $operation, array $payload = []): mixed
    {
        // Route explicitement vers la bonne passerelle SOAP.
        return match (strtolower($service)) {
            'eprint' => $this->callEprint($operation, $payload),
            'trace' => $this->callTrace($operation, $payload),
            default => throw new InvalidArgumentException(sprintf('Unknown SOAP service "%s".', $service)),
        };
    }
}
