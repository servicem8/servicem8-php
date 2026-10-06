<?php

namespace ServiceM8\JobContacts\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\JobContactCreate;

class UpdateJobContactsRequest extends JsonSerializableType
{
    /**
     * @var JobContactCreate $body
     */
    public JobContactCreate $body;

    /**
     * @param array{
     *   body: JobContactCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
