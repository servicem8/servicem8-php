<?php

namespace ServiceM8\Inbox\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\ArrayType;
use ServiceM8\Inbox\Types\CreateInboxMessageRequestJobData;

class CreateInboxMessageRequest extends JsonSerializableType
{
    /**
     * @var string $subject Subject of the message
     */
    #[JsonProperty('subject')]
    public string $subject;

    /**
     * @var string $messageText Plain text content of the message
     */
    #[JsonProperty('message_text')]
    public string $messageText;

    /**
     * @var ?string $fromName Name of the sender
     */
    #[JsonProperty('from_name')]
    public ?string $fromName;

    /**
     * @var ?string $fromEmail Email address of the sender
     */
    #[JsonProperty('from_email')]
    public ?string $fromEmail;

    /**
     * @var ?array<string, mixed> $jsonData Additional data to be used when converting the message to a job
     */
    #[JsonProperty('json_data'), ArrayType(['string' => 'mixed'])]
    public ?array $jsonData;

    /**
     * @var ?CreateInboxMessageRequestJobData $jobData Structured job data that will be merged into json_data when converting the message to a job
     */
    #[JsonProperty('jobData')]
    public ?CreateInboxMessageRequestJobData $jobData;

    /**
     * @var ?string $regardingCompanyUuid UUID of the company this message is regarding
     */
    #[JsonProperty('regarding_company_uuid')]
    public ?string $regardingCompanyUuid;

    /**
     * @param array{
     *   subject: string,
     *   messageText: string,
     *   fromName?: ?string,
     *   fromEmail?: ?string,
     *   jsonData?: ?array<string, mixed>,
     *   jobData?: ?CreateInboxMessageRequestJobData,
     *   regardingCompanyUuid?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->subject = $values['subject'];
        $this->messageText = $values['messageText'];
        $this->fromName = $values['fromName'] ?? null;
        $this->fromEmail = $values['fromEmail'] ?? null;
        $this->jsonData = $values['jsonData'] ?? null;
        $this->jobData = $values['jobData'] ?? null;
        $this->regardingCompanyUuid = $values['regardingCompanyUuid'] ?? null;
    }
}
