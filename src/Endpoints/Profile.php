<?php

declare(strict_types=1);

namespace DPD\Endpoints;

use DPD\Models\Response\UserDataDTO;
use DPD\Models\Request\ChangePasswordDTO;

/**
 * Gestion du profil utilisateur
 */
class Profile extends AbstractEndpoint
{
    /**
     * Obtenir les informations du profil
     *
     * @return UserDataDTO
     */
    public function getProfile(): UserDataDTO
    {
        $response = $this->get('/profile/contact-info');
        return new UserDataDTO($response->getData());
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
     * @return UserDataDTO
     */
    public function getData(): UserDataDTO
    {
        $response = $this->get('/user/data');
        return new UserDataDTO($response->getData());
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
     * @param array<string, mixed>|ChangePasswordDTO $data Use ChangePasswordDTO with:
     *                                                       - currentPassword: string
     *                                                       - newPassword: string
     *                                                       - confirmPassword: string
     * @return UserDataDTO
     */
    public function updatePassword(array|

ChangePasswordDTO $data): UserDataDTO
    {
        $requestData = $data instanceof ChangePasswordDTO ? $data->toArray() : $data;
        $response = $this->post('/password', $requestData);
        return new UserDataDTO($response->getData());
    }
}
