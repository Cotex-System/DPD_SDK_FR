<?php

declare(strict_types=1);

namespace DPD\Models\GeoLabel\Enum;

final class ContactType
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
}
