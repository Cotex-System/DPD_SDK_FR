<?php
namespace DPD\Models\Request\EPrint;

use DPD\Models\EPrint\Address\AddressDTO;
use DPD\Models\EPrint\Address\AddressInfoDTO;
use DPD\Models\ParentDTO;
use InvalidArgumentException;

class CreateCollectionRequestBcDTO extends ParentDTO{

    

    /**
     * @var int
     * 250 = France
     * limitée à 3 caractères
     */
    public int $customer_countrycode;
    /**
     * @var int
     * Code agence 
     * limitée à 3 caractères
     */
    public int $customer_centernumber;
    /**
     * @var int
     * Numéro de compte 
     * limitée à 6 caractères
     */
    public int $customer_number;
    /**
     * @var AddressDTO
     * Adresse destinataire
     */
    public AddressDTO $receiveraddress;
    /**
     * @var AddressInfoDTO|null
     * Compléments d’adresse destinataire
     */
    public ?AddressInfoDTO $receiverinfo;

    /**
     * @var AddressDTO
     * Adresse expéditeur
     */
    public AddressDTO $shipperaddress;
    /**
     * @var AddressInfoDTO|null
     * Compléments d’adresse expéditeur
     */
    public ?AddressInfoDTO $shipperinfo;
    /**
     * @var StdServices[]|null
     * Services 
     */
    public ?array $services;
    /**
     * @var int
     * Nombre de colis
     * limitée à 2 caractères
     */
    public int $parcel_count;
    /**
     * @var string
     * Date d’enlèvement 
     * limitée à 10 caractères
     * jj.mm.aaaa
     */
    public string $pickup_date;
    /**
     * @var string|null
     * Heure d’enlèvement 
     * limitée à 5 caractères
     * hh:mm
     */
    public ?string $time_from;
    /**
     * @var string|null
     * Heure d’enlèvement 
     * limitée à 5 caractères
     * hh:mm
     */
    public ?string $time_to;
    /**
     * @var string
     * Commentaire
     * limitée à 35 caractères
     */
    public ?string $remark;
    /**
     * @var string
     * Commentaire pour le chauffeur
     * limitée à 35 caractères
     */
    public ?string $pick_remark;
    /**
     * @var string
     * Commentaire pour la livraison
     * limitée à 35 caractères
     */
    public ?string $delivery_remark;
    /**
     * @var string
     * Numéro de référence
     * limitée à 35 caractères
     */
    public ?string $referencenumber;
    /**
     * @var string
     * Référence 2
     * limitée à 35 caractères
     */
    public ?string $reference2;
    /**
     * @var string
     * Référence 3
     * limitée à 35 caractères
     */
    public ?string $reference3;
    /**
     * @var string
     * Référence 4
     * limitée à 35 caractères
     */
    public ?string $reference4;
    /**
     * @var bool
     * Vérification jour enlèvement
     */
    public ?bool $dayCheckDone;

    public function __construct(
        int $customer_countrycode,
        int $customer_centernumber,
        int $customer_number,
        AddressDTO $receiveraddress,
        ?AddressInfoDTO $receiverinfo,
        AddressDTO $shipperaddress,
        ?AddressInfoDTO $shipperinfo,
        ?array $services,
        int $parcel_count,
        string $pickup_date,
        ?string $time_from = null,
        ?string $time_to = null,
        ?string $remark = null,
        ?string $pick_remark = null,
        ?string $delivery_remark = null,
        ?string $referencenumber = null,
        ?string $reference2 = null,
        ?string $reference3 = null,
        ?string $reference4 = null,
        ?bool $dayCheckDone = null
    ) {
        $this->setCustomerCountrycode($customer_countrycode);
        $this->setCustomerCenternumber($customer_centernumber);
        $this->setCustomerNumber($customer_number);
        $this->setReceiveraddress($receiveraddress);
        $this->setReceiverinfo($receiverinfo);
        $this->setShipperaddress($shipperaddress);
        $this->setShipperinfo($shipperinfo);
        $this->setServices($services);
        $this->setParcelCount($parcel_count);
        $this->setPickupDate($pickup_date);
        $this->setTimeFrom($time_from);
        $this->setTimeTo($time_to);
        $this->setRemark($remark);
        $this->setPickRemark($pick_remark);
        $this->setDeliveryRemark($delivery_remark);
        $this->setReferencenumber($referencenumber);
        $this->setReference2($reference2);
        $this->setReference3($reference3);
        $this->setReference4($reference4);
        $this->setDayCheckDone($dayCheckDone);
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

    public function getServices(): ?array
    {
        return $this->services;
    }

    public function setServices(?array $services): self
    {
        $this->services = $services;

        return $this;
    }

    public function getParcelCount(): int
    {
        return $this->parcel_count;
    }

    public function setParcelCount(int $parcel_count): self
    {
        $this->assertMaxDigits($parcel_count, 2, 'parcel_count');
        $this->parcel_count = $parcel_count;

        return $this;
    }

    public function getPickupDate(): string
    {
        return $this->pickup_date;
    }

    public function setPickupDate(string $pickup_date): self
    {
        if (strlen($pickup_date) > 10) {
            throw new InvalidArgumentException('pickup_date ne doit pas dépasser 10 caractères.');
        }

        if (!preg_match('/^\d{2}\.\d{2}\.\d{4}$/', $pickup_date)) {
            throw new InvalidArgumentException('pickup_date doit être au format jj.mm.aaaa.');
        }

        $this->pickup_date = $pickup_date;

        return $this;
    }

    public function getTimeFrom(): ?string
    {
        return $this->time_from;
    }

    public function setTimeFrom(?string $time_from): self
    {
        if ($time_from !== null) {
            if (strlen($time_from) > 5) {
                throw new InvalidArgumentException('time_from ne doit pas dépasser 5 caractères.');
            }

            if (!preg_match('/^\d{2}:\d{2}$/', $time_from)) {
                throw new InvalidArgumentException('time_from doit être au format hh:mm.');
            }
        }

        $this->time_from = $time_from;

        return $this;
    }

    public function getTimeTo(): ?string
    {
        return $this->time_to;
    }

    public function setTimeTo(?string $time_to): self
    {
        if ($time_to !== null) {
            if (strlen($time_to) > 5) {
                throw new InvalidArgumentException('time_to ne doit pas dépasser 5 caractères.');
            }

            if (!preg_match('/^\d{2}:\d{2}$/', $time_to)) {
                throw new InvalidArgumentException('time_to doit être au format hh:mm.');
            }
        }

        $this->time_to = $time_to;

        return $this;
    }

    public function getRemark(): ?string
    {
        return $this->remark;
    }

    public function setRemark(?string $remark): self
    {
        $this->remark = $this->truncateNullable($remark, 35);

        return $this;
    }

    public function getPickRemark(): ?string
    {
        return $this->pick_remark;
    }

    public function setPickRemark(?string $pick_remark): self
    {
        $this->pick_remark = $this->truncateNullable($pick_remark, 35);

        return $this;
    }

    public function getDeliveryRemark(): ?string
    {
        return $this->delivery_remark;
    }

    public function setDeliveryRemark(?string $delivery_remark): self
    {
        $this->delivery_remark = $this->truncateNullable($delivery_remark, 35);

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
        return $this->reference4;
    }

    public function setReference4(?string $reference4): self
    {
        $this->reference4 = $this->truncateNullable($reference4, 35);

        return $this;
    }

    public function getDayCheckDone(): ?bool
    {
        return $this->dayCheckDone;
    }

    public function setDayCheckDone(?bool $dayCheckDone): self
    {
        $this->dayCheckDone = $dayCheckDone;

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