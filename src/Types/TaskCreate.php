<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class TaskCreate extends JsonSerializableType
{
    /**
     * @var ?string $dueDate The date by which the task should be completed. Format is YYYY-MM-DD. For mobile app compatibility, may be returned with time component (HHMMSS) in some contexts.
     */
    #[JsonProperty('due_date')]
    public ?string $dueDate;

    /**
     * @var ?string $taskDetails Detailed description of the task. Contains more comprehensive information about what needs to be done, how to complete the task, or any other relevant notes.
     */
    #[JsonProperty('task_details')]
    public ?string $taskDetails;

    /**
     * @var string $name The name or title of the task. This field is mandatory and used to identify the task in listings and the user interface.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $relatedObject The name of the object class this task is related to. Must be a valid object class name in the system (e.g., 'job', 'client', etc.). The value is always stored as lowercase regardless of input case.
     */
    #[JsonProperty('related_object')]
    public ?string $relatedObject;

    /**
     * @var ?string $relatedObjectUuid UUID of the specific object instance this task is related to. Must be a valid UUID corresponding to an existing object of the type specified in related_object.
     */
    #[JsonProperty('related_object_uuid')]
    public ?string $relatedObjectUuid;

    /**
     * @var ?string $taskComplete Boolean flag indicating whether the task has been completed (1) or is still pending (0). When set to 1, the completed_timestamp and completed_by_staff_uuid fields are automatically populated.
     */
    #[JsonProperty('task_complete')]
    public ?string $taskComplete;

    /**
     * @var ?string $completedTimestamp The date and time when the task was marked as complete. Format is YYYY-MM-DD HH:MM:SS. Automatically set when task_complete is changed to 1.
     */
    #[JsonProperty('completed_timestamp')]
    public ?string $completedTimestamp;

    /**
     * @var ?string $completedByStaffUuid UUID of the staff member who marked the task as complete. Automatically set to the current staff member's UUID when task_complete is changed to 1.
     */
    #[JsonProperty('completed_by_staff_uuid')]
    public ?string $completedByStaffUuid;

    /**
     * @var ?string $assignedToStaffUuid UUID of the staff member assigned to complete this task. Must be a valid staff UUID in the system.
     */
    #[JsonProperty('assigned_to_staff_uuid')]
    public ?string $assignedToStaffUuid;

    /**
     * @var mixed $lng DEPRECATED
     */
    #[JsonProperty('lng')]
    public mixed $lng;

    /**
     * @var mixed $lat DEPRECATED
     */
    #[JsonProperty('lat')]
    public mixed $lat;

    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var ?string $createdByStaffUuid
     */
    #[JsonProperty('created_by_staff_uuid')]
    public ?string $createdByStaffUuid;

    /**
     * @var mixed $createDate Timestamp at which record was last modified
     */
    #[JsonProperty('create_date')]
    public mixed $createDate;

    /**
     * @param array{
     *   name: string,
     *   dueDate?: ?string,
     *   taskDetails?: ?string,
     *   relatedObject?: ?string,
     *   relatedObjectUuid?: ?string,
     *   taskComplete?: ?string,
     *   completedTimestamp?: ?string,
     *   completedByStaffUuid?: ?string,
     *   assignedToStaffUuid?: ?string,
     *   lng?: mixed,
     *   lat?: mixed,
     *   uuid?: ?string,
     *   createdByStaffUuid?: ?string,
     *   createDate?: mixed,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->dueDate = $values['dueDate'] ?? null;
        $this->taskDetails = $values['taskDetails'] ?? null;
        $this->name = $values['name'];
        $this->relatedObject = $values['relatedObject'] ?? null;
        $this->relatedObjectUuid = $values['relatedObjectUuid'] ?? null;
        $this->taskComplete = $values['taskComplete'] ?? null;
        $this->completedTimestamp = $values['completedTimestamp'] ?? null;
        $this->completedByStaffUuid = $values['completedByStaffUuid'] ?? null;
        $this->assignedToStaffUuid = $values['assignedToStaffUuid'] ?? null;
        $this->lng = $values['lng'] ?? null;
        $this->lat = $values['lat'] ?? null;
        $this->uuid = $values['uuid'] ?? null;
        $this->createdByStaffUuid = $values['createdByStaffUuid'] ?? null;
        $this->createDate = $values['createDate'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
