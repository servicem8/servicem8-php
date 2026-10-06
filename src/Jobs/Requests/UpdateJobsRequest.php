<?php

namespace ServiceM8\Jobs\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\JobCreate;

class UpdateJobsRequest extends JsonSerializableType
{
    /**
     * @var JobCreate $body
     */
    public JobCreate $body;

    /**
     * @param array{
     *   body: JobCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
