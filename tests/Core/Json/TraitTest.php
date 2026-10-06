<?php

namespace ServiceM8\Tests\Core\Json;

use PHPUnit\Framework\TestCase;
use ServiceM8\Core\Json\JsonEncoder;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Json\JsonSerializableType;

trait IntegerPropertyTrait
{
    /**
     * @var int $integerProperty
     */
    #[JsonProperty('integer_property')]
    public int $integerProperty;
}

class TypeWithTrait extends JsonSerializableType
{
    use IntegerPropertyTrait;

    /**
     * @var string $stringProperty
     */
    #[JsonProperty('string_property')]
    public string $stringProperty;

    /**
     * @param array{
     *   integerProperty: int,
     *   stringProperty: string,
     * } $values
     */
    public function __construct(array $values)
    {
        $this->integerProperty = $values['integerProperty'];
        $this->stringProperty = $values['stringProperty'];
    }
}

class TraitTest extends TestCase
{
    public function testTraitPropertyAndString(): void
    {
        $expectedJson = JsonEncoder::encode(
            [
                'integer_property' => 42,
                'string_property' => 'Hello, World!',
            ],
        );

        $object = TypeWithTrait::fromJson($expectedJson);
        $this->assertEquals(42, $object->integerProperty, 'integer_property should be 42.');
        $this->assertEquals('Hello, World!', $object->stringProperty, 'string_property should be "Hello, World!".');

        $actualJson = $object->toJson();
        $this->assertJsonStringEqualsJsonString($expectedJson, $actualJson, 'Serialized JSON does not match original JSON for ScalarTypesTestWithTrait.');
    }
}
