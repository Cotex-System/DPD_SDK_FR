<?php

declare(strict_types=1);

namespace DPD\Models\EPrint\Enum;

final class ReferenceTypeEnum
{
    public const REFERENCE_NUMBER = 'Referencenumber';
    public const REFERENCE_2 = 'Reference2';
    public const REFERENCE_3 = 'Reference3';
    public const REFERENCE_4 = 'Reference4';

    /**
     * @return list<string>
     */
    public static function values(): array
    {
        return [
            self::REFERENCE_NUMBER,
            self::REFERENCE_2,
            self::REFERENCE_3,
            self::REFERENCE_4,
        ];
    }

    public static function isValid(string $value): bool
    {
        return in_array($value, self::values(), true);
    }
}
