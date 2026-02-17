<?php

declare(strict_types=1);

namespace DPD\Endpoints;

use DPD\Models\Response\ImportTemplateResponseDTO;
use DPD\Models\Response\ImportHistoryResponseDTO;
use DPD\Models\Request\ParseCsvRequestDTO;
class Import extends AbstractEndpoint
{
    /**
     * Obtenir les modèles d'importation disponibles
     *
     * @param int $page
     * @param int $limit
     * @return array<int, ImportTemplateResponseDTO>
     */
    public function importTemplates(int $page = 0, int $limit = 100): array
    {
        $response = $this->get('/import/templates', ["page" => $page, "limit" => $limit]);
        $data = $response->getData();
        
        $templates = [];
        if (isset($data['data']) && is_array($data['data'])) {
            foreach ($data['data'] as $templateData) {
                $templates[] = new ImportTemplateResponseDTO($templateData);
            }
        }
        
        return $templates;
    }

    /**
     * Obtenir les détails d'un modèle d'importation par son ID
     *
     * @param string $templateId
     * @return ImportTemplateResponseDTO
     */
    public function importTemplatesById(string $templateId): ImportTemplateResponseDTO
    {
        $response = $this->get("/import/templates/{$templateId}");
        return new ImportTemplateResponseDTO($response->getData());
    }

    /**
     * Obtenir l'historique des importations
     *
      * @param int $page
      * @param int $limit
      * @return array<int, ImportHistoryResponseDTO>
      */
    public function importHistory(int $page = 0, int $limit = 100): array
    {
        $response = $this->get('/import/history', ["page" => $page, "limit" => $limit]);
        $data = $response->getData();
        
        $history = [];
        if (isset($data['data']) && is_array($data['data'])) {
            foreach ($data['data'] as $historyData) {
                $history[] = new ImportHistoryResponseDTO($historyData);
            }
        }
        
        return $history;
    }

    /**
     * Importer un fichier CSV
     *
     * @param string $fileType Type de données à importer (ex: "shipments", "addresses")
     * @param bool $hasHeaders Indique si le CSV contient une ligne d'en-tête
     * @param string $delimeter Caractère délimitant les champs (ex: ",", ";")
     * @param string $fileContent Contenu du fichier CSV encodé en Base64
     * @param string $lineEnding Caractère de fin de ligne utilisé dans le CSV (ex: "\r\n", "\n")
     * @param int $rowsToParse Nombre de lignes à analyser pour inférer la structure du CSV
     * @return array<string, mixed>
     */
    public function importCsv(string $fileType,bool $hasHeaders,string $delimeter,string $fileContent,string $lineEnding="\\\\r\\\\n",int $rowsToParse=100):array
    {
        $response = $this->post('/import/parse-csv', [
            "fileType" => $fileType,
            "hasHeaders" => $hasHeaders,
            "delimeter" => $delimeter,
            "fileContent" => $fileContent,
            "lineEnding" => $lineEnding,
            "rowsToParse" => $rowsToParse
        ]);
        return $response->getData();
    }

    /**
     * Importer une configuration d'importation
     *
     * @param array<string, mixed> $config Configuration d'importation à appliquer
     * {
     *   "name": "test",
     *   "fileType": "excel",
     *   "delimiter": ",",
     *   "lineEnding": "\\\\r\\\\n",
     *   "importSender": false,
     *   "importReturner": false,
     *   "hasHeaders": true,
     *   "fields": [
     *       {
     *       "fieldId": "SYS_SENDER_NAME",
     *       "fieldName": "Sender name",
     *       "fieldDescription": "Sender name",
     *       "fieldMandatory": true,
     *       "filledBySystem": false,
     *       "fieldGroup": "shipment-sender",
     *       "header": "Saatja nimi - Sender name"
     *       }
     *   ],
     *   "firstExampleRow": [
     *       "Pickup punkt - Sender Pickup",
     *       "Saatja nimi - Sender name",
     *       "Saatja telefoni number - Sender phone"
     *   ],
     *   "secondExampleRow": [
     *       null,
     *       "test",
     *       37168668668,
     *       null,
     *       "ventspils"
     *   ]
     * }
     * @return array<string, mixed>
     */
    public function importConfig(array $config): array
    {
        $response = $this->post('/import/configuration', $config);
        return $response->getData();
    }

    /**
     * Mettre à jour une configuration d'importation existante
     *
     * @param string $configId ID de la configuration à mettre à jour
     * @param array<string, mixed> $config Nouvelle configuration d'importation
     * {
     *   "name": "test",
     *   "fileType": "excel",
     *   "delimiter": ",",
     *   "lineEnding": "\\\\r\\\\n",
     *   "importSender": false,
     *   "importReturner": false,
     *   "hasHeaders": true,
     *   "fields": [
     *       {
     *       "fieldId": "SYS_SENDER_NAME",
     *       "fieldName": "Sender name",
     *       "fieldDescription": "Sender name",
     *       "fieldMandatory": true,
     *       "filledBySystem": false,
     *       "fieldGroup": "shipment-sender",
     *       "header": "Saatja nimi - Sender name"
     *       }
     *   ],
     *   "firstExampleRow": [
     *       "Pickup punkt - Sender Pickup",
     *       "Saatja nimi - Sender name",
     *       "Saatja telefoni number - Sender phone"
     *   ],
     *   "secondExampleRow": [
     *       null,
     *       "test",
     *       37168668668,
     *       null,
     *       "ventspils"
     *   ]
     * }
     * @return array<string, mixed>
     */
    public function updateImportConfig(string $configId, array $config): array
    {
        $response = $this->put("/import/configuration/{$configId}", $config);
        return $response->getData();
    }

    public function deleteImportConfig(string $configId): bool
    {
        $response = $this->delete("/import/configuration/{$configId}");
        return $response->isSuccessful();
    }

    /**
     * Import shipment request with base64 encoded file content

     *
     * @param array<string, mixed> $importData Données d'importation à traiter
     * {
     *   "file": "string",
     *   "fileName": "string",
     *   "patternId": "string",
     *   "skipErrors": true,
     * }
     * @return array<string, mixed>
     */
    public function importShipments(array $importData): array
    {
        $response = $this->post('/import/shipments', $importData);
        return $response->getData();
    }

    /**
     * Obtenir les champs disponibles pour l'importation
     *
     * @return array<string, mixed>
     */
    public function getImportFields(): array
    {
        $response = $this->get('/import/fields');
        return $response->getData();
    }

}