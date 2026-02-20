<?php
namespace DPD\Models\Trace;
use DPD\Models\ParentDTO;
use DPD\Models\Trace\SdgiDataDTO;

class ShipmentTraceDTO extends ParentDTO
{
    /**
     * @var ?array
     */
   public ?array $images;
   /**
     * @var ?string
     */
   public ?string $ShipmentNumber;
   /**
     * @var ?string
     */
    public ?string $DestinationCountry;
    /**
     * @var ?string
     */
    public ?string $DestinationZipcode;
    /**
     * @var ?string
     */
    public ?string $ShippingDate;
    /**
     * @var ?string
     */
    public ?string $DeliveryDate;
    /**
     * @var ?float
     */
    public ?float $Weight;
    /**
     * @var ?string
     */
    public ?string $Receiver;
    /**
     * @var ?string
     */
    public ?string $Reference;
    /**
     * @var ?string
     */
    public ?string $Reference2;
    /**
     * @var ?string
     */
    public ?string $Reference3;
    /**
     * @var ?SdgiData
     */
    public ?SdgiDataDTO $DeliveryScheduled;
    /**
     * @var ?array<clsTrace>
     */
    public ?array $Traces;
        /**
        * @var ?string
        */
    public ?string $Reference_International;
    /**
     * @var ?bool
     */
    public ?bool $IsB2C;
    /**
     * @var ?bool
     */
    public ?bool $IsRetour;
    /**
     * @var ?string
     */
    public ?string $PointRelaisName;
    /**
     * @var ?string
     */
    public ?string $PointRelaisLink;
    /**
     * @var ?string
     */
    public ?string $ShipmentNumber_Retour;
    /**
     * @var ?string
     */
    public ?string $RetourType;
    /**
     * @var ?int
     */
    public ?int $CustomerCenternumber;
    /**
     * @var ?int
     */
    public ?int $CustomerNumber;
    /**
     * @var ?int
     */
    public ?int $BarcodeSource;
    /**
     * @var ?string
     */
    public ?string $BarcodeId;
    /**
     * @var ?int
     */
    public ?int $ReceiverDepotNumber;
    /**
     * @var ?int
     */
    public ?int $ReceiverTourNumber;
    /**
     * @var ?int
     */
    public ?int $DeliveryRecordNumber;
    /**
     * @var ?int
     */
    public ?int $DeliveryRecordPosition;

    
    public function __construct(?array $images=null,?string $ShipmentNumber=null,?string $DestinationCountry=null,
    ?string $DestinationZipcode=null,?string $ShippingDate=null,?string $DeliveryDate=null,
    ?float $Weight=null,?string $Receiver=null,?string $Reference=null,
    ?string $Reference2=null,?string $Reference3=null,?SdgiDataDTO $DeliveryScheduled=null,
    ?array $Traces=null,?string $Reference_International=null,?bool $IsB2C=null,
    ?bool $IsRetour=null,?string $PointRelaisName=null,?string $PointRelaisLink=null,
    ?string $ShipmentNumber_Retour=null,?string $RetourType=null,?int $CustomerCenternumber=null,
    ?int $CustomerNumber=null,?int $BarcodeSource=null,?string $BarcodeId=null,?int $ReceiverDepotNumber=null,
    ?int $ReceiverTourNumber=null,?int $DeliveryRecordNumber=null,?int $DeliveryRecordPosition=null)
    {
        $this->images = $images;
        $this->ShipmentNumber = $ShipmentNumber;
        $this->DestinationCountry = $DestinationCountry;
        $this->DestinationZipcode = $DestinationZipcode;
        $this->ShippingDate = $ShippingDate;
        $this->DeliveryDate = $DeliveryDate;
        $this->Weight = $Weight;
        $this->Receiver = $Receiver;
        $this->Reference = $Reference;
        $this->Reference2 = $Reference2;
        $this->Reference3 = $Reference3;
        $this->DeliveryScheduled = $DeliveryScheduled;
        $this->Traces = $Traces;
        $this->Reference_International = $Reference_International;
        $this->IsB2C = $IsB2C;
        $this->IsRetour = $IsRetour;
        $this->PointRelaisName = $PointRelaisName;
        $this->PointRelaisLink = $PointRelaisLink;
        $this->ShipmentNumber_Retour = $ShipmentNumber_Retour;
        $this->RetourType = $RetourType;
        $this->CustomerCenternumber = $CustomerCenternumber;
        $this->CustomerNumber = $CustomerNumber;
        $this->BarcodeSource = $BarcodeSource;
        $this->BarcodeId = $BarcodeId;
        $this->ReceiverDepotNumber = $ReceiverDepotNumber;
       	$this->ReceiverTourNumber = $ReceiverTourNumber;
        $this->DeliveryRecordNumber = $DeliveryRecordNumber;
        $this->DeliveryRecordPosition = $DeliveryRecordPosition;
     }
 




