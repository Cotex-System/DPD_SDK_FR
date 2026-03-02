<?php
namespace DPD\Models\Response\EPrint;
use DPD\Models\ParentDTO;


class GetRetourLabelBcResponseDTO extends ParentDTO{
    /**     * @var string
     * Code pays (250 = France)
     */
    private ?string $countrycode;
    private ?string $centernumber;
    private ?string $parcelnumber;
    /**     * @var LabelDTO[]
     * Liste des étiquettes de retour
     */
    private ?array $labels;

    public function __construct(?string $countrycode, ?string $centernumber, ?string $parcelnumber, ?array $labels)
    {
        $this->countrycode = $countrycode;
        $this->centernumber = $centernumber;
        $this->parcelnumber = $parcelnumber;
        $this->labels = $labels;
    }
    public function getCountrycode(): ?string
    {
        return $this->countrycode;
    }
    public function getCenternumber(): ?string
    {
        return $this->centernumber;
    }
    public function getParcelnumber(): ?string
    {
        return $this->parcelnumber;
    }
    public function getLabels(): ?array
    {
        return $this->labels;
    }
}