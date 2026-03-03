<?php
namespace DPD\Models\Request\EPrint;

use DPD\Models\EPrint\Address\AddressDTO;
use DPD\Models\EPrint\Address\AddressInfoDTO;
use DPD\Models\EPrint\Labels\LabelTypeDTO;
use DPD\Models\EPrint\Service\StdServicesDTO;
use DPD\Models\ParentDTO;
use InvalidArgumentException;

class CreateReverseInverseShipmentWithLabelsBcRequestDTO extends ParentDTO{
    /** @var int
     * Code pays du client
     * limite à 3 caractères
     */
    public int $customer_countrycode;
    /** @var int
     * Code agence 
     * limite à 3 caractères
     */
    public int $customer_centernumber;
    /** @var int
     * Numéro de client
     * limite à 6 caractères
     */
    public int $customer_number;

    public AddressDTO $receiveraddress;
    public ?AddressInfoDTO $receiverinfo;
    public AddressDTO $shipperaddress;
    public ?AddressInfoDTO $shipperinfo;
    public ?AddressDTO $retourAddress;
    public ?StdServicesDTO $services;
    /** @var string
     * Date au format JJ.MM.AAAA
     * Si non renseigné, la date d’expédition sera utilisée
     * limite à 10 caractères
     */
    public ?string $shippingdate;
    /** @var string
     * Poids en kg
     * limiter à 6.2 (6 chiffres dont 2 après la virgule)
     * limite à 9 caractères
     */
    public ?string $weight;
    /** @var string
     * Référence de l’expédition
     * limite à 35 caractères
     */
    public ?string $referencenumber;
    /** @var string
     * période validité de l'étiquette retour en jours
     * limite à 3 caractères
     */
    public  int $expire_offset;
    /** @var string
     * Texte personnalisé à imprimer sur l’étiquette
     * limité à 400 caractères
     */
    public ?string $customLabelText;
    public LabelTypeDTO $labelType;
    public ?bool $refnrasbarcode;

    public function __construct(
        int $customer_countrycode,
        int $customer_centernumber,
        int $customer_number,
        AddressDTO $receiveraddress,
        ?AddressInfoDTO $receiverinfo,
        AddressDTO $shipperaddress,
        ?AddressInfoDTO $shipperinfo,
        LabelTypeDTO $labelType,
        int $expire_offset,
        ?AddressDTO $retourAddress = null,
        ?StdServicesDTO $services = null,
        ?string $shippingdate = null,
        ?string $weight = null,
        ?string $referencenumber = null,
        ?string $customLabelText = null,
        ?bool $refnrasbarcode = null
    ) {
        $this->setCustomerCountrycode($customer_countrycode);
        $this->setCustomerCenternumber($customer_centernumber);
        $this->setCustomerNumber($customer_number);
        $this->setReceiveraddress($receiveraddress);
        $this->setReceiverinfo($receiverinfo);
        $this->setShipperaddress($shipperaddress);
        $this->setShipperinfo($shipperinfo);
        $this->setLabelType($labelType);
        $this->setExpireOffset($expire_offset);
        $this->setRetourAddress($retourAddress);
        $this->setServices($services);
        $this->setShippingdate($shippingdate);
        $this->setWeight($weight);
        $this->setReferencenumber($referencenumber);
        $this->setCustomLabelText($customLabelText);
        $this->setRefnrasbarcode($refnrasbarcode);
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

    public function getServices(): ?StdServicesDTO
    {
        return $this->services;
    }

    public function setServices(?StdServicesDTO $services): self
    {
        $this->services = $services;

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

    public function getWeight(): ?string
    {
        return $this->weight;
    }

    public function setWeight(?string $weight): self
    {
        if ($weight !== null) {
            if (strlen($weight) > 9) {
                throw new InvalidArgumentException('weight ne doit pas dépasser 9 caractères.');
            }

            if (!preg_match('/^\d{1,6}([.,]\d{1,2})?$/', $weight)) {
                throw new InvalidArgumentException('weight doit respecter le format 6.2 (jusqu\'à 6 chiffres avant et 2 après séparateur).');
            }
        }

        $this->weight = $weight;

        return $this;
    }

    public function getReferencenumber(): ?string
    {
        return $this->referencenumber;
    }

    public function setReferencenumber(?string $referencenumber): self
    {
        $this->referencenumber = $this->truncateNullable($referencenumber, 35);

        return $this;
    }

    public function getExpireOffset(): int
    {
        return $this->expire_offset;
    }

    public function setExpireOffset(int $expire_offset): self
    {
        $this->assertMaxDigits($expire_offset, 3, 'expire_offset');
        $this->expire_offset = $expire_offset;

        return $this;
    }

    public function getCustomLabelText(): ?string
    {
        return $this->customLabelText;
    }

    public function setCustomLabelText(?string $customLabelText): self
    {
        $this->customLabelText = $this->truncateNullable($customLabelText, 400);

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