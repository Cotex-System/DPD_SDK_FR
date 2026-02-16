<?php

declare(strict_types=1);

namespace DPD\Models;

/**
 * Modèle pour un colis
 */
class Parcel extends AbstractModel
{
    /**
     * Créer un nouveau colis
     *
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    public function getWeight(): ?float
    {
        return $this->get('weight') ? (float) $this->get('weight') : null;
    }

    public function setWeight(float $weight): self
    {
        $this->set('weight', $weight);
        return $this;
    }

    public function getWidth(): ?float
    {
        return $this->get('width') ? (float) $this->get('width') : null;
    }

    public function setWidth(float $width): self
    {
        $this->set('width', $width);
        return $this;
    }

    public function getHeight(): ?float
    {
        return $this->get('height') ? (float) $this->get('height') : null;
    }

    public function setHeight(float $height): self
    {
        $this->set('height', $height);
        return $this;
    }

    public function getDepth(): ?float
    {
        return $this->get('depth') ? (float) $this->get('depth') : null;
    }

    public function setDepth(float $depth): self
    {
        $this->set('depth', $depth);
        return $this;
    }

    public function getReference(): ?string
    {
        return $this->get('reference');
    }

    public function setReference(string $reference): self
    {
        $this->set('reference', $reference);
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->get('content');
    }

    public function setContent(string $content): self
    {
        $this->set('content', $content);
        return $this;
    }

    public function getParcelNumber(): ?string
    {
        return $this->get('parcelNumber');
    }
}
