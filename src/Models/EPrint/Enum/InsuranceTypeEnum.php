<?php

declare(strict_types=1);

namespace DPD\Models\EPrint\Enum;

final class InsuranceTypeEnum
{
    public const BY_SHIPMENTS = 'byShipments';

    /**
     * @return list<string>
     */
    public static function values(): array
    {
        return [self::BY_SHIPMENTS];
    }

    public static function isValid(string $value): bool
    {
        return in_array($value, self::values(), true);
    }
}
