<?php

namespace ServiceM8\Locations\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\LocationCreate;

class UpdateLocationsRequest extends JsonSerializableType
{
    /**
     * @var LocationCreate $body
     */
    public LocationCreate $body;

    /**
     * @param array{
     *   body: LocationCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
