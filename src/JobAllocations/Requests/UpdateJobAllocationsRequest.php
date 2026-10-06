<?php

namespace ServiceM8\JobAllocations\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\JobAllocationCreate;

class UpdateJobAllocationsRequest extends JsonSerializableType
{
    /**
     * @var JobAllocationCreate $body
     */
    public JobAllocationCreate $body;

    /**
     * @param array{
     *   body: JobAllocationCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
