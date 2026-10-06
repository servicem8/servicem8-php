<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class CompanyCreate extends JsonSerializableType
{
    /**
     * @var string $name Company Name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $abnNumber Australian Business Number. A unique 11-digit identifier issued by the Australian Taxation Office to businesses. Required for tax compliance and validation of business identity in Australia.
     */
    #[JsonProperty('abn_number')]
    public ?string $abnNumber;

    /**
     * @var ?string $address The complete address of the company in a single text field. Supports up to 500 characters and may contain multiple lines. Used when individual address components (street, city, etc.) are not available or when displaying the full address in a single field.
     */
    #[JsonProperty('address')]
    public ?string $address;

    /**
     * @var ?string $billingAddress The complete billing address for the company in a single text field. Supports up to 500 characters and may contain multiple lines. Used for invoicing and financial transactions when the billing address differs from the primary company address.
     */
    #[JsonProperty('billing_address')]
    public ?string $billingAddress;

    /**
     * @var ?int $isIndividual Derived flag indicating whether the client is an individual. This value is set automatically based on the company name and contact first/last name, and cannot be set via the API..  Valid values are [0,1]
     */
    #[JsonProperty('is_individual')]
    public ?int $isIndividual;

    /**
     * @var ?string $parentCompanyUuid If provided, specifies the UUID of this Site's parent Company. If blank, this record is a Head Office rather than a Site. This field is only present on ServiceM8 Accounts with the Company Sites addon activated.
     */
    #[JsonProperty('parent_company_uuid')]
    public ?string $parentCompanyUuid;

    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var ?string $website
     */
    #[JsonProperty('website')]
    public ?string $website;

    /**
     * @var ?string $addressStreet
     */
    #[JsonProperty('address_street')]
    public ?string $addressStreet;

    /**
     * @var ?string $addressCity
     */
    #[JsonProperty('address_city')]
    public ?string $addressCity;

    /**
     * @var ?string $addressState
     */
    #[JsonProperty('address_state')]
    public ?string $addressState;

    /**
     * @var ?string $addressPostcode
     */
    #[JsonProperty('address_postcode')]
    public ?string $addressPostcode;

    /**
     * @var ?string $addressCountry
     */
    #[JsonProperty('address_country')]
    public ?string $addressCountry;

    /**
     * @var ?string $faxNumber
     */
    #[JsonProperty('fax_number')]
    public ?string $faxNumber;

    /**
     * @var ?string $badges JSON Array of Badge UUIDs
     */
    #[JsonProperty('badges')]
    public ?string $badges;

    /**
     * @var ?string $taxRateUuid
     */
    #[JsonProperty('tax_rate_uuid')]
    public ?string $taxRateUuid;

    /**
     * @var ?string $billingAttention
     */
    #[JsonProperty('billing_attention')]
    public ?string $billingAttention;

    /**
     * @var ?string $paymentTerms
     */
    #[JsonProperty('payment_terms')]
    public ?string $paymentTerms;

    /**
     * @var ?int $depositPercent
     */
    #[JsonProperty('deposit_percent')]
    public ?int $depositPercent;

    /**
     * @param array{
     *   name: string,
     *   abnNumber?: ?string,
     *   address?: ?string,
     *   billingAddress?: ?string,
     *   isIndividual?: ?int,
     *   parentCompanyUuid?: ?string,
     *   uuid?: ?string,
     *   website?: ?string,
     *   addressStreet?: ?string,
     *   addressCity?: ?string,
     *   addressState?: ?string,
     *   addressPostcode?: ?string,
     *   addressCountry?: ?string,
     *   faxNumber?: ?string,
     *   badges?: ?string,
     *   taxRateUuid?: ?string,
     *   billingAttention?: ?string,
     *   paymentTerms?: ?string,
     *   depositPercent?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->abnNumber = $values['abnNumber'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->billingAddress = $values['billingAddress'] ?? null;
        $this->isIndividual = $values['isIndividual'] ?? null;
        $this->parentCompanyUuid = $values['parentCompanyUuid'] ?? null;
        $this->uuid = $values['uuid'] ?? null;
        $this->website = $values['website'] ?? null;
        $this->addressStreet = $values['addressStreet'] ?? null;
        $this->addressCity = $values['addressCity'] ?? null;
        $this->addressState = $values['addressState'] ?? null;
        $this->addressPostcode = $values['addressPostcode'] ?? null;
        $this->addressCountry = $values['addressCountry'] ?? null;
        $this->faxNumber = $values['faxNumber'] ?? null;
        $this->badges = $values['badges'] ?? null;
        $this->taxRateUuid = $values['taxRateUuid'] ?? null;
        $this->billingAttention = $values['billingAttention'] ?? null;
        $this->paymentTerms = $values['paymentTerms'] ?? null;
        $this->depositPercent = $values['depositPercent'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
