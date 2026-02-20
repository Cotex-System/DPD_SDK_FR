<?php

declare(strict_types=1);

namespace DPD\Models\GeoLabel\Enum;

final class LabelType
{
    public const DEFAULT = 'Default';
    public const PDF = 'PDF';
    public const PDF_A6 = 'PDF_A6';
    public const EPL = 'EPL';
    public const ZPL = 'ZPL';
    public const ZPL300 = 'ZPL300';
    public const ZPL_A6 = 'ZPL_A6';
    public const ZPL300_A6 = 'ZPL300_A6';

    /**
     * @return list<string>
     */
    public static function values(): array
    {
        return [
            self::DEFAULT,
            self::PDF,
            self::PDF_A6,
            self::EPL,
            self::ZPL,
            self::ZPL300,
            self::ZPL_A6,
            self::ZPL300_A6,
        ];
    }

    public static function isValid(string $value): bool
    {
        return in_array($value, self::values(), true);
    }
}
