<?php

declare(strict_types=1);

namespace DPD\Endpoints;

/**
 * Gestion des services disponibles
 */
class Services extends AbstractEndpoint
{
    /**
     * Obtenir la liste des services disponibles
     *
     * @param array<string, mixed> $params
     * example value:
     * countryFrom:string required code ISO du pays d'origine
     * countryTo:string required code ISO du pays de destination
     * postalCodeFrom:string code postal d'origine
     * postalCodeTo:string code postal de destination
     * serviceType:string code du service Business, Private, Pudo, Collection Request, Return through Pudo
     * mainServiceName:string nom du service principal (ex: Predict)
     * mainServiceAlias:string alias du service principal (ex: predict)
     * payerCode:string code du payeur (ex: sender, receiver, thirdParty)
     * affiliateLinkedid:string id du lien affilié
     * packageSize:string available values: XS, S, M, L, XL
     * @return array<string, mixed>
     */
    public function list(array $params = []): array
    {
        $response = $this->get('/services', $params);
        return $response->getData();
    }

    /**
     * Obtenir un service spécifique
     *
     * @param array<string, mixed> $data
     *  * example value:
     * countryFrom:string required code ISO du pays d'origine
     * countryTo:string required code ISO du pays de destination
     * postalCodeFrom:string code postal d'origine
     * postalCodeTo:string code postal de destination
     * serviceType:string code du service Business, Private, Pudo, Collection Request, Return through Pudo
     * mainServiceName:string nom du service principal (ex: Predict)
     * mainServiceAlias:string alias du service principal (ex: predict)
     * payerCode:string code du payeur (ex: sender, receiver, thirdParty)
     * affiliateLinkedid:string id du lien affilié
     * packageSize:string available values: XS, S, M, L, XL
     * @return array<string, mixed>
     * @return array<string, mixed>
     */
    public function getServicesData(array $data): array
    {
        $response = $this->get("/service/data",  $data);
        return $response->getData();
    }
}
