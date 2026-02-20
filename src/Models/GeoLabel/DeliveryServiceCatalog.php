<?php

declare(strict_types=1);

namespace DPD\Models\GeoLabel;

use InvalidArgumentException;

final class DeliveryServiceCatalog
{
    /**
     * @var array<string, array{lte1kg: array{code:int,label:string}, gt1kg: array{code:int,label:string}}>
     */
    private const MAP = [
        'DPD_CLASSIC_B2B' => [
            'lte1kg' => ['code' => 136, 'label' => 'XD'],
            'gt1kg' => ['code' => 101, 'label' => 'D'],
        ],
        'DPD_CLASSIC_INTERCONTINENTAL' => [
            'lte1kg' => ['code' => 302, 'label' => 'IE2'],
            'gt1kg' => ['code' => 302, 'label' => 'IE2'],
        ],
        'PREDICT' => [
            'lte1kg' => ['code' => 328, 'label' => 'XD-B2C'],
            'gt1kg' => ['code' => 327, 'label' => 'D-B2C'],
        ],
        'DPD_RELAIS' => [
            'lte1kg' => ['code' => 338, 'label' => 'XD-B2C-PSD'],
            'gt1kg' => ['code' => 337, 'label' => 'D-B2C-PSD'],
        ],
        'DPD_RETOUR' => [
            'lte1kg' => ['code' => 332, 'label' => '2C RETURN'],
            'gt1kg' => ['code' => 332, 'label' => '2C RETURN'],
        ],
    ];

    /**
     * @return list<string>
     */
    public static function services(): array
    {
        return array_keys(self::MAP);
    }

    /**
     * @return array{code:int,label:string}
     */
    public static function resolve(string $service, float $parcelWeightKg): array
    {
        if (!isset(self::MAP[$service])) {
            throw new InvalidArgumentException(sprintf('Unknown delivery service "%s".', $service));
        }

        return $parcelWeightKg <= 1.0 ? self::MAP[$service]['lte1kg'] : self::MAP[$service]['gt1kg'];
    }
}
