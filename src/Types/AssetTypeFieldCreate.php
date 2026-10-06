<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class AssetTypeFieldCreate extends JsonSerializableType
{
    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var string $name Name of the field that will be displayed to users. Used as a label for the input field when managing assets.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?AssetTypeFieldCreateFieldData $fieldData Configuration data for the field
     */
    #[JsonProperty('field_data')]
    public ?AssetTypeFieldCreateFieldData $fieldData;

    /**
     * @var ?int $sortOrder The order in which this field should be displayed relative to other fields of the same asset type. Lower values display first.
     */
    #[JsonProperty('sort_order')]
    public ?int $sortOrder;

    /**
     * @param array{
     *   name: string,
     *   uuid?: ?string,
     *   fieldData?: ?AssetTypeFieldCreateFieldData,
     *   sortOrder?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->name = $values['name'];
        $this->fieldData = $values['fieldData'] ?? null;
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
