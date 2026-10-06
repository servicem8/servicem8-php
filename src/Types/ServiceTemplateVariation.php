<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class ServiceTemplateVariation extends JsonSerializableType
{
    /**
     * @var ?string $uuid Unique identifier for the ServiceVariation record.
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var ?string $serviceUuid Parent Service UUID.
     */
    #[JsonProperty('service_uuid')]
    public ?string $serviceUuid;

    /**
     * @var ?value-of<ServiceTemplateVariationVariationType> $variationType Variation category that determines which data fields are used.
     */
    #[JsonProperty('variation_type')]
    public ?string $variationType;

    /**
     * @var ?ServiceTemplateVariationData $data Decoded variation data stored internally in ServiceVariation.json_data.
     */
    #[JsonProperty('data')]
    public ?ServiceTemplateVariationData $data;

    /**
     * @var ?int $active Soft-delete flag; 1 is active and 0 is inactive.
     */
    #[JsonProperty('active')]
    public ?int $active;

    /**
     * @param array{
     *   uuid?: ?string,
     *   serviceUuid?: ?string,
     *   variationType?: ?value-of<ServiceTemplateVariationVariationType>,
     *   data?: ?ServiceTemplateVariationData,
     *   active?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->serviceUuid = $values['serviceUuid'] ?? null;
        $this->variationType = $values['variationType'] ?? null;
        $this->data = $values['data'] ?? null;
        $this->active = $values['active'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
