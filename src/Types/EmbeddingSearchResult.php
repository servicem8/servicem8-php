<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class EmbeddingSearchResult extends JsonSerializableType
{
    /**
     * @var string $uuid UUID of the found job
     */
    #[JsonProperty('uuid')]
    public string $uuid;

    /**
     * @var string $type Type of the object
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $title Title of the job
     */
    #[JsonProperty('title')]
    public string $title;

    /**
     * @var ?string $description Job description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $status Current job status
     */
    #[JsonProperty('status')]
    public ?string $status;

    /**
     * @var float $similarityScore Similarity score between 0.0 and 1.0
     */
    #[JsonProperty('similarity_score')]
    public float $similarityScore;

    /**
     * @var ?string $matchedContent The content that was matched in the embedding search
     */
    #[JsonProperty('matched_content')]
    public ?string $matchedContent;

    /**
     * @param array{
     *   uuid: string,
     *   type: string,
     *   title: string,
     *   similarityScore: float,
     *   description?: ?string,
     *   status?: ?string,
     *   matchedContent?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->uuid = $values['uuid'];
        $this->type = $values['type'];
        $this->title = $values['title'];
        $this->description = $values['description'] ?? null;
        $this->status = $values['status'] ?? null;
        $this->similarityScore = $values['similarityScore'];
        $this->matchedContent = $values['matchedContent'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
