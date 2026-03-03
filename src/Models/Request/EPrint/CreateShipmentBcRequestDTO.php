<?php
namespace DPD\Models\Request\EPrint;

use DPD\Models\EPrint\Address\AddressDTO;
use DPD\Models\EPrint\Address\AddressInfoDTO;
use DPD\Models\EPrint\Service\StdServicesDTO;
use DPD\Models\ParentDTO;

class CreateShipmentBcRequestDTO extends ParentDTO{
     /**
     * @var int
     * limité à 3 chiffres
     */
    public int $customer_countrycode;
    /**
     * @var int
     * limité à 3 chiffres
     */
    public int $customer_centernumber;
    /**
     * @var int
     * limité à 6 chiffres
     */
    public int $customer_number;
    /**
     * @var AddressDTO
     * Adresse du destinataire
     */
    public AddressDTO $receiveraddress;
    /**
     * @var ?AddressInfoDTO
     * Informations complémentaires destinataire
     */
    public ?AddressInfoDTO $receiverinfo;
    /**
     * @var AddressDTO
     * Adresse de l’expéditeur
     */
    public AddressDTO $shipperaddress;
    /**
     * @var ?AddressInfoDTO
     * Informations complémentaires expéditeur
     */
    public ?AddressInfoDTO $shipperinfo;
    /**
     * @var ?AddressDTO
     * Adresse de retour (si différente de l’adresse de l’expéditeur)
     */
    public ?AddressDTO $retourAddress;


    /** 
     * @var StdServicesDTO
     * Services
     */
    public ?StdServicesDTO $services;
    /**
     * @var string
     * Poids en kg
     * limiter à 6.2 (6 chiffres dont 2 après la virgule)
     * limite à 9 caractères
     */
    public string $weight;
     /** 
      * @var string
      * Référence de l’expédition
      * limitée à 35 caractères
      */
    public string $referencenumber;
    /**
     * @var string
     * Référence 2 de l’expédition
     * limitée à 35 caractères
     */
    public ?string $reference2;
    /**
     * @var string
     * Référence 3 de l’expédition
     * limitée à 35 caractères
     */
    public ?string $reference3;
    /**
     * @var string
     * Référence 4 de l’expédition
     * limitée à 35 caractères
     */
    public ?string $Reference4;

    /**
     * @var string
     * Date au format JJ.MM.AAAA
     * Si non renseigné, la date d’expédition sera utilisée
     * limite à 10 caractères
     */
    public ?string $shippingdate;
}