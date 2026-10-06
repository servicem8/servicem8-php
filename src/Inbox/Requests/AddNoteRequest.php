<?php

namespace ServiceM8\Inbox\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class AddNoteRequest extends JsonSerializableType
{
    /**
     * @var string $note
     */
    #[JsonProperty('note')]
    public string $note;

    /**
     * @param array{
     *   note: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->note = $values['note'];
    }
}
