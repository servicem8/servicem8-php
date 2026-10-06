<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class FormField extends JsonSerializableType
{
    /**
     * @var ?string $formUuid The UUID of the form this field belongs to.
     */
    #[JsonProperty('form_uuid')]
    public ?string $formUuid;

    /**
     * @var ?string $name The name of the form field.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $fieldDataJson JSON configuration for this question, including type, mandatory, choices and conditions.
     */
    #[JsonProperty('field_data_json')]
    public ?string $fieldDataJson;

    /**
     * @var ?int $sortOrder The sort order of the form field.
     */
    #[JsonProperty('sort_order')]
    public ?int $sortOrder;

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
     *   formUuid?: ?string,
     *   name?: ?string,
     *   fieldDataJson?: ?string,
     *   sortOrder?: ?int,
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->formUuid = $values['formUuid'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->fieldDataJson = $values['fieldDataJson'] ?? null;
        $this->sortOrder = $values['sortOrder'] ?? null;
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
