<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\ArrayType;

class KnowledgeArticle extends JsonSerializableType
{
    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var ?int $active Record active/deleted flag.  Valid values are [0,1]
     */
    #[JsonProperty('active')]
    public ?int $active;

    /**
     * @var mixed $editDate Timestamp at which record was last modified
     */
    #[JsonProperty('edit_date')]
    public mixed $editDate;

    /**
     * @var string $name Title of the knowledge article. This is a mandatory field with a maximum length of 100 characters. Used for identifying and searching for articles in the knowledge base.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $content The main content of the knowledge article. For 'richtext', 'meeting', and 'pdf' articles, this contains HTML formatted text. For 'video' articles, this may contain supplementary information. Supports extended text length.
     */
    #[JsonProperty('content')]
    public ?string $content;

    /**
     * @var ?string $articleType Type of knowledge article. Valid values are 'video', 'richtext', 'pdf', or 'meeting'. Meetings are created through the API. This determines how the article content is presented and processed in the system.
     */
    #[JsonProperty('article_type')]
    public ?string $articleType;

    /**
     * @var ?string $tags Comma-separated list of tags associated with this knowledge article. Maximum length is 2000 characters. Tags are used for categorization, searching, and automatic relationship generation with other objects like Services, Materials, and Companies.
     */
    #[JsonProperty('tags')]
    public ?string $tags;

    /**
     * @var ?array<KnowledgeArticleRelationshipsItem> $relationships JSON array of manually created relationships between this knowledge article and other objects. Contains objects with properties: object_name (e.g., 'job'), object_uuid (the related object's UUID), object_description (a description of the related object), and create_date. Used to associate articles with specific jobs or other system objects.
     */
    #[JsonProperty('relationships'), ArrayType([KnowledgeArticleRelationshipsItem::class])]
    public ?array $relationships;

    /**
     * @param array{
     *   name: string,
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     *   content?: ?string,
     *   articleType?: ?string,
     *   tags?: ?string,
     *   relationships?: ?array<KnowledgeArticleRelationshipsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
        $this->name = $values['name'];
        $this->content = $values['content'] ?? null;
        $this->articleType = $values['articleType'] ?? null;
        $this->tags = $values['tags'] ?? null;
        $this->relationships = $values['relationships'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
