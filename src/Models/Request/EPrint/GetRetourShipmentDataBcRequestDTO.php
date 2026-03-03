<?php
namespace DPD\Models\Request\EPrint;
use DPD\Models\ParentDTO;

class GetRetourShipmentDataBcRequestDTO extends ParentDTO{
    /**     * @var int
     * Code pays (250 = France)
     * limite 3 caractères
     */
    public int $countryCode;
    /**     * @var int
     * Code agence
     * limite 3 caractères
     */
    public int $centerNumber;
    /**     * @var int
     * Numéro de colis
     * limite 6 caractères
     */
    public int $number;
    /**     * @var string
     * Numéro de l’expédition 
     * limite à 28 caractères
     */
    public string $originalBarcode;
    /**
     * @var int|null
     * Source du barcode original
     */
    public ?int $originalBarcodeSource = null;
    /**
     * @var string|null
     * Identifiant du barcode original
     */
    public ?string $originalBarcodeId = null;

    public function __construct(
        int $countryCode,
        int $centerNumber,
        int $number,
        string $originalBarcode,
        ?int $originalBarcodeSource = null,
        ?string $originalBarcodeId = null
    )
    {
        $this->setCountryCode($countryCode);
        $this->setCenterNumber($centerNumber);
        $this->setNumber($number);
        $this->setOriginalBarcode($originalBarcode);
        $this->setOriginalBarcodeSource($originalBarcodeSource);
        $this->setOriginalBarcodeId($originalBarcodeId);
    }

    public function getCountryCode(): int
    {
        return $this->countryCode;
    }

    public function setCountryCode(int $countryCode): self
    {
        if($countryCode > 999){
            throw new \InvalidArgumentException("Le code pays doit être limité à 3 caractères.");
        }
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getCenterNumber(): int
    {
        return $this->centerNumber;
    }
    public function setCenterNumber(int $centerNumber): self
    {
        if($centerNumber > 999){
            throw new \InvalidArgumentException("Le code agence doit être limité à 3 caractères.");
        }
        $this->centerNumber = $centerNumber;
        return $this;
    }
    public function getNumber(): int
    {
        return $this->number;
    }
    public function setNumber(int $number): self
    {
        if($number > 999999){
            throw new \InvalidArgumentException("Le numéro de colis doit être limité à 6 caractères.");
        }
        $this->number = $number;
        return $this;
    }
    public function getOriginalBarcode(): string
    {
        return $this->originalBarcode;
    }

    public function setOriginalBarcode(string $originalBarcode): self
    {
        if(strlen($originalBarcode) > 28){
            throw new \InvalidArgumentException("Le numéro de l’expédition doit être limité à 28 caractères.");
        }
        $this->originalBarcode = $originalBarcode;
        return $this;
    }

    public function getOriginalBarcodeSource(): ?int
    {
        return $this->originalBarcodeSource;
    }

    public function setOriginalBarcodeSource(?int $originalBarcodeSource): self
    {
        $this->originalBarcodeSource = $originalBarcodeSource;
        return $this;
    }

    public function getOriginalBarcodeId(): ?string
    {
        return $this->originalBarcodeId;
    }

    public function setOriginalBarcodeId(?string $originalBarcodeId): self
    {
        $this->originalBarcodeId = $originalBarcodeId;
        return $this;
    }

    public function toArray(): array
    {
        $request = [
            'customer' => [
                'countrycode' => $this->countryCode,
                'centernumber' => $this->centerNumber,
                'number' => $this->number,
            ],
            'originalBarcode' => $this->originalBarcode,
            'originalBarcodeSource' => $this->originalBarcodeSource,
            'originalBarcodeId' => $this->originalBarcodeId,
        ];

        if ($request['originalBarcodeSource'] === null) {
            unset($request['originalBarcodeSource']);
        }

        if ($request['originalBarcodeId'] === null || $request['originalBarcodeId'] === '') {
            unset($request['originalBarcodeId']);
        }

        return $request;
    }
}