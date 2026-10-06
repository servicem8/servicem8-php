<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\ArrayType;

class Asset extends JsonSerializableType
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
     * @var ?string $companyUuid UUID of the Client to which this Asset is attached
     */
    #[JsonProperty('company_uuid')]
    public ?string $companyUuid;

    /**
     * @var ?string $assetCode The unique code printed on this Asset's attached label (read only)
     */
    #[JsonProperty('asset_code')]
    public ?string $assetCode;

    /**
     * @var ?string $assetTypeUuid UUID of an Asset Type which defines the fields that can be stored for this Asset (read only)
     */
    #[JsonProperty('asset_type_uuid')]
    public ?string $assetTypeUuid;

    /**
     * @var ?string $name User-facing description of this asset
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?float $lat Latitude component of the Asset's location in degrees
     */
    #[JsonProperty('lat')]
    public ?float $lat;

    /**
     * @var ?float $lng Longitude component of the Asset's location in degrees
     */
    #[JsonProperty('lng')]
    public ?float $lng;

    /**
     * @var ?string $geoTimestamp Timestamp at which the Asset's location was last updated
     */
    #[JsonProperty('geo_timestamp')]
    public ?string $geoTimestamp;

    /**
     * @var ?float $altitude Altitude component of the Asset's location in metres
     */
    #[JsonProperty('altitude')]
    public ?float $altitude;

    /**
     * @var ?array<AssetFieldDataItem> $fieldData JSON array containing field values for this asset. Each entry represents a field value defined by the associated AssetType, with field values stored as strings. Date fields use Y-m-d format. This field stores all custom fields defined in the asset type template.
     */
    #[JsonProperty('field_data'), ArrayType([AssetFieldDataItem::class])]
    public ?array $fieldData;

    /**
     * @param array{
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     *   companyUuid?: ?string,
     *   assetCode?: ?string,
     *   assetTypeUuid?: ?string,
     *   name?: ?string,
     *   lat?: ?float,
     *   lng?: ?float,
     *   geoTimestamp?: ?string,
     *   altitude?: ?float,
     *   fieldData?: ?array<AssetFieldDataItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
        $this->companyUuid = $values['companyUuid'] ?? null;
        $this->assetCode = $values['assetCode'] ?? null;
        $this->assetTypeUuid = $values['assetTypeUuid'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->lat = $values['lat'] ?? null;
        $this->lng = $values['lng'] ?? null;
        $this->geoTimestamp = $values['geoTimestamp'] ?? null;
        $this->altitude = $values['altitude'] ?? null;
        $this->fieldData = $values['fieldData'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
