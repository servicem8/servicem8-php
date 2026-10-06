<?php

namespace ServiceM8\Assets\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class AssetCreateFieldDataItem extends JsonSerializableType
{
    /**
     * @var string $uuid Must be the UUID of an AssetTypeField
     */
    #[JsonProperty('uuid')]
    public string $uuid;

    /**
     * @var string $fieldType
     */
    #[JsonProperty('fieldType')]
    public string $fieldType;

    /**
     * @var string $fieldName
     */
    #[JsonProperty('fieldName')]
    public string $fieldName;

    /**
     * @var string $fieldValue Convert all values to string. Dates shall be in Y-m-d format.
     */
    #[JsonProperty('fieldValue')]
    public string $fieldValue;

    /**
     * @var float $sortOrder
     */
    #[JsonProperty('sortOrder')]
    public float $sortOrder;

    /**
     * @param array{
     *   uuid: string,
     *   fieldType: string,
     *   fieldName: string,
     *   fieldValue: string,
     *   sortOrder: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->uuid = $values['uuid'];
        $this->fieldType = $values['fieldType'];
        $this->fieldName = $values['fieldName'];
        $this->fieldValue = $values['fieldValue'];
        $this->sortOrder = $values['sortOrder'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
