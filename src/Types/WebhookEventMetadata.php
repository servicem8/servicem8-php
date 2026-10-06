<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class WebhookEventMetadata extends JsonSerializableType
{
    /**
     * @var ?int $attempt Delivery attempt number
     */
    #[JsonProperty('attempt')]
    public ?int $attempt;

    /**
     * @var ?string $signature HMAC-SHA256 signature for webhook verification
     */
    #[JsonProperty('signature')]
    public ?string $signature;

    /**
     * @param array{
     *   attempt?: ?int,
     *   signature?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->attempt = $values['attempt'] ?? null;
        $this->signature = $values['signature'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
