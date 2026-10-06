<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class NotificationCreateResult extends JsonSerializableType
{
    /**
     * @var string $uuid
     */
    #[JsonProperty('uuid')]
    public string $uuid;

    /**
     * @var string $recipientStaffUuid
     */
    #[JsonProperty('recipient_staff_uuid')]
    public string $recipientStaffUuid;

    /**
     * @param array{
     *   uuid: string,
     *   recipientStaffUuid: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->uuid = $values['uuid'];
        $this->recipientStaffUuid = $values['recipientStaffUuid'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
