<?php

namespace ServiceM8\ServiceTemplates\Requests;

use ServiceM8\Core\Json\JsonSerializableType;

class ListServiceTemplatesRequest extends JsonSerializableType
{
    /**
     * @var ?string $cursor Set to -1 on the first request to enable cursor pagination. Use the x-next-cursor response header value for the next page.
     */
    public ?string $cursor;

    /**
     * @var ?int $limit Maximum records to return when cursor pagination is enabled.
     */
    public ?int $limit;

    /**
     * @var ?string $filter OData-style filter on top-level Service fields.
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
