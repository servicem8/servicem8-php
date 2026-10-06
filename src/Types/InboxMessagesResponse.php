<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\ArrayType;

class InboxMessagesResponse extends JsonSerializableType
{
    /**
     * @var ?array<InboxMessage> $messages
     */
    #[JsonProperty('messages'), ArrayType([InboxMessage::class])]
    public ?array $messages;

    /**
     * @var ?InboxMessagesResponsePagination $pagination
     */
    #[JsonProperty('pagination')]
    public ?InboxMessagesResponsePagination $pagination;

    /**
     * @param array{
     *   messages?: ?array<InboxMessage>,
     *   pagination?: ?InboxMessagesResponsePagination,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->messages = $values['messages'] ?? null;
        $this->pagination = $values['pagination'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
