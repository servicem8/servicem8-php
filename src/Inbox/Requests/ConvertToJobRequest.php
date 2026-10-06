<?php

namespace ServiceM8\Inbox\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class ConvertToJobRequest extends JsonSerializableType
{
    /**
     * @var ?string $templateUuid
     */
    #[JsonProperty('template_uuid')]
    public ?string $templateUuid;

    /**
     * @var ?string $note
     */
    #[JsonProperty('note')]
    public ?string $note;

    /**
     * @param array{
     *   templateUuid?: ?string,
     *   note?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->templateUuid = $values['templateUuid'] ?? null;
        $this->note = $values['note'] ?? null;
    }
}
