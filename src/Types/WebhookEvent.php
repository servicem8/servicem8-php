<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use DateTime;
use ServiceM8\Core\Types\Date;
use ServiceM8\Core\Types\ArrayType;

class WebhookEvent extends JsonSerializableType
{
    /**
     * @var string $eventType Type of event (e.g., job.created, company.updated)
     */
    #[JsonProperty('event_type')]
    public string $eventType;

    /**
     * @var DateTime $timestamp ISO 8601 timestamp of when the event occurred
     */
    #[JsonProperty('timestamp'), Date(Date::TYPE_DATETIME)]
    public DateTime $timestamp;

    /**
     * @var array<string, mixed> $data Event-specific payload containing the affected resource
     */
    #[JsonProperty('data'), ArrayType(['string' => 'mixed'])]
    public array $data;

    /**
     * @var ?WebhookEventMetadata $metadata
     */
    #[JsonProperty('metadata')]
    public ?WebhookEventMetadata $metadata;

    /**
     * @param array{
     *   eventType: string,
     *   timestamp: DateTime,
     *   data: array<string, mixed>,
     *   metadata?: ?WebhookEventMetadata,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->eventType = $values['eventType'];
        $this->timestamp = $values['timestamp'];
        $this->data = $values['data'];
        $this->metadata = $values['metadata'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
