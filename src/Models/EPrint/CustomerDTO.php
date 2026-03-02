<?php
namespace DPD\Models\EPrint;
use DPD\Models\ParentDTO;


class CustomerDTO extends ParentDTO{

    /**     * @var int
     * Code pays (250 = France)
     */
    public ?int $countrycode;
    /**     * @var int
     * Code agence
     */
    public ?int $centernumber;
    /**     * @var int
     * Numéro de compte 
     */
    public ?int $number;
}