   /**
    * Get the value of images
    */
   public function getImages(): ?array
   {
      return $this->images;
   }

   /**
    * Set the value of images
    */
   public function setImages(?array $images): self
   {
      $this->images = $images;

      return $this;
   }

   /**
    * Get the value of ShipmentNumber
    */
   public function getShipmentNumber(): ?string
   {
      return $this->ShipmentNumber;
   }

   /**
    * Set the value of ShipmentNumber
    */
   public function setShipmentNumber(?string $ShipmentNumber): self
   {
      $this->ShipmentNumber = $ShipmentNumber;

      return $this;
   }

    /**
     * Get the value of DestinationCountry
     */
    public function getDestinationCountry(): ?string
    {
        return $this->DestinationCountry;
    }

    /**
     * Set the value of DestinationCountry
     */
    public function setDestinationCountry(?string $DestinationCountry): self
    {
        $this->DestinationCountry = $DestinationCountry;

        return $this;
    }

    /**
     * Get the value of DestinationZipcode
     */
    public function getDestinationZipcode(): ?string
    {
        return $this->DestinationZipcode;
    }

    /**
     * Set the value of DestinationZipcode
     */
    public function setDestinationZipcode(?string $DestinationZipcode): self
    {
        $this->DestinationZipcode = $DestinationZipcode;

        return $this;
    }

    /**
     * Get the value of ShippingDate
     */
    public function getShippingDate(): ?string
    {
        return $this->ShippingDate;
    }

    /**
     * Set the value of ShippingDate
     */
    public function setShippingDate(?string $ShippingDate): self
    {
        $this->ShippingDate = $ShippingDate;

        return $this;
    }

    /**
     * Get the value of DeliveryDate
     */
    public function getDeliveryDate(): ?string
    {
        return $this->DeliveryDate;
    }

    /**
     * Set the value of DeliveryDate
     */
    public function setDeliveryDate(?string $DeliveryDate): self
    {
        $this->DeliveryDate = $DeliveryDate;

        return $this;
    }

    /**
     * Get the value of Weight
     */
    public function getWeight(): ?float
    {
        return $this->Weight;
    }

    /**
     * Set the value of Weight
     */
    public function setWeight(?float $Weight): self
    {
        $this->Weight = $Weight;

        return $this;
    }

    /**
     * Get the value of Receiver
     */
    public function getReceiver(): ?string
    {
        return $this->Receiver;
    }

    /**
     * Set the value of Receiver
     */
    public function setReceiver(?string $Receiver): self
    {
        $this->Receiver = $Receiver;

        return $this;
    }

    /**
     * Get the value of Reference
     */
    public function getReference(): ?string
    {
        return $this->Reference;
    }

    /**
     * Set the value of Reference
     */
    public function setReference(?string $Reference): self
    {
        $this->Reference = $Reference;

        return $this;
    }

    /**
     * Get the value of Reference2
     */
    public function getReference2(): ?string
    {
        return $this->Reference2;
    }

    /**
     * Set the value of Reference2
     */
    public function setReference2(?string $Reference2): self
    {
        $this->Reference2 = $Reference2;

        return $this;
    }

    /**
     * Get the value of Reference3
     */
    public function getReference3(): ?string
    {
        return $this->Reference3;
    }

    /**
     * Set the value of Reference3
     */
    public function setReference3(?string $Reference3): self
    {
        $this->Reference3 = $Reference3;

        return $this;
    }

    /**
     * Get the value of DeliveryScheduled
     */
    public function getDeliveryScheduled(): ?SdgiDataDTO
    {
        return $this->DeliveryScheduled;
    }

    /**
     * Set the value of DeliveryScheduled
     */
    public function setDeliveryScheduled(?SdgiDataDTO $DeliveryScheduled): self
    {
        $this->DeliveryScheduled = $DeliveryScheduled;

        return $this;
    }

    /**
     * Get the value of Traces
     */
    public function getTraces(): ?array
    {
        return $this->Traces;
    }

    /**
     * Set the value of Traces
     */
    public function setTraces(?array $Traces): self
    {
        $this->Traces = $Traces;

        return $this;
    }

    /**
     * Get the value of Reference_International
     */
    public function getReferenceInternational(): ?string
    {
        return $this->Reference_International;
    }

    /**
     * Set the value of Reference_International
     */
    public function setReferenceInternational(?string $Reference_International): self
    {
        $this->Reference_International = $Reference_International;

        return $this;
    }

    /**
     * Get the value of IsB2C
     */
    public function isIsB2C(): ?bool
    {
        return $this->IsB2C;
    }

    /**
     * Set the value of IsB2C
     */
    public function setIsB2C(?bool $IsB2C): self
    {
        $this->IsB2C = $IsB2C;

        return $this;
    }

