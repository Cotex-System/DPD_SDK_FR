<?php

declare(strict_types=1);

namespace DPD\Models\GeoLabel\Enum;

final class InsuranceType
{
    public const BY_SHIPMENTS = 'byShipments';

    /**
     * @return list<string>
     */
    public static function values(): array
    {
        return [self::BY_SHIPMENTS];
    }
}
