<?php

declare(strict_types=1);

namespace DPD\Models\EPrint\Enum;

final class ReverseTypeEnum
{
    public const ON_DEMAND = 'OnDemand';
    public const PREPARED = 'Prepared';

    /**
     * @return list<string>
     */
    public static function values(): array
    {
        return [self::ON_DEMAND, self::PREPARED];
    }

    public static function isValid(string $value): bool
    {
        return in_array($value, self::values(), true);
    }
}
