<?php

namespace ServiceM8\Tasks\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\TaskCreate;

class UpdateTasksRequest extends JsonSerializableType
{
    /**
     * @var TaskCreate $body
     */
    public TaskCreate $body;

    /**
     * @param array{
     *   body: TaskCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
