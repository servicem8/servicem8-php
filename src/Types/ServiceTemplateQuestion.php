<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\ArrayType;

class ServiceTemplateQuestion extends JsonSerializableType
{
    /**
     * @var ?string $uuid Unique identifier for the ServiceQuestion record.
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var ?string $name Question title shown to staff or customers.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $questionDescription Additional explanatory text for the question.
     */
    #[JsonProperty('question_description')]
    public ?string $questionDescription;

    /**
     * @var ?string $questionType Question input or action type stored on the ServiceQuestion DBO.
     */
    #[JsonProperty('question_type')]
    public ?string $questionType;

    /**
     * @var ?string $revealQuestionWithQuestionChoiceUuid Choice UUID that reveals this question when selected.
     */
    #[JsonProperty('reveal_question_with_question_choice_uuid')]
    public ?string $revealQuestionWithQuestionChoiceUuid;

    /**
     * @var ?int $sortOrder Display order within the parent Service.
     */
    #[JsonProperty('sort_order')]
    public ?int $sortOrder;

    /**
     * @var ?int $active Soft-delete flag; 1 is active and 0 is inactive.
     */
    #[JsonProperty('active')]
    public ?int $active;

    /**
     * @var ?array<ServiceTemplateQuestionChoice> $choices Choices linked to this question, including inactive records.
     */
    #[JsonProperty('choices'), ArrayType([ServiceTemplateQuestionChoice::class])]
    public ?array $choices;

    /**
     * @param array{
     *   uuid?: ?string,
     *   name?: ?string,
     *   questionDescription?: ?string,
     *   questionType?: ?string,
     *   revealQuestionWithQuestionChoiceUuid?: ?string,
     *   sortOrder?: ?int,
     *   active?: ?int,
     *   choices?: ?array<ServiceTemplateQuestionChoice>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->questionDescription = $values['questionDescription'] ?? null;
        $this->questionType = $values['questionType'] ?? null;
        $this->revealQuestionWithQuestionChoiceUuid = $values['revealQuestionWithQuestionChoiceUuid'] ?? null;
        $this->sortOrder = $values['sortOrder'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->choices = $values['choices'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
