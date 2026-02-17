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
     *   address:string - Filtrer par adresse,name:string - Filtrer par nom, 
     *   contactName:string - Filtrer par nom de contact, type:string *required (sender,receiver,return)
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
    public function getById(string $id): Address
    {
        $response = $this->get("/address/{$id}");
        return new Address($response->getData());
    }

    /**
     * Créer ou modifier une adresse
     *
     * @param array<string, mixed> $data{
     * "addressId": "string",
     * "name": "string",
     * "contactName": "string",
     * "contactInfo": "string",
     * "email": "string",
     * "phone": "string",
     * "city": "string",
     * "country": "string",
     * "region": "string",
     * "street": "string",
     * "streetNo": "string",
     * "flatNo": "string",
     * "zip": "string",
     * "pudoId": "string",
     * "pudoAddress": "string",
     * "pudoZip": "string",
     * "pudoCountryCode": "string",
     * "type": "sender",
     * "defaultAddressesIds": [
     *   "string"
     * ],
     * "isDefault": true
     *}
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
        $data['addressId'] = $id;
        return $this->save($data);
    }

    /**
     * Supprimer une adresse
     *
     * @param string $id
     * @return bool
     */
    public function deleteAddress(string $id): bool
    {
        $response = $this->delete("/addresses/delete/{$id}");
        return $response->isSuccessful();
    }
    /**
     * Supprimer plusieurs adresses
     *
     * @param array<string> $ids
     * @return bool
     */
    public function deleteSelected(array $ids): bool
    {
        $response = $this->post('/addresses/delete', ['addressIds' => $ids]);
        return $response->isSuccessful();
    }

    /**
     * Télécharger un exemple de fichier d'adresses
     *
     * @return string URL du fichier d'exemple
     */
    public function downloadExample(): string
    {
        $response = $this->get('/addresses/download-example');
        return $response->getData()['url'] ?? '';
    }
    /**
     * Importer des adresses à partir d'un fichier Excel
     *
     * @param string $filePath Chemin vers le fichier Excel à importer
     * @param string $addressType Type d'adresse (sender, receiver, return)
     * @return bool Succès de l'importation
     */
    public function importFromExcel(string $filePath, string $addressType = 'sender'): bool
    {
        $response = $this->post('/addresses/import', ['file' => $filePath,'addressType' => $addressType]);
        return $response->isSuccessful();
    }
}
