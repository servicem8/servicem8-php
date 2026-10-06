<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class AssetTypeCreate extends JsonSerializableType
{
    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var ?string $name The name of the asset type. Used to identify different categories of assets that can be tracked in the system. Examples might include 'Air Conditioner', 'Fire Extinguisher', etc.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @param array{
     *   uuid?: ?string,
     *   name?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->name = $values['name'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
