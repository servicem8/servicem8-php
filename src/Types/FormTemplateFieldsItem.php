<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class FormTemplateFieldsItem extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var 'Text' $fieldType
     */
    #[JsonProperty('fieldType')]
    public string $fieldType;

    /**
     * @var string $value
     */
    #[JsonProperty('value')]
    public string $value;

    /**
     * @var int $sortOrder
     */
    #[JsonProperty('sortOrder')]
    public int $sortOrder;

    /**
     * @param array{
     *   name: string,
     *   fieldType: 'Text',
     *   value: string,
     *   sortOrder: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->fieldType = $values['fieldType'];
        $this->value = $values['value'];
        $this->sortOrder = $values['sortOrder'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
