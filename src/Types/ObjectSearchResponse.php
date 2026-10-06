<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\ArrayType;

class ObjectSearchResponse extends JsonSerializableType
{
    /**
     * @var array<SearchResult> $results
     */
    #[JsonProperty('results'), ArrayType([SearchResult::class])]
    public array $results;

    /**
     * @var string $query The search query that was used
     */
    #[JsonProperty('query')]
    public string $query;

    /**
     * @var string $objectType The object type that was searched
     */
    #[JsonProperty('objectType')]
    public string $objectType;

    /**
     * @var int $count Number of results returned
     */
    #[JsonProperty('count')]
    public int $count;

    /**
     * @param array{
     *   results: array<SearchResult>,
     *   query: string,
     *   objectType: string,
     *   count: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->results = $values['results'];
        $this->query = $values['query'];
        $this->objectType = $values['objectType'];
        $this->count = $values['count'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
