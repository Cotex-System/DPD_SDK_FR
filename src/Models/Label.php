<?php

declare(strict_types=1);

namespace DPD\Models;

/**
 * Modèle pour une étiquette
 */
class Label extends AbstractModel
{
    /**
     * Créer une nouvelle étiquette
     *
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
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

    /**
     * Sauvegarder l'étiquette dans un fichier
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

    /**
     * Obtenir le contenu décodé
     */
    public function getDecodedContent(): ?string
    {
        $content = $this->getContent();
        
        if (!$content) {
            return null;
        }

        $decoded = base64_decode($content, true);
        return $decoded !== false ? $decoded : $content;
    }
}
