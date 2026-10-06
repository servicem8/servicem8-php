<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class CategoryCreate extends JsonSerializableType
{
    /**
     * @var string $name The name of the job category. Used to classify and organize jobs.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $colour The colour associated with this job category. This colour is used to visually identify the category on the dispatch board and in calendar views. The value is a hexadecimal colour code (6 characters 0-9a-f).
     */
    #[JsonProperty('colour')]
    public ?string $colour;

    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @param array{
     *   name: string,
     *   colour?: ?string,
     *   uuid?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->colour = $values['colour'] ?? null;
        $this->uuid = $values['uuid'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
