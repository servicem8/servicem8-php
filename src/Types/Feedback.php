<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class Feedback extends JsonSerializableType
{
    /**
     * @var ?string $timestamp Date and time when the feedback was submitted
     */
    #[JsonProperty('timestamp')]
    public ?string $timestamp;

    /**
     * @var ?string $relatedObject Type of object this feedback relates to (usually 'job' or 'vendor')
     */
    #[JsonProperty('related_object')]
    public ?string $relatedObject;

    /**
     * @var ?string $relatedObjectUuid UUID of the specific object this feedback is about, corresponding to the object type specified in related_object
     */
    #[JsonProperty('related_object_uuid')]
    public ?string $relatedObjectUuid;

    /**
     * @var ?string $rating Numeric rating value for the feedback, between 1-5 where higher values represent more positive feedback
     */
    #[JsonProperty('rating')]
    public ?string $rating;

    /**
     * @var ?string $comment Text comments provided with the feedback
     */
    #[JsonProperty('comment')]
    public ?string $comment;

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
     * @param array{
     *   timestamp?: ?string,
     *   relatedObject?: ?string,
     *   relatedObjectUuid?: ?string,
     *   rating?: ?string,
     *   comment?: ?string,
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->timestamp = $values['timestamp'] ?? null;
        $this->relatedObject = $values['relatedObject'] ?? null;
        $this->relatedObjectUuid = $values['relatedObjectUuid'] ?? null;
        $this->rating = $values['rating'] ?? null;
        $this->comment = $values['comment'] ?? null;
        $this->uuid = $values['uuid'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
