<?php

declare(strict_types=1);

namespace DPD\Models\EPrint;

final class ServiceMatrix
{
    /**
     * @var array<string, array{method:string, requirement:string}>
     */
    private const MATRIX = [
        'Predict' => [
            'method' => 'CreateShipmentWithLabelsBc',
            'requirement' => 'etypeContact.Predict',
        ],
        'DPD Relais' => [
            'method' => 'CreateShipmentWithLabelsBc',
            'requirement' => 'parcelshop.shopaddress.shopid',
        ],
        'Retour en Relais Préparé' => [
            'method' => 'CreateShipmentWithLabelsBc',
            'requirement' => 'etypeReverse.Prepared',
        ],
        'Retour en Relais Demandé' => [
            'method' => 'CreateShipmentWithLabelsBc',
            'requirement' => 'etypeReverse.OnDemand',
        ],
        'Retour en Relais Inversé' => [
            'method' => 'CreateReverseInverseShipmentWithLabelsBc/CreateShipmentWithLabelsBc',
            'requirement' => 'reverseInverseReturn',
        ],
        'Consolidation déclarative Livraison' => [
            'method' => 'CreateMultiShipmentBc + GetLabelBc',
            'requirement' => 'etypeConsolidation.CombinedDelivery',
        ],
        'Consolidation déclarative Facturation' => [
            'method' => 'CreateMultiShipmentBc + GetLabelBc',
            'requirement' => 'etypeConsolidation.CombinedInvoicing',
        ],
        'Consolidation déclarative Livraison+Facturation' => [
            'method' => 'CreateMultiShipmentBc + GetLabelBc',
            'requirement' => 'etypeConsolidation.CombinedDeliveryAndInvoicing',
        ],
        'Consolidation automatique Livraison' => [
            'method' => 'CreateShipmentWithLabelsBc',
            'requirement' => 'AutoConsolidation.CombinedDelivery',
        ],
        'Consolidation automatique Facturation' => [
            'method' => 'CreateShipmentWithLabelsBc',
            'requirement' => 'AutoConsolidation.CombinedInvoicing',
        ],
        'Consolidation automatique Livraison+Facturation' => [
            'method' => 'CreateShipmentWithLabelsBc',
            'requirement' => 'AutoConsolidation.CombinedDeliveryAndInvoicing',
        ],
        'Collection Request' => [
            'method' => 'CreateCollectionRequestBc',
            'requirement' => '/',
        ],
    ];

    /**
     * @return array<string, array{method:string, requirement:string}>
     */
    public static function all(): array
    {
        return self::MATRIX;
    }

    /**
     * @return array{method:string, requirement:string}|null
     */
    public static function flow(string $flow): ?array
    {
        return self::MATRIX[$flow] ?? null;
    }
}
