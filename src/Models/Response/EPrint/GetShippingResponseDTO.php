<?php
namespace DPD\Models\Response\EPrint;
use DPD\Models\ParentDTO;

class GetShippingResponseDTO extends ParentDTO{
    /**     * @var Shipping[]
     * Contenu du code à barres DPD 
     */
    private ?array $shippings;

    public function getShippings(): ?array
    {
        return $this->shippings;
    }

    public function __construct(array $shippings)
    {
        $this->shippings = $shippings;
    }
}