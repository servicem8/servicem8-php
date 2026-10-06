<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class AssetTypeField extends JsonSerializableType
{
    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var ?int $active Record active/deleted flag.  Valid values are [0,1]
     */
    #[JsonProperty('active')]
    public ?int $active;

    /**
     * @var mixed $editDate Timestamp at which record was last modified
     */
    #[JsonProperty('edit_date')]
    public mixed $editDate;

    /**
     * @var ?string $assetTypeUuid UUID of the Asset Type to which this field belongs. This field is read-only in the API. (Read only)
     */
    #[JsonProperty('asset_type_uuid')]
    public ?string $assetTypeUuid;

    /**
     * @var string $name Name of the field that will be displayed to users. Used as a label for the input field when managing assets.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?AssetTypeFieldFieldData $fieldData Configuration data for the field
     */
    #[JsonProperty('field_data')]
    public ?AssetTypeFieldFieldData $fieldData;

    /**
     * @var ?int $sortOrder The order in which this field should be displayed relative to other fields of the same asset type. Lower values display first.
     */
    #[JsonProperty('sort_order')]
    public ?int $sortOrder;

    /**
     * @param array{
     *   name: string,
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     *   assetTypeUuid?: ?string,
     *   fieldData?: ?AssetTypeFieldFieldData,
     *   sortOrder?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
        $this->assetTypeUuid = $values['assetTypeUuid'] ?? null;
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
