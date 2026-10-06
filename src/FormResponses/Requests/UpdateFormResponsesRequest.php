<?php

namespace ServiceM8\FormResponses\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\FormResponseCreate;

class UpdateFormResponsesRequest extends JsonSerializableType
{
    /**
     * @var FormResponseCreate $body
     */
    public FormResponseCreate $body;

    /**
     * @param array{
     *   body: FormResponseCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
