<?php

declare(strict_types=1);

namespace DPD\Models\Trace\Enum;


final class ReferenceSearchModeEnum
{
    /** Type de recherche sur la totalité de la chaîne */
    public const Equals = 'Equals';
    /** Type de recherche partielle */
    public const Like = 'Like';

    /**
     * @return list<string>
     */
    public static function values(): array
    {
        return [
            self::Equals,
            self::Like,
        ];
    }

    public static function isValid(string $value): bool
    {
        return in_array($value, self::values(), true);
    }
}
