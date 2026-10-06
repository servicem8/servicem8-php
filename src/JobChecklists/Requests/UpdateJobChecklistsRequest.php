<?php

namespace ServiceM8\JobChecklists\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\JobChecklistCreate;

class UpdateJobChecklistsRequest extends JsonSerializableType
{
    /**
     * @var JobChecklistCreate $body
     */
    public JobChecklistCreate $body;

    /**
     * @param array{
     *   body: JobChecklistCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
