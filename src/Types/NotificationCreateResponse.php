<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\ArrayType;

class NotificationCreateResponse extends JsonSerializableType
{
    /**
     * @var bool $created
     */
    #[JsonProperty('created')]
    public bool $created;

    /**
     * @var array<NotificationCreateResult> $notifications
     */
    #[JsonProperty('notifications'), ArrayType([NotificationCreateResult::class])]
    public array $notifications;

    /**
     * @param array{
     *   created: bool,
     *   notifications: array<NotificationCreateResult>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->created = $values['created'];
        $this->notifications = $values['notifications'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
