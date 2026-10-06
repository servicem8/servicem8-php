<?php

namespace ServiceM8\Inbox\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class ArchiveRequest extends JsonSerializableType
{
    /**
     * @var ?bool $archived
     */
    #[JsonProperty('archived')]
    public ?bool $archived;

    /**
     * @var ?string $reason
     */
    #[JsonProperty('reason')]
    public ?string $reason;

    /**
     * @param array{
     *   archived?: ?bool,
     *   reason?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->archived = $values['archived'] ?? null;
        $this->reason = $values['reason'] ?? null;
    }
}
