<?php
namespace App\Models\Request\EPrint;

use DPD\Models\EPrint\Address\AddressDTO;
use DPD\Models\EPrint\Address\AddressInfoDTO;
use DPD\Models\EPrint\Labels\LabelTypeDTO;
use DPD\Models\EPrint\Service\StdServicesDTO;
use DPD\Models\ParentDTO;
use InvalidArgumentException;

class CreateShipmentWithLabelsBcRequestDTO extends ParentDTO{
     /**
     * @var int
     * limité à 3 chiffres
     */
    public int $customer_countrycode;
    /**
     * @var int
     * limité à 3 chiffres
     */
    public int $customer_centernumber;
    /**
     * @var int
     * limité à 6 chiffres
     */
    public int $customer_number;
    /**
     * @var AddressDTO
     * Adresse du destinataire
     */
    public AddressDTO $receiveraddress;
    /**
     * @var ?AddressInfoDTO
     * Informations complémentaires destinataire
     */
    public ?AddressInfoDTO $receiverinfo;
    /**
     * @var AddressDTO
     * Adresse de l’expéditeur
     */
    public AddressDTO $shipperaddress;
    /**
     * @var ?AddressInfoDTO
     * Informations complémentaires expéditeur
     */
    public ?AddressInfoDTO $shipperinfo;
    /**
     * @var ?AddressDTO
     * Adresse de retour (si différente de l’adresse de l’expéditeur)
     */
    public ?AddressDTO $retourAddress;

    /** 
     * @var ?AddressDTO
     * Adresse de l’expéditeur à utiliser pour l’étiquette
     */
    public ?AddressDTO $overrideShipperLabelAddress;

    /** 
     * @var StdServicesDTO
     * Services
     */
    public ?StdServicesDTO $services;
    /**
     * @var string
     * Poids en kg
     * limiter à 6.2 (6 chiffres dont 2 après la virgule)
     * limite à 9 caractères
     */
    public string $weigth;
     /** 
      * @var string
      * Référence de l’expédition
      * limitée à 35 caractères
      */
    public string $referencenumber;
    /**
     * @var string
     * Référence 2 de l’expédition
     * limitée à 35 caractères
     */
    public ?string $reference2;
    /**
     * @var string
     * Référence 3 de l’expédition
     * limitée à 35 caractères
     */
    public ?string $reference3;
    /**
     * @var string
     * Référence 4 de l’expédition
     * limitée à 35 caractères
     */
    public ?string $Reference4;

    /**
     * @var string
     * Date au format JJ.MM.AAAA
     * Si non renseigné, la date d’expédition sera utilisée
     * limite à 10 caractères
     */
    public ?string $shippingdate;

    /**
     * @var LabelTypeDTO
     * Type d’étiquette
     */
    public LabelTypeDTO $labelType;
    /**
     * @var bool
     * Active le code à barres client 
     */
    public ?bool $refnrasbarcode;
    /**
     * @var ReferenceInBarcodeDTO
     * Restitue les références 1, 2 
     * et 3 sous forme de code à 
     * barres de type 128
     */
    public ?ReferenceInBarcodeDTO $referenceInBarcode;

    public function __construct(
      int $customer_countrycode,
      int $customer_centernumber,
      int $customer_number,
      AddressDTO $receiveraddress,
      ?AddressInfoDTO $receiverinfo,
      AddressDTO $shipperaddress,
      ?AddressInfoDTO $shipperinfo,
      string $weigth,
      string $referencenumber,
      LabelTypeDTO $labelType,
      ?AddressDTO $retourAddress = null,
      ?AddressDTO $overrideShipperLabelAddress = null,
      ?StdServicesDTO $services = null,
      ?string $reference2 = null,
      ?string $reference3 = null,
      ?string $Reference4 = null,
      ?string $shippingdate = null,
      ?bool $refnrasbarcode = null,
      ?ReferenceInBarcodeDTO $referenceInBarcode = null
    ) {
      $this->setCustomerCountrycode($customer_countrycode);
      $this->setCustomerCenternumber($customer_centernumber);
      $this->setCustomerNumber($customer_number);
      $this->setReceiveraddress($receiveraddress);
      $this->setReceiverinfo($receiverinfo);
      $this->setShipperaddress($shipperaddress);
      $this->setShipperinfo($shipperinfo);
      $this->setWeigth($weigth);
      $this->setReferencenumber($referencenumber);
      $this->setLabelType($labelType);
      $this->setRetourAddress($retourAddress);
      $this->setOverrideShipperLabelAddress($overrideShipperLabelAddress);
      $this->setServices($services);
      $this->setReference2($reference2);
      $this->setReference3($reference3);
      $this->setReference4($Reference4);
      $this->setShippingdate($shippingdate);
      $this->setRefnrasbarcode($refnrasbarcode);
      $this->setReferenceInBarcode($referenceInBarcode);
    }

    public function getCustomerCountrycode(): int
    {
      return $this->customer_countrycode;
    }

    public function setCustomerCountrycode(int $customer_countrycode): self
    {
      $this->assertMaxDigits($customer_countrycode, 3, 'customer_countrycode');
      $this->customer_countrycode = $customer_countrycode;

      return $this;
    }

    public function getCustomerCenternumber(): int
    {
      return $this->customer_centernumber;
    }

    public function setCustomerCenternumber(int $customer_centernumber): self
    {
      $this->assertMaxDigits($customer_centernumber, 3, 'customer_centernumber');
      $this->customer_centernumber = $customer_centernumber;

      return $this;
    }

