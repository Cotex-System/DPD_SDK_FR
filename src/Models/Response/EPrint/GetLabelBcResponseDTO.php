<?php

namespace DPD\Models\Response\EPrint;

use DPD\Models\EPrint\Shipment\BcDataExtDTO;
use DPD\Models\ParentDTO;

class GetLabelBcResponseDTO extends ParentDTO
{
    /**     * @var Label[]
     * Liste des étiquettes au format ZPL
     */
    private ?array $labels;
    /**     * @var BcDataExtDTO
     * Données d’identification du code à barres DPD
     */
    private ?BcDataExtDTO $shipment;

    public function __construct(?array $labels = null, ?BcDataExtDTO $shipment = null)
    {
        $this->labels = $labels;
        $this->shipment = $shipment;
    }
    /**     * Get the value of labels
     * @return Label[]|null
     */    public function getLabels(): ?array
    {
        return $this->labels;
    }
    /**     * Get the value of shipment
     * @return BcDataExtDTO|null
     */    public function getShipment(): ?BcDataExtDTO
    {
        return $this->shipment;
    }
}
