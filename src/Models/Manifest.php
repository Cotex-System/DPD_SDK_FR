<?php

declare(strict_types=1);

namespace DPD\Models;

/**
 * Modèle pour un bordereau de remise
 */
class Manifest extends AbstractModel
{
    /**
     * Créer un nouveau manifeste
     *
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    public function getUuid(): ?string
    {
        return $this->get('uuid');
    }

    public function getContent(): ?string
    {
        return $this->get('content') ?? $this->get('pdf');
    }

    public function getFormat(): ?string
    {
        return $this->get('format');
    }

    public function getShipmentIds(): ?array
    {
        return $this->get('shipmentIds');
    }

    public function getParcelNumbers(): ?array
    {
        return $this->get('parcelNumbers');
    }

    public function getCreatedAt(): ?string
    {
        return $this->get('createdAt');
    }

    /**
     * Sauvegarder le manifeste dans un fichier
     */
    public function saveToFile(string $filename): bool
    {
        $content = $this->getContent();
        
        if (!$content) {
            return false;
        }

        // Si le contenu est en base64, le décoder
        $decoded = base64_decode($content, true);
        $fileContent = $decoded !== false ? $decoded : $content;

        return file_put_contents($filename, $fileContent) !== false;
    }
}
