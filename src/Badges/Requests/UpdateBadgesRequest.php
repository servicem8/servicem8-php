<?php

namespace ServiceM8\Badges\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\BadgeCreate;

class UpdateBadgesRequest extends JsonSerializableType
{
    /**
     * @var BadgeCreate $body
     */
    public BadgeCreate $body;

    /**
     * @param array{
     *   body: BadgeCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
