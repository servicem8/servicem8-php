<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class Availability extends JsonSerializableType
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
     * @var ?string $regardingObject
     */
    #[JsonProperty('regarding_object')]
    public ?string $regardingObject;

    /**
     * @var ?string $regardingObjectUuid
     */
    #[JsonProperty('regarding_object_uuid')]
    public ?string $regardingObjectUuid;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $availabilityType
     */
    #[JsonProperty('availability_type')]
    public ?string $availabilityType;

    /**
     * @var ?string $startTimestamp
     */
    #[JsonProperty('start_timestamp')]
    public ?string $startTimestamp;

    /**
     * @var ?string $endTimestamp
     */
    #[JsonProperty('end_timestamp')]
    public ?string $endTimestamp;

    /**
     * @var ?string $source Origin of this availability record. (Read only)
     */
    #[JsonProperty('source')]
    public ?string $source;

    /**
     * @param array{
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     *   regardingObject?: ?string,
     *   regardingObjectUuid?: ?string,
     *   name?: ?string,
     *   availabilityType?: ?string,
     *   startTimestamp?: ?string,
     *   endTimestamp?: ?string,
     *   source?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
        $this->regardingObject = $values['regardingObject'] ?? null;
        $this->regardingObjectUuid = $values['regardingObjectUuid'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->availabilityType = $values['availabilityType'] ?? null;
        $this->startTimestamp = $values['startTimestamp'] ?? null;
        $this->endTimestamp = $values['endTimestamp'] ?? null;
        $this->source = $values['source'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
