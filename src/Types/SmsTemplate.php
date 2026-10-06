<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class SmsTemplate extends JsonSerializableType
{
    /**
     * @var string $name The name of the SMS template. This is a unique identifier for the template within the system. Examples include 'Tech Delayed Template', 'Parts Ordered Template', etc.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $message The SMS message content that will be sent to recipients. Supports template variables like {job.contact_first}, {vendor.name}, {job.generated_job_id}, {job.total_price}, etc. Maximum length is determined by the SMS service provider's limit. Messages exceeding this limit will not be saved.
     */
    #[JsonProperty('message')]
    public ?string $message;

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
     * @param array{
     *   name: string,
     *   message?: ?string,
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->message = $values['message'] ?? null;
        $this->uuid = $values['uuid'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
