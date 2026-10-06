<?php

namespace ServiceM8\Inbox\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Inbox\Types\ListInboxMessagesRequestFilter;

class ListInboxMessagesRequest extends JsonSerializableType
{
    /**
     * @var ?int $limit Maximum number of messages to return (1-500)
     */
    public ?int $limit;

    /**
     * @var ?int $offset Number of messages to skip for pagination
     */
    public ?int $offset;

    /**
     * @var ?value-of<ListInboxMessagesRequestFilter> $filter Filter messages by status
     */
    public ?string $filter;

    /**
     * @var ?string $search Search messages by subject, from name, or from email
     */
    public ?string $search;

    /**
     * @param array{
     *   limit?: ?int,
     *   offset?: ?int,
     *   filter?: ?value-of<ListInboxMessagesRequestFilter>,
     *   search?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->limit = $values['limit'] ?? null;
        $this->offset = $values['offset'] ?? null;
        $this->filter = $values['filter'] ?? null;
        $this->search = $values['search'] ?? null;
    }
}
