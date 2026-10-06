<?php

namespace ServiceM8\Search\Requests;

use ServiceM8\Core\Json\JsonSerializableType;

class JobEmbeddingSearchRequest extends JsonSerializableType
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
     * @var ?float $similarityThreshold Minimum similarity score (0.0 to 1.0)
     */
    public ?float $similarityThreshold;

    /**
     * @param array{
     *   q: string,
     *   limit?: ?int,
     *   similarityThreshold?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->q = $values['q'];
        $this->limit = $values['limit'] ?? null;
        $this->similarityThreshold = $values['similarityThreshold'] ?? null;
    }
}
