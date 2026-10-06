<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class InboxMessageCreate extends JsonSerializableType
{
    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var ?string $timestamp
     */
    #[JsonProperty('timestamp')]
    public ?string $timestamp;

    /**
     * @var ?string $readTimestamp
     */
    #[JsonProperty('read_timestamp')]
    public ?string $readTimestamp;

    /**
     * @var ?string $lastReplyTimestamp
     */
    #[JsonProperty('last_reply_timestamp')]
    public ?string $lastReplyTimestamp;

    /**
     * @var ?string $snoozeUntilTimestamp
     */
    #[JsonProperty('snooze_until_timestamp')]
    public ?string $snoozeUntilTimestamp;

    /**
     * @var ?string $readByStaffUuid
     */
    #[JsonProperty('read_by_staff_uuid')]
    public ?string $readByStaffUuid;

    /**
     * @var ?string $fromName The name of the sender.
     */
    #[JsonProperty('from_name')]
    public ?string $fromName;

    /**
     * @var ?string $fromEmail The email address of the sender.
     */
    #[JsonProperty('from_email')]
    public ?string $fromEmail;

    /**
     * @var ?string $toEmail The email address of the recipient.
     */
    #[JsonProperty('to_email')]
    public ?string $toEmail;

    /**
     * @var ?string $subject The subject line of the message.
     */
    #[JsonProperty('subject')]
    public ?string $subject;

    /**
     * @var ?string $messageText The plain text content of the message.
     */
    #[JsonProperty('message_text')]
    public ?string $messageText;

    /**
     * @var ?string $messageHtml The HTML content of the message.
     */
    #[JsonProperty('message_html')]
    public ?string $messageHtml;

    /**
     * @var ?string $isArchived
     */
    #[JsonProperty('is_archived')]
    public ?string $isArchived;

    /**
     * @var ?string $archivedTimestamp
     */
    #[JsonProperty('archived_timestamp')]
    public ?string $archivedTimestamp;

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
     * @var ?string $messageType
     */
    #[JsonProperty('message_type')]
    public ?string $messageType;

    /**
     * @param array{
     *   uuid?: ?string,
     *   timestamp?: ?string,
     *   readTimestamp?: ?string,
     *   lastReplyTimestamp?: ?string,
     *   snoozeUntilTimestamp?: ?string,
     *   readByStaffUuid?: ?string,
     *   fromName?: ?string,
     *   fromEmail?: ?string,
     *   toEmail?: ?string,
     *   subject?: ?string,
     *   messageText?: ?string,
     *   messageHtml?: ?string,
     *   isArchived?: ?string,
     *   archivedTimestamp?: ?string,
     *   archivedByStaffUuid?: ?string,
     *   regardingCompanyUuid?: ?string,
     *   convertedToJobUuid?: ?string,
     *   jobTemplateUuid?: ?string,
     *   messageType?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->uuid = $values['uuid'] ?? null;
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
