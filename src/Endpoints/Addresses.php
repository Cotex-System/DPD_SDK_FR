<?php

declare(strict_types=1);

namespace DPD\Endpoints;

use DPD\Models\Address;

/**
 * Gestion du carnet d'adresses
 */
class Addresses extends AbstractEndpoint
{
    /**
     * Lister les adresses
     *
     * @param array<string, mixed> $params
     * @return array<int, Address>
     */
    public function list(array $params = []): array
    {
        $response = $this->get('/addresses', $params);
        $data = $response->getData();

        $addresses = [];
        if (isset($data['data']) && is_array($data['data'])) {
            foreach ($data['data'] as $addressData) {
                $addresses[] = new Address($addressData);
            }
        }

        return $addresses;
    }

    /**
     * Obtenir une adresse par son ID
     *
     * @param string $id
     * @return Address
     */
    public function get(string $id): Address
    {
        $response = $this->get("/address/{$id}");
        return new Address($response->getData());
    }

    /**
     * Créer ou modifier une adresse
     *
     * @param array<string, mixed> $data
     * @return Address
     */
    public function save(array $data): Address
    {
        $response = $this->post('/addresses/save', $data);
        return new Address($response->getData());
    }

    /**
     * Créer une nouvelle adresse (alias de save)
     *
     * @param array<string, mixed> $data
     * @return Address
     */
    public function create(array $data): Address
    {
        return $this->save($data);
    }

    /**
     * Mettre à jour une adresse existante
     *
     * @param string $id
     * @param array<string, mixed> $data
     * @return Address
     */
    public function update(string $id, array $data): Address
    {
        $data['id'] = $id;
        return $this->save($data);
    }

    /**
     * Supprimer une adresse
     *
     * @param string $id
     * @return bool
     */
    public function delete(string $id): bool
    {
        $response = $this->delete("/addresses/delete/{$id}");
        return $response->isSuccessful();
    }
}
