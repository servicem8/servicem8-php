<?php

namespace ServiceM8\DocumentTemplates\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\DocumentTemplateCreate;

class UpdateDocumentTemplatesRequest extends JsonSerializableType
{
    /**
     * @var DocumentTemplateCreate $body
     */
    public DocumentTemplateCreate $body;

    /**
     * @param array{
     *   body: DocumentTemplateCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
