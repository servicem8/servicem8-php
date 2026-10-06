<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class Supplier extends JsonSerializableType
{
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
     * @var ?string $name The name of the supplier company
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $businessNumber Business registration number (e.g., ABN, EIN)
     */
    #[JsonProperty('business_number')]
    public ?string $businessNumber;

    /**
     * @var ?string $address Physical address of the supplier store
     */
    #[JsonProperty('address')]
    public ?string $address;

    /**
     * @var ?string $email Primary contact email address
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $phone Primary contact phone number
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?string $accountNumber Your account number with this supplier
     */
    #[JsonProperty('account_number')]
    public ?string $accountNumber;

    /**
     * @var ?float $lng Longitude coordinate of the supplier's address (Read only)
     */
    #[JsonProperty('lng')]
    public ?float $lng;

    /**
     * @var ?float $lat Latitude coordinate of the supplier's address (Read only)
     */
    #[JsonProperty('lat')]
    public ?float $lat;

    /**
     * @var ?int $geoIsValid Whether the geocoded coordinates are valid (Read only).  Valid values are [0,1]
     */
    #[JsonProperty('geo_is_valid')]
    public ?int $geoIsValid;

    /**
     * @var ?string $geoCountry Country from geocoded address (Read only)
     */
    #[JsonProperty('geo_country')]
    public ?string $geoCountry;

    /**
     * @var ?string $geoPostcode Postcode from geocoded address (Read only)
     */
    #[JsonProperty('geo_postcode')]
    public ?string $geoPostcode;

    /**
     * @var ?string $geoState State from geocoded address (Read only)
     */
    #[JsonProperty('geo_state')]
    public ?string $geoState;

    /**
     * @var ?string $geoCity City from geocoded address (Read only)
     */
    #[JsonProperty('geo_city')]
    public ?string $geoCity;

    /**
     * @var ?string $geoStreet Street name from geocoded address (Read only)
     */
    #[JsonProperty('geo_street')]
    public ?string $geoStreet;

    /**
     * @var ?string $geoNumber Street number from geocoded address (Read only)
     */
    #[JsonProperty('geo_number')]
    public ?string $geoNumber;

    /**
     * @param array{
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     *   name?: ?string,
     *   businessNumber?: ?string,
     *   address?: ?string,
     *   email?: ?string,
     *   phone?: ?string,
     *   accountNumber?: ?string,
     *   lng?: ?float,
     *   lat?: ?float,
     *   geoIsValid?: ?int,
     *   geoCountry?: ?string,
     *   geoPostcode?: ?string,
     *   geoState?: ?string,
     *   geoCity?: ?string,
     *   geoStreet?: ?string,
     *   geoNumber?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->businessNumber = $values['businessNumber'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->accountNumber = $values['accountNumber'] ?? null;
        $this->lng = $values['lng'] ?? null;
        $this->lat = $values['lat'] ?? null;
        $this->geoIsValid = $values['geoIsValid'] ?? null;
        $this->geoCountry = $values['geoCountry'] ?? null;
        $this->geoPostcode = $values['geoPostcode'] ?? null;
        $this->geoState = $values['geoState'] ?? null;
        $this->geoCity = $values['geoCity'] ?? null;
        $this->geoStreet = $values['geoStreet'] ?? null;
        $this->geoNumber = $values['geoNumber'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
