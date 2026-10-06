<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\ArrayType;

class SearchResult extends JsonSerializableType
{
    /**
     * @var string $uuid UUID of the found object
     */
    #[JsonProperty('uuid')]
    public string $uuid;

    /**
     * @var string $type Type of the object
     */
    #[JsonProperty('type')]
    public string $type;

    /**
     * @var string $title Title of the object
     */
    #[JsonProperty('title')]
    public string $title;

    /**
     * @var ?array<string, mixed> $highlights Highlighted text snippets that matched the query
     */
    #[JsonProperty('highlights'), ArrayType(['string' => 'mixed'])]
    public ?array $highlights;

    /**
     * @param array{
     *   uuid: string,
     *   type: string,
     *   title: string,
     *   highlights?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->uuid = $values['uuid'];
        $this->type = $values['type'];
        $this->title = $values['title'];
        $this->highlights = $values['highlights'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
