<?php

namespace ServiceM8\Assets\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Assets\Types\AssetCreateFieldDataItem;
use ServiceM8\Core\Types\ArrayType;

class AssetCreate extends JsonSerializableType
{
    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var ?string $companyUuid UUID of the Client to which this Asset is attached
     */
    #[JsonProperty('company_uuid')]
    public ?string $companyUuid;

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
     * @var ?array<AssetCreateFieldDataItem> $fieldData JSON array containing field values for this asset. Each entry represents a field value defined by the associated AssetType, with field values stored as strings. Date fields use Y-m-d format. This field stores all custom fields defined in the asset type template.
     */
    #[JsonProperty('field_data'), ArrayType([AssetCreateFieldDataItem::class])]
    public ?array $fieldData;

    /**
     * @param array{
     *   uuid?: ?string,
     *   companyUuid?: ?string,
     *   name?: ?string,
     *   lat?: ?float,
     *   lng?: ?float,
     *   geoTimestamp?: ?string,
     *   altitude?: ?float,
     *   fieldData?: ?array<AssetCreateFieldDataItem>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->companyUuid = $values['companyUuid'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->lat = $values['lat'] ?? null;
        $this->lng = $values['lng'] ?? null;
        $this->geoTimestamp = $values['geoTimestamp'] ?? null;
        $this->altitude = $values['altitude'] ?? null;
        $this->fieldData = $values['fieldData'] ?? null;
    }
}
