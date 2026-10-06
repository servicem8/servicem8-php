<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class KnowledgeArticleCreateRelationshipsItem extends JsonSerializableType
{
    /**
     * @var value-of<KnowledgeArticleCreateRelationshipsItemObjectName> $objectName
     */
    #[JsonProperty('object_name')]
    public string $objectName;

    /**
     * @var string $objectUuid
     */
    #[JsonProperty('object_uuid')]
    public string $objectUuid;

    /**
     * @var ?string $objectDescription
     */
    #[JsonProperty('object_description')]
    public ?string $objectDescription;

    /**
     * @var ?string $createDate
     */
    #[JsonProperty('create_date')]
    public ?string $createDate;

    /**
     * @param array{
     *   objectName: value-of<KnowledgeArticleCreateRelationshipsItemObjectName>,
     *   objectUuid: string,
     *   objectDescription?: ?string,
     *   createDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->objectName = $values['objectName'];
        $this->objectUuid = $values['objectUuid'];
        $this->objectDescription = $values['objectDescription'] ?? null;
        $this->createDate = $values['createDate'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
