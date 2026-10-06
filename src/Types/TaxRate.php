<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class TaxRate extends JsonSerializableType
{
    /**
     * @var string $name Name of the tax rate used for identification. Examples include 'GST', 'VAT', 'Sales Tax', etc.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $amount The tax rate percentage value (stored as a decimal value). For example, 10 for a 10% tax rate. Used in calculations to determine tax amounts for invoices and quotes.
     */
    #[JsonProperty('amount')]
    public ?string $amount;

    /**
     * @var ?int $isDefaultTaxRate Boolean flag indicating whether this tax rate is the system default (true) or not (false). Only one tax rate can be marked as default at any time. The default tax rate is automatically applied to new line items when no specific tax rate is selected..  Valid values are [0,1]
     */
    #[JsonProperty('is_default_tax_rate')]
    public ?int $isDefaultTaxRate;

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
     *   name: string,
     *   amount?: ?string,
     *   isDefaultTaxRate?: ?int,
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->amount = $values['amount'] ?? null;
        $this->isDefaultTaxRate = $values['isDefaultTaxRate'] ?? null;
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
