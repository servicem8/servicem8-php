<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\ArrayType;

class StaffMessage extends JsonSerializableType
{
    /**
     * @var string $fromStaffUuid Unique identifier (UUID) of the staff member who sent this message. Identifies the sender of the communication within the system.
     */
    #[JsonProperty('from_staff_uuid')]
    public string $fromStaffUuid;

    /**
     * @var string $toStaffUuid Unique identifier (UUID) of the staff member who received this message. Identifies the intended recipient of the communication.
     */
    #[JsonProperty('to_staff_uuid')]
    public string $toStaffUuid;

    /**
     * @var ?string $sentTimestamp The date and time when the message was sent. Format is YYYY-MM-DD HH:MM:SS. This field is automatically set to the current time when a new message is created.
     */
    #[JsonProperty('sent_timestamp')]
    public ?string $sentTimestamp;

    /**
     * @var ?string $deliveredTimestamp The date and time when the message was delivered to the recipient's device. Format is YYYY-MM-DD HH:MM:SS. This field may be null if delivery confirmation is not available.
     */
    #[JsonProperty('delivered_timestamp')]
    public ?string $deliveredTimestamp;

    /**
     * @var ?string $readTimestamp The date and time when the message was read by the recipient. Format is YYYY-MM-DD HH:MM:SS. This field may be null if the message has not been read or if read receipts are not available.
     */
    #[JsonProperty('read_timestamp')]
    public ?string $readTimestamp;

    /**
     * @var ?string $message The text content of the message. Supports Unicode characters for international language support. This field contains the actual message being sent between staff members.
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @var ?string $regardingJobUuid Unique identifier (UUID) of the job this message is related to. Optional field that links the message to a specific job for context. This field may be null if the message is not related to a specific job.
     */
    #[JsonProperty('regarding_job_uuid')]
    public ?string $regardingJobUuid;

    /**
     * @var ?string $attachedJson JSON metadata associated with the message (e.g., attachments, extra context).
     */
    #[JsonProperty('attached_json')]
    public ?string $attachedJson;

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
     * @var ?array<StaffMessageAttachmentsItem> $attachments Read-only metadata for attachments included with the staff message.
     */
    #[JsonProperty('attachments'), ArrayType([StaffMessageAttachmentsItem::class])]
    public ?array $attachments;

    /**
     * @param array{
     *   fromStaffUuid: string,
     *   toStaffUuid: string,
     *   sentTimestamp?: ?string,
     *   deliveredTimestamp?: ?string,
     *   readTimestamp?: ?string,
     *   message?: ?string,
     *   regardingJobUuid?: ?string,
     *   attachedJson?: ?string,
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     *   attachments?: ?array<StaffMessageAttachmentsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fromStaffUuid = $values['fromStaffUuid'];
        $this->toStaffUuid = $values['toStaffUuid'];
        $this->sentTimestamp = $values['sentTimestamp'] ?? null;
        $this->deliveredTimestamp = $values['deliveredTimestamp'] ?? null;
        $this->readTimestamp = $values['readTimestamp'] ?? null;
        $this->message = $values['message'] ?? null;
        $this->regardingJobUuid = $values['regardingJobUuid'] ?? null;
        $this->attachedJson = $values['attachedJson'] ?? null;
        $this->uuid = $values['uuid'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
        $this->attachments = $values['attachments'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
