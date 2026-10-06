<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class JobMaterialBundleCreate extends JsonSerializableType
{
    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var ?string $itemNumber Unique identifier for the material bundle within the job. Displayed on the Quote/Invoice in the same way as for JobMaterials.
     */
    #[JsonProperty('item_number')]
    public ?string $itemNumber;

    /**
     * @var ?string $name Descriptive name of the job material bundle. Displayed on the Quote/Invoice in the same way as for JobMaterials.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $quantity The quantity shown for the bundle line item on the invoice. Must be greater than zero. The quantity of each JobMaterial within the bundle is determined by dividing by this value.
     */
    #[JsonProperty('quantity')]
    public ?string $quantity;

    /**
     * @var ?int $sortOrder Defines the display order of the JobMaterialBundle relative to other JobMaterials and JobMaterialBundles on the Job. Lower values are displayed first.
     */
    #[JsonProperty('sort_order')]
    public ?int $sortOrder;

    /**
     * @var ?string $materialBundleUuid UUID of the MaterialBundle which this JobMaterialBundle was originally created from.
     */
    #[JsonProperty('material_bundle_uuid')]
    public ?string $materialBundleUuid;

    /**
     * @var ?string $jobUuid UUID of the job that this material bundle is associated with. Links the bundle to a specific job record.
     */
    #[JsonProperty('job_uuid')]
    public ?string $jobUuid;

    /**
     * @param array{
     *   uuid?: ?string,
     *   itemNumber?: ?string,
     *   name?: ?string,
     *   quantity?: ?string,
     *   sortOrder?: ?int,
     *   materialBundleUuid?: ?string,
     *   jobUuid?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->itemNumber = $values['itemNumber'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->quantity = $values['quantity'] ?? null;
        $this->sortOrder = $values['sortOrder'] ?? null;
        $this->materialBundleUuid = $values['materialBundleUuid'] ?? null;
        $this->jobUuid = $values['jobUuid'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
