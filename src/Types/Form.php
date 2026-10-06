<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\ArrayType;

class Form extends JsonSerializableType
{
    /**
     * @var ?string $name The name of the form. Used to identify the form in the system and displayed to users in the form selector. Must be unique within an account. Maximum length is 255 characters.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $documentTemplateUuid UUID of the document template associated with this form. The template defines the layout and appearance of the form when it's generated as a document. References a document template object in the system.
     */
    #[JsonProperty('document_template_uuid')]
    public ?string $documentTemplateUuid;

    /**
     * @var ?string $canBeUsedIndependently Boolean flag indicating whether this form can be used independently of a job. When set to true (1), the form can be filled out as a standalone form. When false (0), the form must be associated with a job to be completed.
     */
    #[JsonProperty('can_be_used_independently')]
    public ?string $canBeUsedIndependently;

    /**
     * @var ?string $badgeMandatoryState Controls when badge completion is mandatory for this form. Valid values are: 0 (not mandatory), 1 (mandatory on check-in), 2 (mandatory on check-out). This determines at which stage in the job lifecycle a staff member must complete this form.
     */
    #[JsonProperty('badge_mandatory_state')]
    public ?string $badgeMandatoryState;

    /**
     * @var ?array<FormTemplateFieldsItem> $templateFields JSON array of template fields that are used when generating form documents. Each field contains a name, fieldType, value, and sortOrder. Maximum of 10 fields allowed.
     */
    #[JsonProperty('template_fields'), ArrayType([FormTemplateFieldsItem::class])]
    public ?array $templateFields;

    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var ?int $active Record active/deleted flag.  Valid values are [0,1].  Valid values are [0,1]
     */
    #[JsonProperty('active')]
    public ?int $active;

    /**
     * @var mixed $editDate Timestamp at which record was last modified
     */
    #[JsonProperty('edit_date')]
    public mixed $editDate;

    /**
     * @var ?string $badgeName
     */
    #[JsonProperty('badge_name')]
    public ?string $badgeName;

    /**
     * @param array{
     *   name?: ?string,
     *   documentTemplateUuid?: ?string,
     *   canBeUsedIndependently?: ?string,
     *   badgeMandatoryState?: ?string,
     *   templateFields?: ?array<FormTemplateFieldsItem>,
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     *   badgeName?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->documentTemplateUuid = $values['documentTemplateUuid'] ?? null;
        $this->canBeUsedIndependently = $values['canBeUsedIndependently'] ?? null;
        $this->badgeMandatoryState = $values['badgeMandatoryState'] ?? null;
        $this->templateFields = $values['templateFields'] ?? null;
        $this->uuid = $values['uuid'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
        $this->badgeName = $values['badgeName'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
