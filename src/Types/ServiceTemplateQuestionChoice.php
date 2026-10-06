<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class ServiceTemplateQuestionChoice extends JsonSerializableType
{
    /**
     * @var ?string $uuid Unique identifier for the ServiceQuestionChoice record.
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var ?string $name Choice label shown to staff or customers.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $description Additional explanatory text for the choice.
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?int $minimumQuantity Minimum quantity selectable for this choice.
     */
    #[JsonProperty('minimum_quantity')]
    public ?int $minimumQuantity;

    /**
     * @var ?int $maximumQuantity Maximum quantity selectable for this choice.
     */
    #[JsonProperty('maximum_quantity')]
    public ?int $maximumQuantity;

    /**
     * @var ?string $workDoneDescriptionLine Line added to the work done description when this choice is selected.
     */
    #[JsonProperty('work_done_description_line')]
    public ?string $workDoneDescriptionLine;

    /**
     * @var ?int $sortOrder Display order within the parent question.
     */
    #[JsonProperty('sort_order')]
    public ?int $sortOrder;

    /**
     * @var ?int $active Soft-delete flag; 1 is active and 0 is inactive.
     */
    #[JsonProperty('active')]
    public ?int $active;

    /**
     * @var ?string $imageUrl Thumbnail URL resolved from image_attachment_uuid.
     */
    #[JsonProperty('image_url')]
    public ?string $imageUrl;

    /**
     * @param array{
     *   uuid?: ?string,
     *   name?: ?string,
     *   description?: ?string,
     *   minimumQuantity?: ?int,
     *   maximumQuantity?: ?int,
     *   workDoneDescriptionLine?: ?string,
     *   sortOrder?: ?int,
     *   active?: ?int,
     *   imageUrl?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->description = $values['description'] ?? null;
        $this->minimumQuantity = $values['minimumQuantity'] ?? null;
        $this->maximumQuantity = $values['maximumQuantity'] ?? null;
        $this->workDoneDescriptionLine = $values['workDoneDescriptionLine'] ?? null;
        $this->sortOrder = $values['sortOrder'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->imageUrl = $values['imageUrl'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
