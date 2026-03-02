<?php

declare(strict_types=1);

namespace DPD\Models\EPrint\Enum;

final class ETypeEnum
{
    public const BIC3 = 'BIC3';
    public const PROOF_BIC3 = 'PROOFBIC3';
    public const REVERSE_BIC3 = 'REVERSEBIC3';

    /**
     * @return list<string>
     */
    public static function values(): array
    {
        return [self::BIC3, self::PROOF_BIC3, self::REVERSE_BIC3];
    }

    public static function isValid(string $value): bool
    {
        return in_array($value, self::values(), true);
    }
}
