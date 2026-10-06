<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use DateTime;
use ServiceM8\Core\Types\Date;

class InboxMessage extends JsonSerializableType
{
    /**
     * @var ?string $uuid
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var ?bool $active
     */
    #[JsonProperty('active')]
    public ?bool $active;

    /**
     * @var ?DateTime $editDate
     */
    #[JsonProperty('edit_date'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $editDate;

    /**
     * @var ?DateTime $timestamp
     */
    #[JsonProperty('timestamp'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $timestamp;

    /**
     * @var ?DateTime $readTimestamp
     */
    #[JsonProperty('read_timestamp'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $readTimestamp;

    /**
     * @var ?DateTime $lastReplyTimestamp
     */
    #[JsonProperty('last_reply_timestamp'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $lastReplyTimestamp;

    /**
     * @var ?DateTime $snoozeUntilTimestamp
     */
    #[JsonProperty('snooze_until_timestamp'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $snoozeUntilTimestamp;

    /**
     * @var ?string $readByStaffUuid
     */
    #[JsonProperty('read_by_staff_uuid')]
    public ?string $readByStaffUuid;

    /**
     * @var ?string $fromName
     */
    #[JsonProperty('from_name')]
    public ?string $fromName;

    /**
     * @var ?string $fromEmail
     */
    #[JsonProperty('from_email')]
    public ?string $fromEmail;

    /**
     * @var ?string $toEmail
     */
    #[JsonProperty('to_email')]
    public ?string $toEmail;

    /**
     * @var ?string $subject
     */
    #[JsonProperty('subject')]
    public ?string $subject;

    /**
     * @var ?string $messageText
     */
    #[JsonProperty('message_text')]
    public ?string $messageText;

    /**
     * @var ?string $messageHtml
     */
    #[JsonProperty('message_html')]
    public ?string $messageHtml;

    /**
     * @var ?bool $isArchived
     */
    #[JsonProperty('is_archived')]
    public ?bool $isArchived;

    /**
     * @var ?DateTime $archivedTimestamp
     */
    #[JsonProperty('archived_timestamp'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $archivedTimestamp;

    /**
     * @var ?string $archivedByStaffUuid
     */
    #[JsonProperty('archived_by_staff_uuid')]
    public ?string $archivedByStaffUuid;

    /**
     * @var ?string $regardingCompanyUuid
     */
    #[JsonProperty('regarding_company_uuid')]
    public ?string $regardingCompanyUuid;

    /**
     * @var ?string $convertedToJobUuid
     */
    #[JsonProperty('converted_to_job_uuid')]
    public ?string $convertedToJobUuid;

    /**
     * @var ?string $jobTemplateUuid
     */
    #[JsonProperty('job_template_uuid')]
    public ?string $jobTemplateUuid;

    /**
     * @var ?value-of<InboxMessageMessageType> $messageType
     */
    #[JsonProperty('message_type')]
    public ?string $messageType;

    /**
     * @param array{
     *   uuid?: ?string,
     *   active?: ?bool,
     *   editDate?: ?DateTime,
     *   timestamp?: ?DateTime,
     *   readTimestamp?: ?DateTime,
     *   lastReplyTimestamp?: ?DateTime,
     *   snoozeUntilTimestamp?: ?DateTime,
     *   readByStaffUuid?: ?string,
     *   fromName?: ?string,
     *   fromEmail?: ?string,
     *   toEmail?: ?string,
     *   subject?: ?string,
     *   messageText?: ?string,
     *   messageHtml?: ?string,
     *   isArchived?: ?bool,
     *   archivedTimestamp?: ?DateTime,
     *   archivedByStaffUuid?: ?string,
     *   regardingCompanyUuid?: ?string,
     *   convertedToJobUuid?: ?string,
     *   jobTemplateUuid?: ?string,
     *   messageType?: ?value-of<InboxMessageMessageType>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
        $this->timestamp = $values['timestamp'] ?? null;
        $this->readTimestamp = $values['readTimestamp'] ?? null;
        $this->lastReplyTimestamp = $values['lastReplyTimestamp'] ?? null;
        $this->snoozeUntilTimestamp = $values['snoozeUntilTimestamp'] ?? null;
        $this->readByStaffUuid = $values['readByStaffUuid'] ?? null;
        $this->fromName = $values['fromName'] ?? null;
        $this->fromEmail = $values['fromEmail'] ?? null;
        $this->toEmail = $values['toEmail'] ?? null;
        $this->subject = $values['subject'] ?? null;
        $this->messageText = $values['messageText'] ?? null;
        $this->messageHtml = $values['messageHtml'] ?? null;
        $this->isArchived = $values['isArchived'] ?? null;
        $this->archivedTimestamp = $values['archivedTimestamp'] ?? null;
        $this->archivedByStaffUuid = $values['archivedByStaffUuid'] ?? null;
        $this->regardingCompanyUuid = $values['regardingCompanyUuid'] ?? null;
        $this->convertedToJobUuid = $values['convertedToJobUuid'] ?? null;
        $this->jobTemplateUuid = $values['jobTemplateUuid'] ?? null;
        $this->messageType = $values['messageType'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