    public function getCustomerNumber(): int
    {
      return $this->customer_number;
    }

    public function setCustomerNumber(int $customer_number): self
    {
      $this->assertMaxDigits($customer_number, 6, 'customer_number');
      $this->customer_number = $customer_number;

      return $this;
    }

    public function getReceiveraddress(): AddressDTO
    {
      return $this->receiveraddress;
    }

    public function setReceiveraddress(AddressDTO $receiveraddress): self
    {
      $this->receiveraddress = $receiveraddress;

      return $this;
    }

    public function getReceiverinfo(): ?AddressInfoDTO
    {
      return $this->receiverinfo;
    }

    public function setReceiverinfo(?AddressInfoDTO $receiverinfo): self
    {
      $this->receiverinfo = $receiverinfo;

      return $this;
    }

    public function getShipperaddress(): AddressDTO
    {
      return $this->shipperaddress;
    }

    public function setShipperaddress(AddressDTO $shipperaddress): self
    {
      $this->shipperaddress = $shipperaddress;

      return $this;
    }

    public function getShipperinfo(): ?AddressInfoDTO
    {
      return $this->shipperinfo;
    }

    public function setShipperinfo(?AddressInfoDTO $shipperinfo): self
    {
      $this->shipperinfo = $shipperinfo;

      return $this;
    }

    public function getRetourAddress(): ?AddressDTO
    {
      return $this->retourAddress;
    }

    public function setRetourAddress(?AddressDTO $retourAddress): self
    {
      $this->retourAddress = $retourAddress;

      return $this;
    }

    public function getOverrideShipperLabelAddress(): ?AddressDTO
    {
      return $this->overrideShipperLabelAddress;
    }

    public function setOverrideShipperLabelAddress(?AddressDTO $overrideShipperLabelAddress): self
    {
      $this->overrideShipperLabelAddress = $overrideShipperLabelAddress;

      return $this;
    }

    public function getServices(): ?StdServicesDTO
    {
      return $this->services;
    }

    public function setServices(?StdServicesDTO $services): self
    {
      $this->services = $services;

      return $this;
    }

    public function getWeigth(): string
    {
      return $this->weigth;
    }

    public function setWeigth(string $weigth): self
    {
      if (strlen($weigth) > 9) {
        throw new InvalidArgumentException('weigth ne doit pas dépasser 9 caractères.');
      }

      if (!preg_match('/^\d{1,6}([.,]\d{1,2})?$/', $weigth)) {
        throw new InvalidArgumentException('weigth doit respecter le format 6.2 (jusqu\'à 6 chiffres avant et 2 après séparateur).');
      }

      $this->weigth = $weigth;

      return $this;
    }

    public function getReferencenumber(): string
    {
      return $this->referencenumber;
    }

    public function setReferencenumber(string $referencenumber): self
    {
      $this->referencenumber = mb_substr($referencenumber, 0, 35);

      return $this;
    }

    public function getReference2(): ?string
    {
      return $this->reference2;
    }

    public function setReference2(?string $reference2): self
    {
      $this->reference2 = $this->truncateNullable($reference2, 35);

      return $this;
    }

    public function getReference3(): ?string
    {
      return $this->reference3;
    }

    public function setReference3(?string $reference3): self
    {
      $this->reference3 = $this->truncateNullable($reference3, 35);

      return $this;
    }

    public function getReference4(): ?string
    {
      return $this->Reference4;
    }

    public function setReference4(?string $Reference4): self
    {
      $this->Reference4 = $this->truncateNullable($Reference4, 35);

      return $this;
    }

    public function getShippingdate(): ?string
    {
      return $this->shippingdate;
    }

    public function setShippingdate(?string $shippingdate): self
    {
      if ($shippingdate !== null) {
        if (strlen($shippingdate) > 10) {
          throw new InvalidArgumentException('shippingdate ne doit pas dépasser 10 caractères.');
        }

        if (!preg_match('/^\d{2}\.\d{2}\.\d{4}$/', $shippingdate)) {
          throw new InvalidArgumentException('shippingdate doit être au format JJ.MM.AAAA.');
        }
      }

      $this->shippingdate = $shippingdate;

      return $this;
    }

    public function getLabelType(): LabelTypeDTO
    {
      return $this->labelType;
    }

    public function setLabelType(LabelTypeDTO $labelType): self
    {
      $this->labelType = $labelType;

      return $this;
    }

    public function getRefnrasbarcode(): ?bool
    {
      return $this->refnrasbarcode;
    }

    public function setRefnrasbarcode(?bool $refnrasbarcode): self
    {
      $this->refnrasbarcode = $refnrasbarcode;

      return $this;
    }

    public function getReferenceInBarcode(): ?ReferenceInBarcodeDTO
    {
      return $this->referenceInBarcode;
    }

    public function setReferenceInBarcode(?ReferenceInBarcodeDTO $referenceInBarcode): self
    {
      $this->referenceInBarcode = $referenceInBarcode;

      return $this;
    }

    private function assertMaxDigits(int $value, int $maxDigits, string $field): void
    {
      if (strlen((string) abs($value)) > $maxDigits) {
        throw new InvalidArgumentException(sprintf('%s ne doit pas dépasser %d chiffres.', $field, $maxDigits));
      }
    }

    private function truncateNullable(?string $value, int $maxLength): ?string
    {
      if ($value === null) {
        return null;
      }

      return mb_substr($value, 0, $maxLength);
    }

}