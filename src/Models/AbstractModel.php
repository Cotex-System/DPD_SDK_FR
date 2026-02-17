<?php

declare(strict_types=1);

namespace DPD\Models;

/**
 * Classe de base pour tous les modèles
 */
abstract class AbstractModel
{
    /** @var array<string, mixed> */
    protected array $data;

    /**
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * Obtenir toutes les données sans les valeurs null
     *
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return $this->filterNullValues($this->data);
    }

    /**
     * Filtre les valeurs null de manière récursive
     *
     * @param array<string, mixed> $array
     * @return array<string, mixed>
     */
    protected function filterNullValues(array $array): array
    {
        $result = [];
        
        foreach ($array as $key => $value) {
            if ($value === null) {
                continue;
            }
            
            if (is_array($value)) {
                $filteredArray = $this->filterNullValues($value);
                if (!empty($filteredArray)) {
                    $result[$key] = $filteredArray;
                }
            } else {
                $result[$key] = $value;
            }
        }
        
        return $result;
    }

    /**
     * Obtenir une valeur
     */
    public function get(string $key, mixed $default = null): mixed
    {
        return $this->data[$key] ?? $default;
    }

    /**
     * Définir une valeur
     */
    public function set(string $key, mixed $value): void
    {
        $this->data[$key] = $value;
    }

    /**
     * Accès magique en lecture
     */
    public function __get(string $name): mixed
    {
        return $this->data[$name] ?? null;
    }

    /**
     * Accès magique en écriture
     */
    public function __set(string $name, mixed $value): void
    {
        $this->data[$name] = $value;
    }

    /**
     * Vérifier si une propriété existe
     */
    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    /**
     * Convertir en JSON
     */
    public function toJson(): string
    {
        return json_encode($this->data, JSON_THROW_ON_ERROR);
    }
}
