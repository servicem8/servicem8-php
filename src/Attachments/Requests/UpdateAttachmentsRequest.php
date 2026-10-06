<?php

namespace ServiceM8\Attachments\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\AttachmentCreate;

class UpdateAttachmentsRequest extends JsonSerializableType
{
    /**
     * @var AttachmentCreate $body
     */
    public AttachmentCreate $body;

    /**
     * @param array{
     *   body: AttachmentCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
