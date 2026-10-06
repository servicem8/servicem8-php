<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class JobAllocation extends JsonSerializableType
{
    /**
     * @var ?string $jobUuid The UUID of the job that this allocation relates to.
     */
    #[JsonProperty('job_uuid')]
    public ?string $jobUuid;

    /**
     * @var mixed $queueUuid DEPRECATED
     */
    #[JsonProperty('queue_uuid')]
    public mixed $queueUuid;

    /**
     * @var ?string $staffUuid The UUID of the staff member this job is allocated to.
     */
    #[JsonProperty('staff_uuid')]
    public ?string $staffUuid;

    /**
     * @var ?string $allocationDate The minimum start date for a job allocation to be completed by a staff member. Setting this date will ensure the job allocation appears in the future on staff schedules.
     */
    #[JsonProperty('allocation_date')]
    public ?string $allocationDate;

    /**
     * @var ?string $allocationWindowUuid The UUID of the allocation window that defines when the job should be completed (e.g. Urgent, Early Morning, During Business Hours).
     */
    #[JsonProperty('allocation_window_uuid')]
    public ?string $allocationWindowUuid;

    /**
     * @var ?string $allocatedByStaffUuid The UUID of the staff member who allocated the job.
     */
    #[JsonProperty('allocated_by_staff_uuid')]
    public ?string $allocatedByStaffUuid;

    /**
     * @var ?string $allocatedTimestamp The timestamp when the job was allocated.
     */
    #[JsonProperty('allocated_timestamp')]
    public ?string $allocatedTimestamp;

    /**
     * @var ?string $expiryTimestamp The timestamp when the job allocation expires.
     */
    #[JsonProperty('expiry_timestamp')]
    public ?string $expiryTimestamp;

    /**
     * @var ?string $readTimestamp The timestamp when the job allocation was read by the staff member.
     */
    #[JsonProperty('read_timestamp')]
    public ?string $readTimestamp;

    /**
     * @var ?string $completionTimestamp The timestamp when the job allocation was marked as completed.
     */
    #[JsonProperty('completion_timestamp')]
    public ?string $completionTimestamp;

    /**
     * @var mixed $estimatedDuration DEPRECATED
     */
    #[JsonProperty('estimated_duration')]
    public mixed $estimatedDuration;

    /**
     * @var mixed $revisedDuration DEPRECATED
     */
    #[JsonProperty('revised_duration')]
    public mixed $revisedDuration;

    /**
     * @var ?string $sortPriority The sort priority for displaying this job allocation.
     */
    #[JsonProperty('sort_priority')]
    public ?string $sortPriority;

    /**
     * @var mixed $requiresAcceptance DEPRECATED
     */
    #[JsonProperty('requires_acceptance')]
    public mixed $requiresAcceptance;

    /**
     * @var mixed $acceptanceStatus DEPRECATED
     */
    #[JsonProperty('acceptance_status')]
    public mixed $acceptanceStatus;

    /**
     * @var mixed $acceptanceTimestamp DEPRECATED
     */
    #[JsonProperty('acceptance_timestamp')]
    public mixed $acceptanceTimestamp;

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
     *   jobUuid?: ?string,
     *   queueUuid?: mixed,
     *   staffUuid?: ?string,
     *   allocationDate?: ?string,
     *   allocationWindowUuid?: ?string,
     *   allocatedByStaffUuid?: ?string,
     *   allocatedTimestamp?: ?string,
     *   expiryTimestamp?: ?string,
     *   readTimestamp?: ?string,
     *   completionTimestamp?: ?string,
     *   estimatedDuration?: mixed,
     *   revisedDuration?: mixed,
     *   sortPriority?: ?string,
     *   requiresAcceptance?: mixed,
     *   acceptanceStatus?: mixed,
     *   acceptanceTimestamp?: mixed,
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->jobUuid = $values['jobUuid'] ?? null;
        $this->queueUuid = $values['queueUuid'] ?? null;
        $this->staffUuid = $values['staffUuid'] ?? null;
        $this->allocationDate = $values['allocationDate'] ?? null;
        $this->allocationWindowUuid = $values['allocationWindowUuid'] ?? null;
        $this->allocatedByStaffUuid = $values['allocatedByStaffUuid'] ?? null;
        $this->allocatedTimestamp = $values['allocatedTimestamp'] ?? null;
        $this->expiryTimestamp = $values['expiryTimestamp'] ?? null;
        $this->readTimestamp = $values['readTimestamp'] ?? null;
        $this->completionTimestamp = $values['completionTimestamp'] ?? null;
        $this->estimatedDuration = $values['estimatedDuration'] ?? null;
        $this->revisedDuration = $values['revisedDuration'] ?? null;
        $this->sortPriority = $values['sortPriority'] ?? null;
        $this->requiresAcceptance = $values['requiresAcceptance'] ?? null;
        $this->acceptanceStatus = $values['acceptanceStatus'] ?? null;
        $this->acceptanceTimestamp = $values['acceptanceTimestamp'] ?? null;
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
