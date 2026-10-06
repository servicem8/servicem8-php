<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class QueueCreate extends JsonSerializableType
{
    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var ?string $name Name of the job queue. Used to identify the queue in the system. Examples include 'Workshop', 'Pending Quotes', etc.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?int $defaultTimeframe Default number of days that jobs should remain in this queue before requiring attention. Common values are 7 days (1 week) or 14 days (2 weeks).
     */
    #[JsonProperty('default_timeframe')]
    public ?int $defaultTimeframe;

    /**
     * @var ?string $subscribedStaff Semicolon-delimited list of staff UUIDs who are subscribed to receive notifications for this queue.
     */
    #[JsonProperty('subscribed_staff')]
    public ?string $subscribedStaff;

    /**
     * @var ?int $requiresAssignment Determines if jobs in this queue require assignment to staff members. If true, jobs must be explicitly assigned to staff. If false, jobs are visible to all staff..  Valid values are [0,1]
     */
    #[JsonProperty('requires_assignment')]
    public ?int $requiresAssignment;

    /**
     * @param array{
     *   uuid?: ?string,
     *   name?: ?string,
     *   defaultTimeframe?: ?int,
     *   subscribedStaff?: ?string,
     *   requiresAssignment?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->defaultTimeframe = $values['defaultTimeframe'] ?? null;
        $this->subscribedStaff = $values['subscribedStaff'] ?? null;
        $this->requiresAssignment = $values['requiresAssignment'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