    /**
     * Get the value of IsRetour
     */
    public function isIsRetour(): ?bool
    {
        return $this->IsRetour;
    }

    /**
     * Set the value of IsRetour
     */
    public function setIsRetour(?bool $IsRetour): self
    {
        $this->IsRetour = $IsRetour;

        return $this;
    }

    /**
     * Get the value of PointRelaisName
     */
    public function getPointRelaisName(): ?string
    {
        return $this->PointRelaisName;
    }

    /**
     * Set the value of PointRelaisName
     */
    public function setPointRelaisName(?string $PointRelaisName): self
    {
        $this->PointRelaisName = $PointRelaisName;

        return $this;
    }

    /**
     * Get the value of PointRelaisLink
     */
    public function getPointRelaisLink(): ?string
    {
        return $this->PointRelaisLink;
    }

    /**
     * Set the value of PointRelaisLink
     */
    public function setPointRelaisLink(?string $PointRelaisLink): self
    {
        $this->PointRelaisLink = $PointRelaisLink;

        return $this;
    }

    /**
     * Get the value of ShipmentNumber_Retour
     */
    public function getShipmentNumberRetour(): ?string
    {
        return $this->ShipmentNumber_Retour;
    }

    /**
     * Set the value of ShipmentNumber_Retour
     */
    public function setShipmentNumberRetour(?string $ShipmentNumber_Retour): self
    {
        $this->ShipmentNumber_Retour = $ShipmentNumber_Retour;

        return $this;
    }

    /**
     * Get the value of RetourType
     */
    public function getRetourType(): ?string
    {
        return $this->RetourType;
    }

    /**
     * Set the value of RetourType
     */
    public function setRetourType(?string $RetourType): self
    {
        $this->RetourType = $RetourType;

        return $this;
    }

    /**
     * Get the value of CustomerCenternumber
     */
    public function getCustomerCenternumber(): ?int
    {
        return $this->CustomerCenternumber;
    }

    /**
     * Set the value of CustomerCenternumber
     */
    public function setCustomerCenternumber(?int $CustomerCenternumber): self
    {
        $this->CustomerCenternumber = $CustomerCenternumber;

        return $this;
    }

    /**
     * Get the value of CustomerNumber
     */
    public function getCustomerNumber(): ?int
    {
        return $this->CustomerNumber;
    }

    /**
     * Set the value of CustomerNumber
     */
    public function setCustomerNumber(?int $CustomerNumber): self
    {
        $this->CustomerNumber = $CustomerNumber;

        return $this;
    }

    /**
     * Get the value of BarcodeSource
     */
    public function getBarcodeSource(): ?int
    {
        return $this->BarcodeSource;
    }

    /**
     * Set the value of BarcodeSource
     */
    public function setBarcodeSource(?int $BarcodeSource): self
    {
        $this->BarcodeSource = $BarcodeSource;

        return $this;
    }

    /**
     * Get the value of BarcodeId
     */
    public function getBarcodeId(): ?string
    {
        return $this->BarcodeId;
    }

    /**
     * Set the value of BarcodeId
     */
    public function setBarcodeId(?string $BarcodeId): self
    {
        $this->BarcodeId = $BarcodeId;

        return $this;
    }

    /**
     * Get the value of ReceiverDepotNumber
     */
    public function getReceiverDepotNumber(): ?int
    {
        return $this->ReceiverDepotNumber;
    }

    /**
     * Set the value of ReceiverDepotNumber
     */
    public function setReceiverDepotNumber(?int $ReceiverDepotNumber): self
    {
        $this->ReceiverDepotNumber = $ReceiverDepotNumber;

        return $this;
    }

    /**
     * Get the value of ReceiverTourNumber
     */
    public function getReceiverTourNumber(): ?int
    {
        return $this->ReceiverTourNumber;
    }

    /**
     * Set the value of ReceiverTourNumber
     */
    public function setReceiverTourNumber(?int $ReceiverTourNumber): self
    {
        $this->ReceiverTourNumber = $ReceiverTourNumber;

        return $this;
    }

    /**
     * Get the value of DeliveryRecordNumber
     */
    public function getDeliveryRecordNumber(): ?int
    {
        return $this->DeliveryRecordNumber;
    }

    /**
     * Set the value of DeliveryRecordNumber
     */
    public function setDeliveryRecordNumber(?int $DeliveryRecordNumber): self
    {
        $this->DeliveryRecordNumber = $DeliveryRecordNumber;

        return $this;
    }

    /**
     * Get the value of DeliveryRecordPosition
     */
    public function getDeliveryRecordPosition(): ?int
    {
        return $this->DeliveryRecordPosition;
    }

    /**
     * Set the value of DeliveryRecordPosition
     */
    public function setDeliveryRecordPosition(?int $DeliveryRecordPosition): self
    {
        $this->DeliveryRecordPosition = $DeliveryRecordPosition;

        return $this;
    }
}