<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class JobMaterial extends JsonSerializableType
{
    /**
     * @var ?string $jobUuid The UUID of the job this material is associated with. This is a required field that establishes the relationship between the job material and its parent job.
     */
    #[JsonProperty('job_uuid')]
    public ?string $jobUuid;

    /**
     * @var ?string $materialUuid The UUID of the material catalog item this job material is based on. Links the job material to the corresponding material in the materials catalog.
     */
    #[JsonProperty('material_uuid')]
    public ?string $materialUuid;

    /**
     * @var ?string $name The name of the material item used on the job. This is displayed on invoices and is used to identify the material to the customer. The name typically comes from the associated material object but can be customized per job.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var string $quantity The quantity of this material used on the job. This field is mandatory and cannot be empty.
     */
    #[JsonProperty('quantity')]
    public string $quantity;

    /**
     * @var ?string $price The unit price of the material excluding tax. Used in calculations to determine the total price for this line item on the job. The system may automatically adjust this value to maintain consistency with tax-inclusive pricing.
     */
    #[JsonProperty('price')]
    public ?string $price;

    /**
     * @var ?string $displayedAmount The unit price amount as displayed on invoices and quotes. This can be either tax-inclusive or tax-exclusive depending on the displayed_amount_is_tax_inclusive field value. Used for presentation to customers.
     */
    #[JsonProperty('displayed_amount')]
    public ?string $displayedAmount;

    /**
     * @var ?string $displayedAmountIsTaxInclusive Boolean flag indicating whether the displayed_amount includes tax (true) or excludes tax (false). This controls how prices are presented to customers and determines which price value (inclusive or exclusive) is used in calculations.
     */
    #[JsonProperty('displayed_amount_is_tax_inclusive')]
    public ?string $displayedAmountIsTaxInclusive;

    /**
     * @var ?string $taxRateUuid The UUID of the tax rate applied to this job material. Determines how tax is calculated for this specific line item.
     */
    #[JsonProperty('tax_rate_uuid')]
    public ?string $taxRateUuid;

    /**
     * @var ?string $sortOrder Integer value controlling the display order of materials on a job. Lower values appear first in lists. Used to customize the presentation order of materials on quotes, invoices and job forms.
     */
    #[JsonProperty('sort_order')]
    public ?string $sortOrder;

    /**
     * @var ?string $cost The cost of the material for this job. This is the ex-tax amount.
     */
    #[JsonProperty('cost')]
    public ?string $cost;

    /**
     * @var ?string $displayedCost The cost of the material for this job, displayed as inc-tax or ex-tax depending on jobMaterial.displayed_amount_is_tax_inclusive.
     */
    #[JsonProperty('displayed_cost')]
    public ?string $displayedCost;

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
     * @var ?string $jobMaterialBundleUuid UUID of a JobMaterialBundle which this JobMaterial belongs to. The default value is blank, which means that the JobMaterial is not part of a JobMaterialBundle.
     */
    #[JsonProperty('job_material_bundle_uuid')]
    public ?string $jobMaterialBundleUuid;

    /**
     * @param array{
     *   quantity: string,
     *   jobUuid?: ?string,
     *   materialUuid?: ?string,
     *   name?: ?string,
     *   price?: ?string,
     *   displayedAmount?: ?string,
     *   displayedAmountIsTaxInclusive?: ?string,
     *   taxRateUuid?: ?string,
     *   sortOrder?: ?string,
     *   cost?: ?string,
     *   displayedCost?: ?string,
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     *   jobMaterialBundleUuid?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->jobUuid = $values['jobUuid'] ?? null;
        $this->materialUuid = $values['materialUuid'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->quantity = $values['quantity'];
        $this->price = $values['price'] ?? null;
        $this->displayedAmount = $values['displayedAmount'] ?? null;
        $this->displayedAmountIsTaxInclusive = $values['displayedAmountIsTaxInclusive'] ?? null;
        $this->taxRateUuid = $values['taxRateUuid'] ?? null;
        $this->sortOrder = $values['sortOrder'] ?? null;
        $this->cost = $values['cost'] ?? null;
        $this->displayedCost = $values['displayedCost'] ?? null;
        $this->uuid = $values['uuid'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
        $this->jobMaterialBundleUuid = $values['jobMaterialBundleUuid'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
