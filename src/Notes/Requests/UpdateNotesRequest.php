<?php

namespace ServiceM8\Notes\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\NoteCreate;

class UpdateNotesRequest extends JsonSerializableType
{
    /**
     * @var NoteCreate $body
     */
    public NoteCreate $body;

    /**
     * @param array{
     *   body: NoteCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
