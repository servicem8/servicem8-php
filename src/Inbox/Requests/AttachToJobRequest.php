<?php

namespace ServiceM8\Inbox\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class AttachToJobRequest extends JsonSerializableType
{
    /**
     * @var string $jobUuid
     */
    #[JsonProperty('job_uuid')]
    public string $jobUuid;

    /**
     * @param array{
     *   jobUuid: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->jobUuid = $values['jobUuid'];
    }
}
