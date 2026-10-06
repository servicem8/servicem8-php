<?php

namespace ServiceM8\FormFields\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\FormFieldCreate;

class UpdateFormFieldsRequest extends JsonSerializableType
{
    /**
     * @var FormFieldCreate $body
     */
    public FormFieldCreate $body;

    /**
     * @param array{
     *   body: FormFieldCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
