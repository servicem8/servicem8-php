<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\ArrayType;

class EmailRecord extends JsonSerializableType
{
    /**
     * @var string $uuid
     */
    #[JsonProperty('uuid')]
    public string $uuid;

    /**
     * @var 'job' $relatedObject
     */
    #[JsonProperty('related_object')]
    public string $relatedObject;

    /**
     * @var string $relatedObjectUuid
     */
    #[JsonProperty('related_object_uuid')]
    public string $relatedObjectUuid;

    /**
     * @var string $timestamp Account-local datetime string in YYYY-MM-DD HH:MM:SS format.
     */
    #[JsonProperty('timestamp')]
    public string $timestamp;

    /**
     * @var value-of<EmailRecordDirection> $direction
     */
    #[JsonProperty('direction')]
    public string $direction;

    /**
     * @var ?string $sentByStaffUuid
     */
    #[JsonProperty('sent_by_staff_uuid')]
    public ?string $sentByStaffUuid;

    /**
     * @var ?bool $opened Whether an outbound email has been opened. Null for inbound email records.
     */
    #[JsonProperty('opened')]
    public ?bool $opened;

    /**
     * @var ?string $firstOpenedAt Account-local datetime string in YYYY-MM-DD HH:MM:SS format for the first tracked open of an outbound email. Null when unopened or not applicable.
     */
    #[JsonProperty('first_opened_at')]
    public ?string $firstOpenedAt;

    /**
     * @var ?bool $bounced Whether an outbound email has bounced. Null for inbound email records.
     */
    #[JsonProperty('bounced')]
    public ?bool $bounced;

    /**
     * @var ?array<string> $toEmail
     */
    #[JsonProperty('to_email'), ArrayType(['string'])]
    public ?array $toEmail;

    /**
     * @var ?array<string> $ccEmail
     */
    #[JsonProperty('cc_email'), ArrayType(['string'])]
    public ?array $ccEmail;

    /**
     * @var ?array<string> $bccEmail
     */
    #[JsonProperty('bcc_email'), ArrayType(['string'])]
    public ?array $bccEmail;

    /**
     * @var ?string $fromEmail
     */
    #[JsonProperty('from_email')]
    public ?string $fromEmail;

    /**
     * @var string $subject
     */
    #[JsonProperty('subject')]
    public string $subject;

    /**
     * @var string $messageText
     */
    #[JsonProperty('message_text')]
    public string $messageText;

    /**
     * @var string $messageHtml
     */
    #[JsonProperty('message_html')]
    public string $messageHtml;

    /**
     * @var array<string> $attachmentUuids
     */
    #[JsonProperty('attachment_uuids'), ArrayType(['string'])]
    public array $attachmentUuids;

    /**
     * @param array{
     *   uuid: string,
     *   relatedObject: 'job',
     *   relatedObjectUuid: string,
     *   timestamp: string,
     *   direction: value-of<EmailRecordDirection>,
     *   subject: string,
     *   messageText: string,
     *   messageHtml: string,
     *   attachmentUuids: array<string>,
     *   sentByStaffUuid?: ?string,
     *   opened?: ?bool,
     *   firstOpenedAt?: ?string,
     *   bounced?: ?bool,
     *   toEmail?: ?array<string>,
     *   ccEmail?: ?array<string>,
     *   bccEmail?: ?array<string>,
     *   fromEmail?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->uuid = $values['uuid'];
        $this->relatedObject = $values['relatedObject'];
        $this->relatedObjectUuid = $values['relatedObjectUuid'];
        $this->timestamp = $values['timestamp'];
        $this->direction = $values['direction'];
        $this->sentByStaffUuid = $values['sentByStaffUuid'] ?? null;
        $this->opened = $values['opened'] ?? null;
        $this->firstOpenedAt = $values['firstOpenedAt'] ?? null;
        $this->bounced = $values['bounced'] ?? null;
        $this->toEmail = $values['toEmail'] ?? null;
        $this->ccEmail = $values['ccEmail'] ?? null;
        $this->bccEmail = $values['bccEmail'] ?? null;
        $this->fromEmail = $values['fromEmail'] ?? null;
        $this->subject = $values['subject'];
        $this->messageText = $values['messageText'];
        $this->messageHtml = $values['messageHtml'];
        $this->attachmentUuids = $values['attachmentUuids'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
