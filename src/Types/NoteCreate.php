<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class NoteCreate extends JsonSerializableType
{
    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var ?string $relatedObject
     */
    #[JsonProperty('related_object')]
    public ?string $relatedObject;

    /**
     * @var ?string $relatedObjectUuid
     */
    #[JsonProperty('related_object_uuid')]
    public ?string $relatedObjectUuid;

    /**
     * @var ?string $note
     */
    #[JsonProperty('note')]
    public ?string $note;

    /**
     * @var ?string $actionRequired
     */
    #[JsonProperty('action_required')]
    public ?string $actionRequired;

    /**
     * @var ?string $actionCompletedByStaffUuid
     */
    #[JsonProperty('action_completed_by_staff_uuid')]
    public ?string $actionCompletedByStaffUuid;

    /**
     * @var mixed $editByStaffUuid UUID of Staff Member who last modified record
     */
    #[JsonProperty('edit_by_staff_uuid')]
    public mixed $editByStaffUuid;

    /**
     * @var mixed $createDate Timestamp at which record was last modified
     */
    #[JsonProperty('create_date')]
    public mixed $createDate;

    /**
     * @param array{
     *   uuid?: ?string,
     *   relatedObject?: ?string,
     *   relatedObjectUuid?: ?string,
     *   note?: ?string,
     *   actionRequired?: ?string,
     *   actionCompletedByStaffUuid?: ?string,
     *   editByStaffUuid?: mixed,
     *   createDate?: mixed,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->relatedObject = $values['relatedObject'] ?? null;
        $this->relatedObjectUuid = $values['relatedObjectUuid'] ?? null;
        $this->note = $values['note'] ?? null;
        $this->actionRequired = $values['actionRequired'] ?? null;
        $this->actionCompletedByStaffUuid = $values['actionCompletedByStaffUuid'] ?? null;
        $this->editByStaffUuid = $values['editByStaffUuid'] ?? null;
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
