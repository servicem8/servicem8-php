<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class StaffMessageAttachmentsItem extends JsonSerializableType
{
    /**
     * @var string $attachmentUuid
     */
    #[JsonProperty('attachment_uuid')]
    public string $attachmentUuid;

    /**
     * @var ?string $type
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?int $size
     */
    #[JsonProperty('size')]
    public ?int $size;

    /**
     * @param array{
     *   attachmentUuid: string,
     *   type?: ?string,
     *   name?: ?string,
     *   size?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->attachmentUuid = $values['attachmentUuid'];
        $this->type = $values['type'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->size = $values['size'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
