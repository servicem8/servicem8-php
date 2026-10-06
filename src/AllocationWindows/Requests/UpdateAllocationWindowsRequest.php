<?php

namespace ServiceM8\AllocationWindows\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\AllocationWindowCreate;

class UpdateAllocationWindowsRequest extends JsonSerializableType
{
    /**
     * @var AllocationWindowCreate $body
     */
    public AllocationWindowCreate $body;

    /**
     * @param array{
     *   body: AllocationWindowCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
