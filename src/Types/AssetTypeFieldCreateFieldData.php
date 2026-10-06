<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\ArrayType;

/**
 * Configuration data for the field
 */
class AssetTypeFieldCreateFieldData extends JsonSerializableType
{
    /**
     * @var value-of<AssetTypeFieldCreateFieldDataFieldType> $fieldType
     */
    #[JsonProperty('fieldType')]
    public string $fieldType;

    /**
     * @var bool $mandatory
     */
    #[JsonProperty('mandatory')]
    public bool $mandatory;

    /**
     * @var ?array<string> $choices
     */
    #[JsonProperty('choices'), ArrayType(['string'])]
    public ?array $choices;

    /**
     * @param array{
     *   fieldType: value-of<AssetTypeFieldCreateFieldDataFieldType>,
     *   mandatory: bool,
     *   choices?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fieldType = $values['fieldType'];
        $this->mandatory = $values['mandatory'];
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
