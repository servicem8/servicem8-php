<?php

namespace ServiceM8\Search\Requests;

use ServiceM8\Core\Json\JsonSerializableType;

class GeneralSearchRequest extends JsonSerializableType
{
    /**
     * @var string $q Search query string
     */
    public string $q;

    /**
     * @var ?int $limit Maximum number of results to return (max 50)
     */
    public ?int $limit;

    /**
     * @param array{
     *   q: string,
     *   limit?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->q = $values['q'];
        $this->limit = $values['limit'] ?? null;
    }
}
