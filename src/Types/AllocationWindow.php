<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class AllocationWindow extends JsonSerializableType
{
    /**
     * @var ?string $name Name of the allocation window that defines a time period for job scheduling. Common examples include 'Morning', 'Afternoon', 'Business Hours', etc.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?int $startTime Start time of the allocation window measured in minutes from midnight. For example, 800 AM would be represented as 480 (8 hours × 60 minutes).
     */
    #[JsonProperty('start_time')]
    public ?int $startTime;

    /**
     * @var ?int $endTime End time of the allocation window measured in minutes from midnight. For example, 1700 (500 PM) would be represented as 1020 (17 hours × 60 minutes).
     */
    #[JsonProperty('end_time')]
    public ?int $endTime;

    /**
     * @var ?int $sortPriority Numeric value determining the display order of allocation windows. Lower values indicate higher priority. System automatically sets this to match the start_time in minutes, unless it's an urgent priority window which gets priority 0.
     */
    #[JsonProperty('sort_priority')]
    public ?int $sortPriority;

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
     * @param array{
     *   name?: ?string,
     *   startTime?: ?int,
     *   endTime?: ?int,
     *   sortPriority?: ?int,
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->startTime = $values['startTime'] ?? null;
        $this->endTime = $values['endTime'] ?? null;
        $this->sortPriority = $values['sortPriority'] ?? null;
        $this->uuid = $values['uuid'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
