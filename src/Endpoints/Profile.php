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
        $response = $this->get('/profile/contact-info');
        return $response->getData();
    }

    /**
     * Mettre à jour le profil
     *
     * @param array<string, mixed> $data
     * example value:
     * {
     *   "name": "John Doe",
     *   "email": "john.doe@example.com",
     *   "phone": "+1234567890"
     * }
     * @return array<string, mixed>
     */
    public function update(array $data): array
    {
        $response = $this->post('/profile/contact-info', $data);
        return $response->getData();
    }

    /**
     * Obtenir les paramètres utilisateur
     *
     * @return array<string, mixed>
     */
    public function getData(): array
    {
        $response = $this->get('/user/data');
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
        $response = $this->post('/user/settings', $data);
        return $response->getData();
    }
    /**
     * Mettre à jour le mot de passe utilisateur
     *
     * @param array<string, mixed> $data
     * example value:
     * {
     *   "oldPassword": "old_password",
     *   "newPassword": "new_secure_password",
     *  "repeatedPassword": "new_secure_password"
     * }
      * @return array<string, mixed>
      */
    public function updatePassword(array $data): array
    {
        $response = $this->post('/password', $data);
        return $response->getData();
    }
}
