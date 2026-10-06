<?php

namespace ServiceM8\JobActivities\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\JobActivityCreate;

class UpdateJobActivitiesRequest extends JsonSerializableType
{
    /**
     * @var JobActivityCreate $body
     */
    public JobActivityCreate $body;

    /**
     * @param array{
     *   body: JobActivityCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
