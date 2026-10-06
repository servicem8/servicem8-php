<?php

namespace ServiceM8\Sms\Requests;

use ServiceM8\Core\Json\JsonSerializableType;

class ListSmsMessagesRequest extends JsonSerializableType
{
    /**
     * @var ?string $cursor Cursor value for merged SMS pagination. Use -1 to start a cursor walk.
     */
    public ?string $cursor;

    /**
     * @var ?int $limit Maximum number of records to return.
     */
    public ?int $limit;

    /**
     * @var ?string $filter Limited OData filter. Supported fields: direction, related_object (job only), related_object_uuid. Conditions must use eq and may be joined with and.
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
