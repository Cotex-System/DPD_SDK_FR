<?php
namespace DPD\Models\Response\EPrint;
use DPD\Models\EPrint\Shipment\ShipmentBcDTO;
use DPD\Models\ParentDTO;
use DPD\Models\EPrint\Labels\LabelDTO;
class CreateShipmentWithLabelsBcResponseDTO extends ParentDTO{
    /** @var ShipmentBcDTO[]|null */
    private ?array $shipments;

    /** @var LabelDTO[]|null|LabelDTO */
    private LabelDTO|array|null $labels;

    public function __construct(?array $shipments = null, LabelDTO|array|null $labels = null)
    {
        $this->shipments = $shipments;
        $this->labels = $labels;
    }

    /**
     * @param array<string, mixed>|object|string|null $source
     */
    public static function from(array|object|string|null $source): static
    {
        if ($source === null) {
            return new static();
        }

        if (is_string($source)) {
            $decoded = json_decode($source, true);
            if (!is_array($decoded)) {
                return new static();
            }
            $source = $decoded;
        }

        $data = is_object($source) ? get_object_vars($source) : $source;

        $shipments = null;
        if (array_key_exists('shipments', $data)) {
            $shipments = self::hydrateShipments($data['shipments']);
        }

        $labels = null;
        if (array_key_exists('labels', $data)) {
            $labels = self::hydrateLabels($data['labels']);
        }

        return new static($shipments, $labels);
    }

    private static function hydrateShipments(mixed $value): ?array
    {
        if ($value === null) {
            return null;
        }

        if ($value instanceof ShipmentBcDTO) {
            return [$value];
        }

        if (is_object($value)) {
            $value = get_object_vars($value);
        }

        if (!is_array($value)) {
            return null;
        }

        $items = $value;
        if (isset($value['ShipmentBc'])) {
            $items = $value['ShipmentBc'];
        }

        if ($items instanceof \stdClass) {
            $items = get_object_vars($items);
        }

        if (!is_array($items)) {
            return null;
        }

        if (self::isAssoc($items)) {
            $items = [$items];
        }

        $result = [];
        foreach ($items as $item) {
            if ($item instanceof ShipmentBcDTO) {
                $result[] = $item;
                continue;
            }

            if (is_object($item)) {
                $item = get_object_vars($item);
            }

            if (is_array($item)) {
                $result[] = ShipmentBcDTO::from($item);
            }
        }

        return $result;
    }

    private static function hydrateLabels(mixed $value): LabelDTO|array|null
    {
        if ($value === null) {
            return null;
        }

        if ($value instanceof LabelDTO) {
            return $value;
        }

        if (is_object($value)) {
            $value = get_object_vars($value);
        }

        if (!is_array($value)) {
            return null;
        }

        $items = $value;
        if (isset($value['Label'])) {
            $items = $value['Label'];
        }

        if ($items instanceof \stdClass) {
            $items = get_object_vars($items);
        }

        if (is_object($items)) {
            $items = get_object_vars($items);
        }

        if (!is_array($items)) {
            return null;
        }

        if (self::looksLikeSingleLabel($items)) {
            return self::hydrateSingleLabel($items);
        }

        $result = [];
        foreach ($items as $item) {
            $hydrated = self::hydrateSingleLabel($item);
            if ($hydrated !== null) {
                $result[] = $hydrated;
            }
        }

        return $result;
    }

    private static function hydrateSingleLabel(mixed $item): ?LabelDTO
    {
        if ($item instanceof LabelDTO) {
            return $item;
        }

        if (is_object($item)) {
            $item = get_object_vars($item);
        }

        if (!is_array($item)) {
            return null;
        }

        if (array_key_exists('label', $item) && !array_key_exists('Label', $item)) {
            $rawLabel = $item['label'];
            if (is_array($rawLabel)) {
                $item['Label'] = $rawLabel;
            } elseif ($rawLabel === null) {
                $item['Label'] = [];
            } else {
                $item['Label'] = [(string) $rawLabel];
            }
            unset($item['label']);
        }

        return LabelDTO::from($item);
    }

    /**
     * @param array<mixed> $array
     */
    private static function isAssoc(array $array): bool
    {
        return array_keys($array) !== range(0, count($array) - 1);
    }

    /**
     * @param array<mixed> $value
     */
    private static function looksLikeSingleLabel(array $value): bool
    {
        return array_key_exists('type', $value)
            || array_key_exists('label', $value)
            || array_key_exists('Label', $value);
    }

    /**
     * Get the value of labels
     */
    public function getLabels(): LabelDTO|array|null
    {
        return $this->labels;
    }

    /**
     * Get the value of shipments
     */
    public function getShipments(): ?array
    {
        return $this->shipments;
    }
}
