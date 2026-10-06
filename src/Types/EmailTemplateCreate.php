<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class EmailTemplateCreate extends JsonSerializableType
{
    /**
     * @var string $name Unique name of the email template. Used to identify and select the template in the system. This field is mandatory and must be unique among all email templates in the account.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $subject Subject line for the email template. Supports variable placeholders like {job.job_address} which are replaced with actual values when the email is generated. This field defines what appears in the subject line of emails sent using this template.
     */
    #[JsonProperty('subject')]
    public ?string $subject;

    /**
     * @var ?string $message The HTML body content of the email template. Supports rich text formatting and variable placeholders like {job.contact_first}, {document}, {vendor.name}, etc., which are replaced with actual values when the email is generated.
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @param array{
     *   name: string,
     *   subject?: ?string,
     *   message?: ?string,
     *   uuid?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->subject = $values['subject'] ?? null;
        $this->message = $values['message'] ?? null;
        $this->uuid = $values['uuid'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
