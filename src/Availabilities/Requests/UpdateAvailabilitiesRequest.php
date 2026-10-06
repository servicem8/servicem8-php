<?php

namespace ServiceM8\Availabilities\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\AvailabilityCreate;

class UpdateAvailabilitiesRequest extends JsonSerializableType
{
    /**
     * @var AvailabilityCreate $body
     */
    public AvailabilityCreate $body;

    /**
     * @param array{
     *   body: AvailabilityCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
