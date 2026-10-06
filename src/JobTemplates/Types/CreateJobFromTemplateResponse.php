<?php

namespace ServiceM8\JobTemplates\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class CreateJobFromTemplateResponse extends JsonSerializableType
{
    /**
     * @var string $jobUuid UUID of the created job
     */
    #[JsonProperty('jobUUID')]
    public string $jobUuid;

    /**
     * @var string $location API path to the created job resource
     */
    #[JsonProperty('location')]
    public string $location;

    /**
     * @var string $message Success message
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @param array{
     *   jobUuid: string,
     *   location: string,
     *   message: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->jobUuid = $values['jobUuid'];
        $this->location = $values['location'];
        $this->message = $values['message'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
