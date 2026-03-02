<?php

declare(strict_types=1);

namespace DPD\Models\EPrint\Enum;

final class ContactTypeEnum
{
    public const NO = 'No';
    public const PREDICT = 'Predict';
    public const AUTOMATIC_SMS = 'AutomaticSMS';
    public const AUTOMATIC_MAIL = 'AutomaticMail';

    /**
     * @return list<string>
     */
    public static function values(): array
    {
        return [
            self::NO,
            self::PREDICT,
            self::AUTOMATIC_SMS,
            self::AUTOMATIC_MAIL,
        ];
    }

    public static function isValid(string $value): bool
    {
        return in_array($value, self::values(), true);
    }
}
