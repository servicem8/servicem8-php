<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class StaffTimeEventCreate extends JsonSerializableType
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
     * @var value-of<StaffTimeEventCreateEventName> $eventName Clock or lunch-break action recorded for the staff member..  Valid values are [CLOCK_ON,CLOCK_OFF,LUNCH_START,LUNCH_END]
     */
    #[JsonProperty('event_name')]
    public string $eventName;

    /**
     * @var ?string $source Origin of the recorded event.
     */
    #[JsonProperty('source')]
    public ?string $source;

    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @param array{
     *   staffUuid: string,
     *   timestamp: string,
     *   eventName: value-of<StaffTimeEventCreateEventName>,
     *   source?: ?string,
     *   uuid?: ?string,
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
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
