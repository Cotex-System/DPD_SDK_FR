<?php

declare(strict_types=1);

namespace DPD\Models;

use DPD\Models\Contracts\ArraySerializable;
use InvalidArgumentException;
use ReflectionClass;
use ReflectionNamedType;
use ReflectionProperty;

class ParentDTO implements ArraySerializable
{

    /**
     * Hydrate un DTO depuis un array, un objet ou une chaîne JSON.
     *
     * Le mapping se fait sur les noms de propriétés existantes de la classe.
     * Les clés inconnues sont ignorées.
     *
     * @param array<string, mixed>|object|string|null $source
     */
    public static function from(array|object|string|null $source): static
    {
        if ($source === null) {
            return new static();
        }

        $data = static::normalizeInput($source);
        $reflection = new ReflectionClass(static::class);
        /** @var static $instance */
        $instance = $reflection->newInstanceWithoutConstructor();

        foreach ($data as $property => $value) {
            if (!$reflection->hasProperty($property)) {
                continue;
            }

            $reflectionProperty = $reflection->getProperty($property);
            if (!$reflectionProperty->isPublic()) {
                $reflectionProperty->setAccessible(true);
            }
            $reflectionProperty->setValue($instance, static::hydrateValue($reflectionProperty, $value));
        }

        return $instance;
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function fromArray(array $data): static
    {
        return static::from($data);
    }

    public static function fromJson(string $json): static
    {
        return static::from($json);
    }

    /**
     * Variante tolérante de from().
     *
     * Retourne null si l'entrée ne peut pas être convertie en DTO
     * (JSON invalide, type inattendu, etc.).
     *
     * @param array<string, mixed>|object|string|null $source
     */
    public static function tryFrom(array|object|string|null $source): ?static
    {
        try {
            return static::from($source);
        } catch (\Throwable) {
            return null;
        }
    }

    
    public function toArray(): array
    {
        $array = [];
        foreach ($this as $key => $value) {
            $normalizedKey = match ($key) {
                'weigth' => 'weight',
                'postalCode' => 'zipCode',
                'refnrasbarcode' => 'refasbarcode',
                default => $key,
            };
            if ($value instanceof ArraySerializable) {
                $array[$normalizedKey] = $value->toArray();
            } elseif (is_array($value)) {
                $array[$normalizedKey] = array_map(function ($item) {
                    return $item instanceof ArraySerializable ? $item->toArray() : $item;
                }, $value);
            } else {
                $array[$normalizedKey] = $value;
            }
        }
        return $array;
    }

    /**
     * @param array<string, mixed>|object|string $source
     * @return array<string, mixed>
     */
    private static function normalizeInput(array|object|string $source): array
    {
        if (is_array($source)) {
            return $source;
        }

        if (is_object($source)) {
            /** @var array<string, mixed> $vars */
            $vars = get_object_vars($source);

            return $vars;
        }

        $decoded = json_decode($source, true);
        if (!is_array($decoded)) {
            throw new InvalidArgumentException('Invalid JSON input for DTO hydration.');
        }

        /** @var array<string, mixed> $decoded */
        return $decoded;
    }

    private static function hydrateValue(ReflectionProperty $property, mixed $value): mixed
    {
        if ($value === null) {
            return null;
        }

        $type = $property->getType();
        if (!$type instanceof ReflectionNamedType) {
            return $value;
        }

        if ($type->isBuiltin()) {
            if ($type->getName() === 'array') {
                if (is_array($value)) {
                    return static::hydrateArrayItems($property, $value);
                }

                if (is_object($value)) {
                    /** @var array<mixed> $items */
                    $items = get_object_vars($value);

                    return static::hydrateArrayItems($property, $items);
                }
            }

            return $value;
        }

        $className = $type->getName();

        if (is_subclass_of($className, self::class) && (is_array($value) || is_object($value) || is_string($value))) {
            /** @var class-string<self> $className */
            return $className::from($value);
        }

        return $value;
    }

    /**
     * @param array<mixed> $items
     * @return array<mixed>
     */
    private static function hydrateArrayItems(ReflectionProperty $property, array $items): array
    {
        $doc = $property->getDocComment() ?: '';

        $elementClass = null;

        if (preg_match('/array\s*<\s*([A-Za-z_\\\\][A-Za-z0-9_\\\\]*)\s*>/', $doc, $matches) === 1) {
            $elementClass = $matches[1];
        } elseif (
            preg_match('/@var\s+([A-Za-z_\\\\][A-Za-z0-9_\\\\]*)\[\](?:\|null)?/', $doc, $matches) === 1
        ) {
            $elementClass = $matches[1];
        }

        if (!is_string($elementClass)) {
            return $items;
        }

        if (!class_exists($elementClass)) {
            $namespace = $property->getDeclaringClass()->getNamespaceName();
            if ($namespace !== '' && !str_contains($elementClass, '\\')) {
                $candidate = $namespace . '\\' . $elementClass;
                if (class_exists($candidate)) {
                    $elementClass = $candidate;
                }
            }
        }

        if (!class_exists($elementClass) || !is_subclass_of($elementClass, self::class)) {
            return $items;
        }

        return array_map(static function ($item) use ($elementClass) {
            if ($item === null) {
                return null;
            }

            if (is_array($item) || is_object($item) || is_string($item)) {
                /** @var class-string<self> $elementClass */
                return $elementClass::from($item);
            }

            return $item;
        }, $items);
    }
}