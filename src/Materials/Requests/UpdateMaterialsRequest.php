<?php

namespace ServiceM8\Materials\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\MaterialCreate;

class UpdateMaterialsRequest extends JsonSerializableType
{
    /**
     * @var MaterialCreate $body
     */
    public MaterialCreate $body;

    /**
     * @param array{
     *   body: MaterialCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
