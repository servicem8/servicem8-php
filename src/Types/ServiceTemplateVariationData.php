<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\ArrayType;
use ServiceM8\Core\Types\Union;

class ServiceTemplateVariationData extends JsonSerializableType
{
    /**
     * @var ?float $variationAmount Amount applied by time-period or public-holiday variations.
     */
    #[JsonProperty('variation_amount')]
    public ?float $variationAmount;

    /**
     * @var ?value-of<ServiceTemplateVariationDataVariationUnits> $variationUnits Whether variation_amount is a percentage or currency value.
     */
    #[JsonProperty('variation_units')]
    public ?string $variationUnits;

    /**
     * @var ?array<value-of<ServiceTemplateVariationDataVariationApplicabilityItem>> $variationApplicability Line item categories affected by the variation.
     */
    #[JsonProperty('variation_applicability'), ArrayType(['string'])]
    public ?array $variationApplicability;

    /**
     * @var ?string $tag Caller-defined tag used to identify managed variation records.
     */
    #[JsonProperty('tag')]
    public ?string $tag;

    /**
     * @var (
     *    int
     *   |'OPEN'
     *   |'CLOSE'
     * )|null $timePeriodStart Start of a time-period variation, as seconds from midnight or a business-hours marker.
     */
    #[JsonProperty('time_period_start'), Union('integer', 'string', 'null')]
    public int|string|null $timePeriodStart;

    /**
     * @var (
     *    int
     *   |'OPEN'
     *   |'CLOSE'
     * )|null $timePeriodEnd End of a time-period variation, as seconds from midnight or a business-hours marker.
     */
    #[JsonProperty('time_period_end'), Union('integer', 'string', 'null')]
    public int|string|null $timePeriodEnd;

    /**
     * @var ?float $freeThresholdKm Travel distance included before travel-distance pricing applies.
     */
    #[JsonProperty('free_threshold_km')]
    public ?float $freeThresholdKm;

    /**
     * @var ?float $pricePerKm Travel-distance surcharge amount per kilometre after the free threshold.
     */
    #[JsonProperty('price_per_km')]
    public ?float $pricePerKm;

    /**
     * @var ?float $maximumDistanceKm Maximum travel distance before manual approval is required.
     */
    #[JsonProperty('maximum_distance_km')]
    public ?float $maximumDistanceKm;

    /**
     * @param array{
     *   variationAmount?: ?float,
     *   variationUnits?: ?value-of<ServiceTemplateVariationDataVariationUnits>,
     *   variationApplicability?: ?array<value-of<ServiceTemplateVariationDataVariationApplicabilityItem>>,
     *   tag?: ?string,
     *   timePeriodStart?: (
     *    int
     *   |'OPEN'
     *   |'CLOSE'
     * )|null,
     *   timePeriodEnd?: (
     *    int
     *   |'OPEN'
     *   |'CLOSE'
     * )|null,
     *   freeThresholdKm?: ?float,
     *   pricePerKm?: ?float,
     *   maximumDistanceKm?: ?float,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->variationAmount = $values['variationAmount'] ?? null;
        $this->variationUnits = $values['variationUnits'] ?? null;
        $this->variationApplicability = $values['variationApplicability'] ?? null;
        $this->tag = $values['tag'] ?? null;
        $this->timePeriodStart = $values['timePeriodStart'] ?? null;
        $this->timePeriodEnd = $values['timePeriodEnd'] ?? null;
        $this->freeThresholdKm = $values['freeThresholdKm'] ?? null;
        $this->pricePerKm = $values['pricePerKm'] ?? null;
        $this->maximumDistanceKm = $values['maximumDistanceKm'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
