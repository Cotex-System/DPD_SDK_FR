<?php
namespace DPD\Models\EPrint\Service;
use DPD\Models\ParentDTO;

class RetourServicesDTO extends ParentDTO{
    /**
     * @var int|null
     * Pèriode de Validité de l'étiquette retours en nb de jours
     */
    public ?int $expireOffset;
}