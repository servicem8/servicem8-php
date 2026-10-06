<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class MaterialBundleCreateMaterialListItem extends JsonSerializableType
{
    /**
     * @var string $uuid Must be the UUID of a Material record
     */
    #[JsonProperty('uuid')]
    public string $uuid;

    /**
     * @var float $quantity
     */
    #[JsonProperty('quantity')]
    public float $quantity;

    /**
     * @var ?int $sortOrder Optional sort order for materials in the bundle
     */
    #[JsonProperty('sort_order')]
    public ?int $sortOrder;

    /**
     * @param array{
     *   uuid: string,
     *   quantity: float,
     *   sortOrder?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->uuid = $values['uuid'];
        $this->quantity = $values['quantity'];
        $this->sortOrder = $values['sortOrder'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
