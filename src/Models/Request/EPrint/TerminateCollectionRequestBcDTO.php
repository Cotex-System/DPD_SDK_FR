<?php
namespace DPD\Models\Request\EPrint;

use DPD\Models\EPrint\Parcel\ParcelDTO;
use DPD\Models\ParentDTO;
use DPD\Models\Trace\CustomerDTO;

class TerminateCollectionRequestBcDTO extends ParentDTO{
    public string $barcode;

    public function __construct(string|ParcelDTO $barcode, ?CustomerDTO $customer = null)
    {
        if ($barcode instanceof ParcelDTO) {
            $barcode = (string) $barcode->number;
        }

        $this->barcode = $barcode;
    }

    public function getBarcode(): string
    {
        return $this->barcode;
    }

    public function setBarcode(string $barcode): self
    {
        $this->barcode = $barcode;
        return $this;
    }

    public function toArray(): array
    {
        return ['barcode' => $this->barcode];
    }
}