<?php

namespace ServiceM8\Notifications\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\ArrayType;

class NotificationCreateRequest extends JsonSerializableType
{
    /**
     * @var array<string> $recipientStaffUuids
     */
    #[JsonProperty('recipient_staff_uuids'), ArrayType(['string'])]
    public array $recipientStaffUuids;

    /**
     * @var string $message Notification message. Supports a limited HTML subset: b, i, br.
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @var ?string $title Optional notification title. HTML is not supported.
     */
    #[JsonProperty('title')]
    public ?string $title;

    /**
     * @var ?string $destinationUrl Supported servicem8:// route: job/{uuid}, job/{uuid}/diary, or inbox/{uuid}.
     */
    #[JsonProperty('destination_url')]
    public ?string $destinationUrl;

    /**
     * @var ?int $urgency
     */
    #[JsonProperty('urgency')]
    public ?int $urgency;

    /**
     * @param array{
     *   recipientStaffUuids: array<string>,
     *   message: string,
     *   title?: ?string,
     *   destinationUrl?: ?string,
     *   urgency?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->recipientStaffUuids = $values['recipientStaffUuids'];
        $this->message = $values['message'];
        $this->title = $values['title'] ?? null;
        $this->destinationUrl = $values['destinationUrl'] ?? null;
        $this->urgency = $values['urgency'] ?? null;
    }
}
