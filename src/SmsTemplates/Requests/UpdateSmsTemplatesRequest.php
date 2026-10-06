<?php

namespace ServiceM8\SmsTemplates\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\SmsTemplateCreate;

class UpdateSmsTemplatesRequest extends JsonSerializableType
{
    /**
     * @var SmsTemplateCreate $body
     */
    public SmsTemplateCreate $body;

    /**
     * @param array{
     *   body: SmsTemplateCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
