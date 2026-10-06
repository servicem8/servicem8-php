<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class SmsRecord extends JsonSerializableType
{
    /**
     * @var string $uuid
     */
    #[JsonProperty('uuid')]
    public string $uuid;

    /**
     * @var 'job' $relatedObject
     */
    #[JsonProperty('related_object')]
    public string $relatedObject;

    /**
     * @var string $relatedObjectUuid
     */
    #[JsonProperty('related_object_uuid')]
    public string $relatedObjectUuid;

    /**
     * @var string $timestamp Account-local MySQL datetime string.
     */
    #[JsonProperty('timestamp')]
    public string $timestamp;

    /**
     * @var value-of<SmsRecordDirection> $direction
     */
    #[JsonProperty('direction')]
    public string $direction;

    /**
     * @var ?string $sentByStaffUuid
     */
    #[JsonProperty('sent_by_staff_uuid')]
    public ?string $sentByStaffUuid;

    /**
     * @var ?string $toPhone
     */
    #[JsonProperty('to_phone')]
    public ?string $toPhone;

    /**
     * @var ?string $fromPhone
     */
    #[JsonProperty('from_phone')]
    public ?string $fromPhone;

    /**
     * @var string $message
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @param array{
     *   uuid: string,
     *   relatedObject: 'job',
     *   relatedObjectUuid: string,
     *   timestamp: string,
     *   direction: value-of<SmsRecordDirection>,
     *   message: string,
     *   sentByStaffUuid?: ?string,
     *   toPhone?: ?string,
     *   fromPhone?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->uuid = $values['uuid'];
        $this->relatedObject = $values['relatedObject'];
        $this->relatedObjectUuid = $values['relatedObjectUuid'];
        $this->timestamp = $values['timestamp'];
        $this->direction = $values['direction'];
        $this->sentByStaffUuid = $values['sentByStaffUuid'] ?? null;
        $this->toPhone = $values['toPhone'] ?? null;
        $this->fromPhone = $values['fromPhone'] ?? null;
        $this->message = $values['message'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
