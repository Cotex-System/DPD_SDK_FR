<?php

declare(strict_types=1);

namespace DPD\Models\Trace;

use DPD\Models\ParentDTO;
use DPD\Models\Trace\Enum\ImageTypeEnum;
use InvalidArgumentException;

class ImageDTO extends ParentDTO
{
    public ?string $Type;
    public ?array $Data;
    public ?string $date;
    public ?string $time;

    public function __construct(?string $Type = null, ?array $Data = null, ?string $date = null, ?string $time = null)
    {
        $this->setType($Type);
        $this->Data = $Data;
        $this->date = $date;
        $this->time = $time;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(?string $Type): self
    {
        if ($Type !== null && !ImageTypeEnum::isValid($Type)) {
            throw new InvalidArgumentException(
                sprintf('Invalid image type "%s". Allowed values: %s', $Type, implode(', ', ImageTypeEnum::values()))
            );
        }

        $this->Type = $Type;

        return $this;
    }

    public function getData(): ?array
    {
        return $this->Data;
    }

    public function setData(?array $Data): self
    {
        $this->Data = $Data;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTime(): ?string
    {
        return $this->time;
    }

    public function setTime(?string $time): self
    {
        $this->time = $time;

        return $this;
    }
}

class Image extends ImageDTO
{
}
