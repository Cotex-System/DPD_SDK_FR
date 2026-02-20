<?php

declare(strict_types=1);

namespace DPD\Models\GeoLabel;

final class CountryCatalog
{
    /**
     * @var array<string, array{postal_type:string, postal_size:string}>
     */
    private const COUNTRIES = [
        'DE' => ['postal_type' => 'N', 'postal_size' => '5'],
        'AD' => ['postal_type' => 'AN', 'postal_size' => '5'],
        'AT' => ['postal_type' => 'N', 'postal_size' => '4'],
        'BE' => ['postal_type' => 'N', 'postal_size' => '4'],
        'BA' => ['postal_type' => 'N', 'postal_size' => '5'],
        'BG' => ['postal_type' => 'N', 'postal_size' => '4'],
        'HR' => ['postal_type' => 'N', 'postal_size' => '5'],
        'DK' => ['postal_type' => 'N', 'postal_size' => '4'],
        'ES' => ['postal_type' => 'N', 'postal_size' => '5'],
        'EE' => ['postal_type' => 'N', 'postal_size' => '5'],
        'FI' => ['postal_type' => 'N', 'postal_size' => '5'],
        'FR' => ['postal_type' => 'N', 'postal_size' => '5'],
        'GB' => ['postal_type' => 'AN', 'postal_size' => '<=8'],
        'GR' => ['postal_type' => 'N', 'postal_size' => '5'],
        'HU' => ['postal_type' => 'N', 'postal_size' => '4'],
        'IM' => ['postal_type' => 'AN', 'postal_size' => '<=8'],
        'IE' => ['postal_type' => 'AN', 'postal_size' => '7'],
        'IT' => ['postal_type' => 'N', 'postal_size' => '5'],
        'LV' => ['postal_type' => 'N', 'postal_size' => '4'],
        'LI' => ['postal_type' => 'N', 'postal_size' => '4'],
        'LT' => ['postal_type' => 'N', 'postal_size' => '5'],
        'LU' => ['postal_type' => 'N', 'postal_size' => '4'],
        'NO' => ['postal_type' => 'N', 'postal_size' => '4'],
        'NL' => ['postal_type' => 'AN', 'postal_size' => '6'],
        'PL' => ['postal_type' => 'N', 'postal_size' => '5'],
        'PT' => ['postal_type' => 'N', 'postal_size' => '7'],
        'CZ' => ['postal_type' => 'N', 'postal_size' => '5'],
        'RO' => ['postal_type' => 'N', 'postal_size' => '6'],
        'RS' => ['postal_type' => 'N', 'postal_size' => '5'],
        'SK' => ['postal_type' => 'N', 'postal_size' => '5'],
        'SI' => ['postal_type' => 'N', 'postal_size' => '4'],
        'SE' => ['postal_type' => 'N', 'postal_size' => '5'],
        'CH' => ['postal_type' => 'N', 'postal_size' => '4'],
        'UA' => ['postal_type' => 'N', 'postal_size' => '5'],
    ];

    public static function supports(string $countryCode): bool
    {
        return isset(self::COUNTRIES[strtoupper($countryCode)]);
    }

    /**
     * @return array{postal_type:string, postal_size:string}|null
     */
    public static function specification(string $countryCode): ?array
    {
        $code = strtoupper($countryCode);

        return self::COUNTRIES[$code] ?? null;
    }
}
