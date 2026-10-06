<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\ArrayType;

class EmbeddingSearchResponse extends JsonSerializableType
{
    /**
     * @var array<EmbeddingSearchResult> $results
     */
    #[JsonProperty('results'), ArrayType([EmbeddingSearchResult::class])]
    public array $results;

    /**
     * @var string $query The search query that was used
     */
    #[JsonProperty('query')]
    public string $query;

    /**
     * @var int $count Number of results returned
     */
    #[JsonProperty('count')]
    public int $count;

    /**
     * @var string $searchType Type of search performed
     */
    #[JsonProperty('searchType')]
    public string $searchType;

    /**
     * @param array{
     *   results: array<EmbeddingSearchResult>,
     *   query: string,
     *   count: int,
     *   searchType: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->results = $values['results'];
        $this->query = $values['query'];
        $this->count = $values['count'];
        $this->searchType = $values['searchType'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
