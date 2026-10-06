<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\ArrayType;

class JobChecklist extends JsonSerializableType
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
     * @var ?string $jobUuid UUID of the job this checklist item belongs to. This links the checklist item to a specific job in the system.
     */
    #[JsonProperty('job_uuid')]
    public ?string $jobUuid;

    /**
     * @var ?string $name The name or description of the checklist item. This is displayed to users in the mobile app and web interface.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $sectionName The section or category name under which this checklist item is grouped. This helps organize related checklist items together.
     */
    #[JsonProperty('section_name')]
    public ?string $sectionName;

    /**
     * @var ?string $itemType The type of checklist item. Valid values are: 'Todo', 'Asset', 'Photo', 'Form', and 'Document'. Defaults to 'Todo' if not specified. This determines the functionality and appearance of the checklist item.
     */
    #[JsonProperty('item_type')]
    public ?string $itemType;

    /**
     * @var ?int $sortOrder A numeric value determining the order in which checklist items appear in the user interface. Lower values appear first. Used to customize the display sequence of items.
     */
    #[JsonProperty('sort_order')]
    public ?int $sortOrder;

    /**
     * @var ?string $completedTimestamp The date and time when the checklist item was marked as completed. Empty or '0000-00-00 00:00:00' indicates the item is not completed.
     */
    #[JsonProperty('completed_timestamp')]
    public ?string $completedTimestamp;

    /**
     * @var ?string $completedByStaffUuid UUID of the staff member who completed this checklist item. References a Staff object. Empty if the item is not completed.
     */
    #[JsonProperty('completed_by_staff_uuid')]
    public ?string $completedByStaffUuid;

    /**
     * @var ?string $completedDuringCheckinUuid UUID of the job check-in during which this checklist item was completed. This links the checklist completion to a specific check-in event in the job history.
     */
    #[JsonProperty('completed_during_checkin_uuid')]
    public ?string $completedDuringCheckinUuid;

    /**
     * @var ?string $reminderType The type of reminder associated with this checklist item. Valid values are: '' (no reminder), 'CHECK_IN', 'NAVIGATE', 'CHECK_OUT', 'ABSOLUTE_DATETIME', or 'RELATIVE_DATETIME'. Determines when the system will remind users about this checklist item.
     */
    #[JsonProperty('reminder_type')]
    public ?string $reminderType;

    /**
     * @var ?string $reminderData JSON data containing additional information for the reminder. Format depends on the reminder_type. For ABSOLUTE_DATETIME, includes 'absoluteDateTime'. For RELATIVE_DATETIME, includes 'relativeDateTime' with 'baseDate', 'unit', and 'quantity'. Exposed via API as 'reminder_data'.
     */
    #[JsonProperty('reminder_data')]
    public ?string $reminderData;

    /**
     * @var ?string $regardingObject The type of object which this checklist item is related to. For example, for Form checklists, this will be 'Form'.
     */
    #[JsonProperty('regarding_object')]
    public ?string $regardingObject;

    /**
     * @var ?string $regardingObjectUuid The UUID of the object which this checklists item is related to. For example, for Form checklists, this is the UUID of the Form that must be completed to complete the checklist item.
     */
    #[JsonProperty('regarding_object_uuid')]
    public ?string $regardingObjectUuid;

    /**
     * @var ?string $fulfilledByObjectName The type of object which completes this checklist item. For example, for Form checklists, this will be 'FormResponse'.
     */
    #[JsonProperty('fulfilled_by_object_name')]
    public ?string $fulfilledByObjectName;

    /**
     * @var ?string $fulfilledByObjectUuid The UUID of the object which completes this checklist item. For example, for Form checklists, this references the UUID of a FormResponse record.
     */
    #[JsonProperty('fulfilled_by_object_uuid')]
    public ?string $fulfilledByObjectUuid;

    /**
     * @var ?array<string> $assignedToStaffUuids JSON array of staff UUIDs to whom this checklist item is assigned. Determines which staff members are responsible for completing this checklist item. Currently limited to a maximum of 1 staff member.
     */
    #[JsonProperty('assigned_to_staff_uuids'), ArrayType(['string'])]
    public ?array $assignedToStaffUuids;

    /**
     * @var ?int $isLocked If this checklist item is locked (read-only) and cannot be modified. This is set by the system when the checklist item is created from a Task or Network Request. (Read only).  Valid values are [0,1]
     */
    #[JsonProperty('is_locked')]
    public ?int $isLocked;

    /**
     * @var ?string $assignedTimestamp The timestamp when the checklist item was assigned to the staff member. (Read only)
     */
    #[JsonProperty('assigned_timestamp')]
    public ?string $assignedTimestamp;

    /**
     * @var ?string $assignedByStaffUuid The UUID of the staff member who assigned the checklist item to the staff member. (Read only)
     */
    #[JsonProperty('assigned_by_staff_uuid')]
    public ?string $assignedByStaffUuid;

    /**
     * @param array{
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     *   jobUuid?: ?string,
     *   name?: ?string,
     *   sectionName?: ?string,
     *   itemType?: ?string,
     *   sortOrder?: ?int,
     *   completedTimestamp?: ?string,
     *   completedByStaffUuid?: ?string,
     *   completedDuringCheckinUuid?: ?string,
     *   reminderType?: ?string,
     *   reminderData?: ?string,
     *   regardingObject?: ?string,
     *   regardingObjectUuid?: ?string,
     *   fulfilledByObjectName?: ?string,
     *   fulfilledByObjectUuid?: ?string,
     *   assignedToStaffUuids?: ?array<string>,
     *   isLocked?: ?int,
     *   assignedTimestamp?: ?string,
     *   assignedByStaffUuid?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
        $this->jobUuid = $values['jobUuid'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->sectionName = $values['sectionName'] ?? null;
        $this->itemType = $values['itemType'] ?? null;
        $this->sortOrder = $values['sortOrder'] ?? null;
        $this->completedTimestamp = $values['completedTimestamp'] ?? null;
        $this->completedByStaffUuid = $values['completedByStaffUuid'] ?? null;
        $this->completedDuringCheckinUuid = $values['completedDuringCheckinUuid'] ?? null;
        $this->reminderType = $values['reminderType'] ?? null;
        $this->reminderData = $values['reminderData'] ?? null;
        $this->regardingObject = $values['regardingObject'] ?? null;
        $this->regardingObjectUuid = $values['regardingObjectUuid'] ?? null;
        $this->fulfilledByObjectName = $values['fulfilledByObjectName'] ?? null;
        $this->fulfilledByObjectUuid = $values['fulfilledByObjectUuid'] ?? null;
        $this->assignedToStaffUuids = $values['assignedToStaffUuids'] ?? null;
        $this->isLocked = $values['isLocked'] ?? null;
        $this->assignedTimestamp = $values['assignedTimestamp'] ?? null;
        $this->assignedByStaffUuid = $values['assignedByStaffUuid'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
