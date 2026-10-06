<?php

namespace ServiceM8\Forms\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\FormCreate;

class UpdateFormsRequest extends JsonSerializableType
{
    /**
     * @var FormCreate $body
     */
    public FormCreate $body;

    /**
     * @param array{
     *   body: FormCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
