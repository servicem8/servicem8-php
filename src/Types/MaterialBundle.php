<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\ArrayType;

class MaterialBundle extends JsonSerializableType
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
     * @var string $itemNumber Unique identifier for this bundle. Must be 30 characters or less and unique across both Materials and Bundles. Used when adding bundles to jobs.
     */
    #[JsonProperty('item_number')]
    public string $itemNumber;

    /**
     * @var ?string $name The display name of the bundle. Used for identification in the system and shows on documents when the bundle is added to a job.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?array<MaterialBundleMaterialListItem> $materialList A JSON array containing the materials that make up this bundle. Each item includes the material's UUID, quantity, and optional sort_order. Limited to between 1 and 50 items, with all quantities being positive numbers.
     */
    #[JsonProperty('material_list'), ArrayType([MaterialBundleMaterialListItem::class])]
    public ?array $materialList;

    /**
     * @param array{
     *   itemNumber: string,
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     *   name?: ?string,
     *   materialList?: ?array<MaterialBundleMaterialListItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
        $this->itemNumber = $values['itemNumber'];
        $this->name = $values['name'] ?? null;
        $this->materialList = $values['materialList'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
