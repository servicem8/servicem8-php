<?php

namespace ServiceM8\StaffMembers\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\StaffCreate;

class UpdateStaffMembersRequest extends JsonSerializableType
{
    /**
     * @var StaffCreate $body
     */
    public StaffCreate $body;

    /**
     * @param array{
     *   body: StaffCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
