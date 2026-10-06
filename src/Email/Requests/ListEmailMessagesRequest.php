<?php

namespace ServiceM8\Email\Requests;

use ServiceM8\Core\Json\JsonSerializableType;

class ListEmailMessagesRequest extends JsonSerializableType
{
    /**
     * @var ?string $cursor Cursor value for merged email pagination. Use -1 to start a cursor walk.
     */
    public ?string $cursor;

    /**
     * @var ?int $limit Maximum number of records to return.
     */
    public ?int $limit;

    /**
     * @var ?string $filter OData filter expression. Supports eq conditions for direction, related_object, and related_object_uuid joined with and.
     */
    public ?string $filter;

    /**
     * @param array{
     *   cursor?: ?string,
     *   limit?: ?int,
     *   filter?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->cursor = $values['cursor'] ?? null;
        $this->limit = $values['limit'] ?? null;
        $this->filter = $values['filter'] ?? null;
    }
}
