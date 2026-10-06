<?php

namespace ServiceM8\Inbox\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use DateTime;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\Date;

class SnoozeRequest extends JsonSerializableType
{
    /**
     * @var ?DateTime $snoozeUntil ISO 8601 datetime to snooze until, or null to unsnooze
     */
    #[JsonProperty('snooze_until'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $snoozeUntil;

    /**
     * @var ?string $note
     */
    #[JsonProperty('note')]
    public ?string $note;

    /**
     * @param array{
     *   snoozeUntil?: ?DateTime,
     *   note?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->snoozeUntil = $values['snoozeUntil'] ?? null;
        $this->note = $values['note'] ?? null;
    }
}
