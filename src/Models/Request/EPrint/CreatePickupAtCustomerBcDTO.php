<?php
namespace DPD\Models\Request\EPrint;

use DPD\Models\EPrint\Address\AddressDTO;
use DPD\Models\EPrint\Labels\PickupDataDTO;
use DPD\Models\ParentDTO;
use DPD\Models\Trace\CustomerDTO;

class CreatePickupAtCustomerBcDTO extends ParentDTO{
    public ?AddressDTO $shipperaddress;
     /**
      * @var CustomerDTO
      * Informations sur le client DPD
      */
    public ?CustomerDTO $customer;
    public ?string $pick_date;
    public ?PickupDataDTO $pickup_data;
    /** @var string[]
     * Liste des numéros expéditions à récupérer
     */
    public ?array $shipments;

    public function __construct(?AddressDTO $shipperaddress=null, ?CustomerDTO $customer=null, ?string $pick_date=null, ?PickupDataDTO $pickup_data=null, array $shipments = null)
    {
        $this->shipperaddress = $shipperaddress;
        $this->customer = $customer;
        $this->pick_date = $pick_date;
        $this->pickup_data = $pickup_data;
        $this->shipments = $shipments;
    }

    public function toArray(): array
    {
        $data = parent::toArray();

        if (array_key_exists('pickup_data', $data)) {
            $data['data'] = $data['pickup_data'];
            unset($data['pickup_data']);
        }

        return $data;
    }
    
}
