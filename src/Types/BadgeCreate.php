<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class BadgeCreate extends JsonSerializableType
{
    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var string $name The display name of the badge. Used to identify the badge in the system. Examples include 'Warranty', 'VIP', 'Take Payment Facilities', etc.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $automaticallyAllocated
     */
    #[JsonProperty('automatically_allocated')]
    public ?string $automaticallyAllocated;

    /**
     * @var ?string $fileName
     */
    #[JsonProperty('file_name')]
    public ?string $fileName;

    /**
     * @var ?string $regardingFormUuid
     */
    #[JsonProperty('regarding_form_uuid')]
    public ?string $regardingFormUuid;

    /**
     * @var ?string $regardingAssetTypeUuid UUID of the asset type that this badge is associated with. Only applicable for asset-based badges. When set, the badge represents a specific asset type in the system and will appear on assets of this type.
     */
    #[JsonProperty('regarding_asset_type_uuid')]
    public ?string $regardingAssetTypeUuid;

    /**
     * @param array{
     *   name: string,
     *   uuid?: ?string,
     *   automaticallyAllocated?: ?string,
     *   fileName?: ?string,
     *   regardingFormUuid?: ?string,
     *   regardingAssetTypeUuid?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->name = $values['name'];
        $this->automaticallyAllocated = $values['automaticallyAllocated'] ?? null;
        $this->fileName = $values['fileName'] ?? null;
        $this->regardingFormUuid = $values['regardingFormUuid'] ?? null;
        $this->regardingAssetTypeUuid = $values['regardingAssetTypeUuid'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
