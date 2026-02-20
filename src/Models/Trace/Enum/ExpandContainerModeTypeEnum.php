<?php

declare(strict_types=1);

namespace DPD\Models\Trace\Enum;


final class ExpandContainerModeTypeEnum
{
    /** Mode d'expansion complet */
    public const MasterOnly = 'MasterOnly';
    /** Mode d'expansion partielle */
    public const MasterAndSlave = 'MasterAndSlave';

    /**
     * @return list<string>
     */
    public static function values(): array
    {
        return [
            self::MasterOnly,
            self::MasterAndSlave,
        ];
    }

    public static function isValid(string $value): bool
    {
        return in_array($value, self::values(), true);
    }
}
