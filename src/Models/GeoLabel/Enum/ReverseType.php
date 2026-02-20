<?php

declare(strict_types=1);

namespace DPD\Models\GeoLabel\Enum;

final class ReverseType
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
}
