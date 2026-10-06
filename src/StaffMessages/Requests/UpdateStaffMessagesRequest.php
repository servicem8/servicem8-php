<?php

namespace ServiceM8\StaffMessages\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\StaffMessageCreate;

class UpdateStaffMessagesRequest extends JsonSerializableType
{
    /**
     * @var StaffMessageCreate $body
     */
    public StaffMessageCreate $body;

    /**
     * @param array{
     *   body: StaffMessageCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
