<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class JobActivity extends JsonSerializableType
{
    /**
     * @var ?string $jobUuid The UUID of the job this activity belongs to
     */
    #[JsonProperty('job_uuid')]
    public ?string $jobUuid;

    /**
     * @var ?string $staffUuid The UUID of the staff member assigned to this activity
     */
    #[JsonProperty('staff_uuid')]
    public ?string $staffUuid;

    /**
     * @var ?string $startDate The scheduled start date and time of the activity
     */
    #[JsonProperty('start_date')]
    public ?string $startDate;

    /**
     * @var ?string $endDate The scheduled end date and time of the activity
     */
    #[JsonProperty('end_date')]
    public ?string $endDate;

    /**
     * @var ?string $activityWasScheduled Boolean flag indicating whether this activity was scheduled in advance. Cannot be true if activity_was_recorded is true.
     */
    #[JsonProperty('activity_was_scheduled')]
    public ?string $activityWasScheduled;

    /**
     * @var ?string $activityWasRecorded Boolean flag indicating whether this activity was recorded after completion rather than scheduled in advance. Cannot be true if activity_was_scheduled is true.
     */
    #[JsonProperty('activity_was_recorded')]
    public ?string $activityWasRecorded;

    /**
     * @var ?string $activityWasAutomated Integer flag indicating if the activity was automated: 0
     */
    #[JsonProperty('activity_was_automated')]
    public ?string $activityWasAutomated;

    /**
     * @var ?string $hasBeenOpened Boolean flag indicating whether the assigned staff member has viewed this job activity. Resets to false if the staff member or start time is changed. Only relevant when activity_was_scheduled is true.
     */
    #[JsonProperty('has_been_opened')]
    public ?string $hasBeenOpened;

    /**
     * @var ?string $hasBeenOpenedTimestamp The date and time when the assigned staff member first viewed this job activity. Format is YYYY-MM-DD HH:MM:SS. Resets when staff member or start time is changed. Only relevant when activity_was_scheduled is true.
     */
    #[JsonProperty('has_been_opened_timestamp')]
    public ?string $hasBeenOpenedTimestamp;

    /**
     * @var ?int $travelTimeInSeconds The estimated travel time to reach this activity location in seconds
     */
    #[JsonProperty('travel_time_in_seconds')]
    public ?int $travelTimeInSeconds;

    /**
     * @var ?int $travelDistanceInMeters The estimated travel distance to reach this activity location in meters
     */
    #[JsonProperty('travel_distance_in_meters')]
    public ?int $travelDistanceInMeters;

    /**
     * @var mixed $allocatedByStaffUuid DEPRECATED
     */
    #[JsonProperty('allocated_by_staff_uuid')]
    public mixed $allocatedByStaffUuid;

    /**
     * @var mixed $allocatedTimestamp DEPRECATED
     */
    #[JsonProperty('allocated_timestamp')]
    public mixed $allocatedTimestamp;

    /**
     * @var ?string $materialUuid The UUID of the material associated with this activity. Used to determine the cost of the activity.
     */
    #[JsonProperty('material_uuid')]
    public ?string $materialUuid;

    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var ?int $active Record active/deleted flag.  Valid values are [0,1].  Valid values are [0,1]
     */
    #[JsonProperty('active')]
    public ?int $active;

    /**
     * @var mixed $editDate Timestamp at which record was last modified
     */
    #[JsonProperty('edit_date')]
    public mixed $editDate;

    /**
     * @var mixed $editByStaffUuid UUID of Staff Member who last modified record
     */
    #[JsonProperty('edit_by_staff_uuid')]
    public mixed $editByStaffUuid;

    /**
     * @param array{
     *   jobUuid?: ?string,
     *   staffUuid?: ?string,
     *   startDate?: ?string,
     *   endDate?: ?string,
     *   activityWasScheduled?: ?string,
     *   activityWasRecorded?: ?string,
     *   activityWasAutomated?: ?string,
     *   hasBeenOpened?: ?string,
     *   hasBeenOpenedTimestamp?: ?string,
     *   travelTimeInSeconds?: ?int,
     *   travelDistanceInMeters?: ?int,
     *   allocatedByStaffUuid?: mixed,
     *   allocatedTimestamp?: mixed,
     *   materialUuid?: ?string,
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     *   editByStaffUuid?: mixed,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->jobUuid = $values['jobUuid'] ?? null;
        $this->staffUuid = $values['staffUuid'] ?? null;
        $this->startDate = $values['startDate'] ?? null;
        $this->endDate = $values['endDate'] ?? null;
        $this->activityWasScheduled = $values['activityWasScheduled'] ?? null;
        $this->activityWasRecorded = $values['activityWasRecorded'] ?? null;
        $this->activityWasAutomated = $values['activityWasAutomated'] ?? null;
        $this->hasBeenOpened = $values['hasBeenOpened'] ?? null;
        $this->hasBeenOpenedTimestamp = $values['hasBeenOpenedTimestamp'] ?? null;
        $this->travelTimeInSeconds = $values['travelTimeInSeconds'] ?? null;
        $this->travelDistanceInMeters = $values['travelDistanceInMeters'] ?? null;
        $this->allocatedByStaffUuid = $values['allocatedByStaffUuid'] ?? null;
        $this->allocatedTimestamp = $values['allocatedTimestamp'] ?? null;
        $this->materialUuid = $values['materialUuid'] ?? null;
        $this->uuid = $values['uuid'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
        $this->editByStaffUuid = $values['editByStaffUuid'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
