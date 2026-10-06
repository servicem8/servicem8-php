<?php

namespace ServiceM8\EmailTemplates\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\EmailTemplateCreate;

class UpdateEmailTemplatesRequest extends JsonSerializableType
{
    /**
     * @var EmailTemplateCreate $body
     */
    public EmailTemplateCreate $body;

    /**
     * @param array{
     *   body: EmailTemplateCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
