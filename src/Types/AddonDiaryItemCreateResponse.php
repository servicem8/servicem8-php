<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class AddonDiaryItemCreateResponse extends JsonSerializableType
{
    /**
     * @var bool $created
     */
    #[JsonProperty('created')]
    public bool $created;

    /**
     * @var string $uuid UUID of the created immutable Diary item.
     */
    #[JsonProperty('uuid')]
    public string $uuid;

    /**
     * @param array{
     *   created: bool,
     *   uuid: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->created = $values['created'];
        $this->uuid = $values['uuid'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
