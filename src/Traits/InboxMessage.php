<?php

namespace ServiceM8\Traits;

use DateTime;
use ServiceM8\Types\InboxMessageMessageType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\Date;

/**
 * @property ?string $uuid
 * @property ?bool $active
 * @property ?DateTime $editDate
 * @property ?DateTime $timestamp
 * @property ?DateTime $readTimestamp
 * @property ?DateTime $lastReplyTimestamp
 * @property ?DateTime $snoozeUntilTimestamp
 * @property ?string $readByStaffUuid
 * @property ?string $fromName
 * @property ?string $fromEmail
 * @property ?string $toEmail
 * @property ?string $subject
 * @property ?string $messageText
 * @property ?string $messageHtml
 * @property ?bool $isArchived
 * @property ?DateTime $archivedTimestamp
 * @property ?string $archivedByStaffUuid
 * @property ?string $regardingCompanyUuid
 * @property ?string $convertedToJobUuid
 * @property ?string $jobTemplateUuid
 * @property ?value-of<InboxMessageMessageType> $messageType
 */
trait InboxMessage
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
}
