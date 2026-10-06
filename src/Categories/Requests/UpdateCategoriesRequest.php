<?php

namespace ServiceM8\Categories\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\CategoryCreate;

class UpdateCategoriesRequest extends JsonSerializableType
{
    /**
     * @var CategoryCreate $body
     */
    public CategoryCreate $body;

    /**
     * @param array{
     *   body: CategoryCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
