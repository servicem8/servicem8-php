<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class JobAdminActivity extends JsonSerializableType
{
    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var ?string $jobUuid The UUID of the job this admin activity belongs to (Read only)
     */
    #[JsonProperty('job_uuid')]
    public ?string $jobUuid;

    /**
     * @var ?string $staffUuid The UUID of the staff member who recorded this admin activity (Read only)
     */
    #[JsonProperty('staff_uuid')]
    public ?string $staffUuid;

    /**
     * @var ?string $activityDate The raw database date and time this admin activity was recorded for (Read only)
     */
    #[JsonProperty('activity_date')]
    public ?string $activityDate;

    /**
     * @var ?int $activitySeconds The duration of the admin activity in seconds (Read only)
     */
    #[JsonProperty('activity_seconds')]
    public ?int $activitySeconds;

    /**
     * @param array{
     *   uuid?: ?string,
     *   jobUuid?: ?string,
     *   staffUuid?: ?string,
     *   activityDate?: ?string,
     *   activitySeconds?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->jobUuid = $values['jobUuid'] ?? null;
        $this->staffUuid = $values['staffUuid'] ?? null;
        $this->activityDate = $values['activityDate'] ?? null;
        $this->activitySeconds = $values['activitySeconds'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
