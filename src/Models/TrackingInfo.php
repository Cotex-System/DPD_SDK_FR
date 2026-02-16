<?php

declare(strict_types=1);

namespace DPD\Models;

/**
 * Modèle pour les informations de suivi
 */
class TrackingInfo extends AbstractModel
{
    /**
     * Créer une nouvelle information de suivi
     *
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    public function getParcelNumber(): ?string
    {
        return $this->get('parcelNumber');
    }

    public function getStatus(): ?string
    {
        return $this->get('status');
    }

    public function getStatusCode(): ?string
    {
        return $this->get('statusCode');
    }

    public function getStatusDescription(): ?string
    {
        return $this->get('statusDescription');
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    public function getEvents(): array
    {
        return $this->get('events', []);
    }

    public function getLastEvent(): ?array
    {
        $events = $this->getEvents();
        return !empty($events) ? $events[0] : null;
    }

    public function getEstimatedDeliveryDate(): ?string
    {
        return $this->get('estimatedDeliveryDate');
    }

    public function getDeliveryDate(): ?string
    {
        return $this->get('deliveryDate');
    }

    public function isDelivered(): bool
    {
        return $this->getDeliveryDate() !== null;
    }
}
