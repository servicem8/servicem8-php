<?php

namespace ServiceM8\KnowledgeArticles\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\KnowledgeArticleCreate;

class UpdateKnowledgeArticlesRequest extends JsonSerializableType
{
    /**
     * @var KnowledgeArticleCreate $body
     */
    public KnowledgeArticleCreate $body;

    /**
     * @param array{
     *   body: KnowledgeArticleCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
