<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class StaffTimeEvent extends JsonSerializableType
{
    /**
     * @var string $staffUuid UUID of the staff member whose clock or break activity this event records.
     */
    #[JsonProperty('staff_uuid')]
    public string $staffUuid;

    /**
     * @var string $timestamp Event time in the account timezone, formatted as YYYY-MM-DD HH:MM:SS.
     */
    #[JsonProperty('timestamp')]
    public string $timestamp;

    /**
     * @var value-of<StaffTimeEventEventName> $eventName Clock or lunch-break action recorded for the staff member..  Valid values are [CLOCK_ON,CLOCK_OFF,LUNCH_START,LUNCH_END]
     */
    #[JsonProperty('event_name')]
    public string $eventName;

    /**
     * @var ?string $source Origin of the recorded event. (Read only)
     */
    #[JsonProperty('source')]
    public ?string $source;

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
     *   staffUuid: string,
     *   timestamp: string,
     *   eventName: value-of<StaffTimeEventEventName>,
     *   source?: ?string,
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->staffUuid = $values['staffUuid'];
        $this->timestamp = $values['timestamp'];
        $this->eventName = $values['eventName'];
        $this->source = $values['source'] ?? null;
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
