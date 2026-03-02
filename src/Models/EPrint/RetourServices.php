<?php
namespace DPD\Models\EPrint;

use DPD\Models\EPrint\Service\ExtraInsuranceDTO;
use DPD\Models\ParentDTO;

class RetourServices extends ParentDTO
{
    /**
     * @var ExtraInsuranceDTO|null
     * valeur de l’assurance complémentaire pour la livraison retour
     */
    public ?ExtraInsuranceDTO $extraInsurance;
}