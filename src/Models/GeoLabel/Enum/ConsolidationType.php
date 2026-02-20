<?php

declare(strict_types=1);

namespace DPD\Models\GeoLabel\Enum;

final class ConsolidationType
{
    public const COMBINED_DELIVERY = 'CombinedDelivery';
    public const COMBINED_INVOICING = 'CombinedInvoicing';
    public const COMBINED_DELIVERY_AND_INVOICING = 'CombinedDeliveryAndInvoicing';

    /**
     * @return list<string>
     */
    public static function values(): array
    {
        return [
            self::COMBINED_DELIVERY,
            self::COMBINED_INVOICING,
            self::COMBINED_DELIVERY_AND_INVOICING,
        ];
    }
}
