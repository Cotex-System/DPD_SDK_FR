<?php

declare(strict_types=1);

namespace DPD\Http;

use DPD\Exceptions\TransportException;
use SoapClient;
use SoapFault;
use SoapHeader;

/**
 * Passerelle SOAP bas niveau.
 *
 * Cette classe encapsule l'extension native SoapClient de PHP et centralise:
 * - l'initialisation depuis un WSDL,
 * - l'appel d'opérations,
 * - la gestion des headers SOAP (ex: UserCredentials),
 * - la traduction des SoapFault en exception applicative.
 */
final class SoapGateway
{
    /**
     * Instance SOAP native utilisée pour tous les appels.
     */
    private SoapClient $client;

    /**
     * Construit une passerelle SOAP depuis un WSDL.
     *
     * @param string $wsdl URL ou chemin du WSDL.
     * @param array<string, mixed> $options
     *        Options passées à SoapClient (trace, cache_wsdl, stream_context, etc.).
     * @param string|null $location Endpoint SOAP forcé (override du endpoint WSDL).
     */
    public function __construct(string $wsdl, array $options = [], ?string $location = null)
    {
        try {
            $this->client = new SoapClient($wsdl, $options);

            if ($location !== null && $location !== '') {
                $this->client->__setLocation($location);
            }
        } catch (SoapFault $fault) {
            throw new TransportException('Unable to initialize SOAP client: ' . $fault->getMessage(), 0, $fault);
        }
    }

    /**
     * Exécute une opération SOAP.
     *
     * Le payload est transmis en premier argument de l'opération.
     * Si aucun payload n'est fourni, l'opération est appelée sans argument.
     *
     * @param string $operation Nom exact de la méthode SOAP.
     * @param array<string, mixed> $payload
     * @return mixed Réponse brute SOAP (objet/array/scalar selon le service).
     */
    public function call(string $operation, array $payload = []): mixed
    {
        try {
            if ($payload === []) {
                return $this->client->__soapCall($operation, []);
            }

            return $this->client->__soapCall($operation, [$payload]);
        } catch (SoapFault $fault) {
            throw new TransportException(
                sprintf('SOAP call failed for "%s": %s', $operation, $fault->getMessage()),
                0,
                $fault
            );
        }
    }

    /**
     * Définit explicitement l'URL de destination SOAP.
     *
     * Utile quand le endpoint runtime diffère de celui déclaré dans le WSDL.
     */
    public function setLocation(string $location): void
    {
        $this->client->__setLocation($location);
    }

    /**
     * Injecte un header SOAP personnalisé dans la prochaine requête.
     *
     * @param string $namespace Namespace XML du header.
     * @param string $name Nom de l'élément header.
     * @param array<string, mixed> $data Contenu du header.
     * @param bool $mustUnderstand Flag SOAP mustUnderstand.
     * @param string|null $actor Cible SOAP actor/role.
     */
    public function setSoapHeader(
        string $namespace,
        string $name,
        array $data,
        bool $mustUnderstand = false,
        ?string $actor = null
    ): void {
        $header = new SoapHeader($namespace, $name, $data, $mustUnderstand, $actor);
        $this->client->__setSoapHeaders($header);
    }

    /**
     * Configure le header UserCredentials attendu par les webservices DPD.
     *
     * @param string $namespace Namespace du service SOAP ciblé.
     * @param string $userId Identifiant API.
     * @param string $password Mot de passe API.
     * @param string $headerName Nom du header (par défaut: UserCredentials).
     */
    public function setUserCredentials(
        string $namespace,
        string $userId,
        string $password,
        string $headerName = 'UserCredentials'
    ): void {
        $this->setSoapHeader($namespace, $headerName, [
            'userid' => $userId,
            'password' => $password,
        ]);
    }

    /**
     * Retourne la liste des fonctions SOAP disponibles côté WSDL.
     *
     * @return list<string>
     */
    public function functions(): array
    {
        /** @var list<string>|false $functions */
        $functions = $this->client->__getFunctions();

        return $functions === false ? [] : $functions;
    }

    /**
     * Expose l'instance SoapClient native pour les cas avancés.
     */
    public function rawClient(): SoapClient
    {
        return $this->client;
    }
}
