<?php

namespace ServiceM8\JobQueues\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\QueueCreate;

class UpdateJobQueuesRequest extends JsonSerializableType
{
    /**
     * @var QueueCreate $body
     */
    public QueueCreate $body;

    /**
     * @param array{
     *   body: QueueCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
