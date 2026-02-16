<?php

declare(strict_types=1);

namespace DPD\Endpoints;

/**
 * Gestion du profil utilisateur
 */
class Profile extends AbstractEndpoint
{
    /**
     * Obtenir les informations du profil
     *
     * @return array<string, mixed>
     */
    public function getProfile(): array
    {
        $response = $this->get('/profile');
        return $response->getData();
    }

    /**
     * Mettre à jour le profil
     *
     * @param array<string, mixed> $data
     * @return array<string, mixed>
     */
    public function update(array $data): array
    {
        $response = $this->put('/profile', $data);
        return $response->getData();
    }

    /**
     * Obtenir les paramètres utilisateur
     *
     * @return array<string, mixed>
     */
    public function getSettings(): array
    {
        $response = $this->get('/user/settings');
        return $response->getData();
    }

    /**
     * Mettre à jour les paramètres utilisateur
     *
     * @param array<string, mixed> $data
     * @return array<string, mixed>
     */
    public function updateSettings(array $data): array
    {
        $response = $this->put('/user/settings', $data);
        return $response->getData();
    }
}
