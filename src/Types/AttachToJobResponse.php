<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class AttachToJobResponse extends JsonSerializableType
{
    /**
     * @var ?bool $success
     */
    #[JsonProperty('success')]
    public ?bool $success;

    /**
     * @var ?AttachToJobResponseJob $job
     */
    #[JsonProperty('job')]
    public ?AttachToJobResponseJob $job;

    /**
     * @var ?string $message
     */
    #[JsonProperty('message')]
    public ?string $message;

    /**
     * @param array{
     *   success?: ?bool,
     *   job?: ?AttachToJobResponseJob,
     *   message?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->success = $values['success'] ?? null;
        $this->job = $values['job'] ?? null;
        $this->message = $values['message'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
