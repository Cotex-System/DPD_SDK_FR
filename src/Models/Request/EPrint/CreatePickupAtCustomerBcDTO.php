<?php
namespace DPD\Models\Request\EPrint;

use DPD\Models\EPrint\Address\AddressDTO;
use DPD\Models\EPrint\Labels\PickupDataDTO;
use DPD\Models\ParentDTO;
use DPD\Models\Trace\CustomerDTO;

class CreatePickupAtCustomerBcDTO extends ParentDTO{
    public AddressDTO $address;
    public CustomerDTO $customer;
    public string $pick_date;
    public PickupDataDTO $pickup_data;
    /** @var string[]
     * Liste des numéros expéditions à récupérer
     */
    public array $shipments;
}
