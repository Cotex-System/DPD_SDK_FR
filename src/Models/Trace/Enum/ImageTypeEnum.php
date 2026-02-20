<?php

declare(strict_types=1);

namespace DPD\Models\Trace\Enum;


final class ImageTypeEnum
{
    /** Preuve de livraison */
    public const POD = 'POD';
    /** Preuve de livraison dans le cas d’une demande d’enlèvement (Pickup) */
    public const POA = 'POA';
    /** Signature */
    public const DELIVERY_SIGNATURE = 'DeliverySignature';
    /** Livraison en Point Relais */
    public const DELIVERY_SHOP = 'DeliveryShop';
    /** Signature après retrait en Point Relais */ 
    public const PICKUP_SIGNATURE = 'PickupSignature';

    /**
     * @return list<string>
     */
    public static function values(): array
    {
        return [
            self::POD,
            self::POA,
            self::DELIVERY_SIGNATURE,
            self::DELIVERY_SHOP,
            self::PICKUP_SIGNATURE,
        ];
    }

    public static function isValid(string $value): bool
    {
        return in_array($value, self::values(), true);
    }
}
