<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;

class EmptyObject extends JsonSerializableType
{
    /**
     * @param array{
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        unset($values);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
