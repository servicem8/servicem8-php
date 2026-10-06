<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class AttachToJobResponseJob extends JsonSerializableType
{
    /**
     * @var ?string $uuid
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var ?int $id
     */
    #[JsonProperty('id')]
    public ?int $id;

    /**
     * @var ?string $location
     */
    #[JsonProperty('location')]
    public ?string $location;

    /**
     * @param array{
     *   uuid?: ?string,
     *   id?: ?int,
     *   location?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->id = $values['id'] ?? null;
        $this->location = $values['location'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
