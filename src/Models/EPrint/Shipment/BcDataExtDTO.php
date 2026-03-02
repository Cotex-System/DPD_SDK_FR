<?php
namespace DPD\Models\EPrint\Shipment;
use DPD\Models\ParentDTO;

class BcDataExtDTO extends ParentDTO{
    /**     * @var string
     * Contenu du code à barres DPD 
     */
    public ?string $BarCode;
    /**     * @var string
     * Numéro d’expédition  
     */
    public ?string $BarCodeId;
    /**     * @var int
     * Code country 250=France
     */
    public ?int $BarCodeSource;
}