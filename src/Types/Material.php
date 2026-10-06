<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class Material extends JsonSerializableType
{
    /**
     * @var string $name Name of the material, product or labour rate. The maximum length varies based on accounting package integration 30-100 characters for standard mode, up to 2000 characters for description billing mode. Required field that identifies the material in inventory lists, job forms, and invoices.
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $itemNumber Unique identifier code for the material. max length. Must be unique within an account.
     */
    #[JsonProperty('item_number')]
    public ?string $itemNumber;

    /**
     * @var ?string $price The selling price of the material. May include or exclude tax based on the price_includes_taxes field. Used as the default price when adding this material to jobs and generating invoices.
     */
    #[JsonProperty('price')]
    public ?string $price;

    /**
     * @var ?string $cost The purchase cost of the material. May include or exclude tax depending on the price_includes_taxes setting. Used for profit calculations and reporting. This field may be hidden from users without appropriate permissions.
     */
    #[JsonProperty('cost')]
    public ?string $cost;

    /**
     * @var ?float $quantityInStock The current inventory quantity of this material available in stock. Stored as a numeric value with decimal support. Updated automatically when materials are used in jobs or when inventory is manually adjusted. Only tracked if item_is_inventoried is enabled.
     */
    #[JsonProperty('quantity_in_stock')]
    public ?float $quantityInStock;

    /**
     * @var ?int $priceIncludesTaxes Boolean flag indicating whether the price and cost values include tax (1/true) or exclude tax (0/false). Controls tax calculations when determining final pricing. New materials inherit this setting from the account's default tax display preference..  Valid values are [0,1]
     */
    #[JsonProperty('price_includes_taxes')]
    public ?int $priceIncludesTaxes;

    /**
     * @var ?string $barcode The barcode identifier for the material.  Can store UPC, EAN, or other barcode formats. Used for inventory scanning and quick material lookup in the mobile app.
     */
    #[JsonProperty('barcode')]
    public ?string $barcode;

    /**
     * @var ?int $itemIsInventoried Boolean flag indicating whether inventory tracking is enabled for this material (1/true) or disabled (0/false). When enabled, the quantity_in_stock is tracked and updated automatically when the material is used in jobs. Only physical products typically have this enabled..  Valid values are [0,1]
     */
    #[JsonProperty('item_is_inventoried')]
    public ?int $itemIsInventoried;

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
     * @var ?string $itemDescription
     */
    #[JsonProperty('item_description')]
    public ?string $itemDescription;

    /**
     * @var ?string $useDescriptionForInvoicing
     */
    #[JsonProperty('use_description_for_invoicing')]
    public ?string $useDescriptionForInvoicing;

    /**
     * @var ?string $taxRateUuid
     */
    #[JsonProperty('tax_rate_uuid')]
    public ?string $taxRateUuid;

    /**
     * @param array{
     *   name: string,
     *   itemNumber?: ?string,
     *   price?: ?string,
     *   cost?: ?string,
     *   quantityInStock?: ?float,
     *   priceIncludesTaxes?: ?int,
     *   barcode?: ?string,
     *   itemIsInventoried?: ?int,
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     *   itemDescription?: ?string,
     *   useDescriptionForInvoicing?: ?string,
     *   taxRateUuid?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->itemNumber = $values['itemNumber'] ?? null;
        $this->price = $values['price'] ?? null;
        $this->cost = $values['cost'] ?? null;
        $this->quantityInStock = $values['quantityInStock'] ?? null;
        $this->priceIncludesTaxes = $values['priceIncludesTaxes'] ?? null;
        $this->barcode = $values['barcode'] ?? null;
        $this->itemIsInventoried = $values['itemIsInventoried'] ?? null;
        $this->uuid = $values['uuid'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
        $this->itemDescription = $values['itemDescription'] ?? null;
        $this->useDescriptionForInvoicing = $values['useDescriptionForInvoicing'] ?? null;
        $this->taxRateUuid = $values['taxRateUuid'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
