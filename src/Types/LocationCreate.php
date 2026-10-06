<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class LocationCreate extends JsonSerializableType
{
    /**
     * @var string $name Location's name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $line1 First line of the location's address. Contains the street number and street name.
     */
    #[JsonProperty('line1')]
    public ?string $line1;

    /**
     * @var ?string $line2 Second line of the location's address. Used for additional address information such as building/suite numbers or street details.
     */
    #[JsonProperty('line2')]
    public ?string $line2;

    /**
     * @var ?string $line3 Third line of the location's address. Used for additional address details when line1 and line2 are not sufficient.
     */
    #[JsonProperty('line3')]
    public ?string $line3;

    /**
     * @var ?string $city City, town, or suburb of the location's address.
     */
    #[JsonProperty('city')]
    public ?string $city;

    /**
     * @var ?string $country Country of the location's address. Country names are sanitized through the RegionsanitiseCountryName function.
     */
    #[JsonProperty('country')]
    public ?string $country;

    /**
     * @var ?string $postCode Postal code or ZIP code of the location's address. Format varies by country.
     */
    #[JsonProperty('post_code')]
    public ?string $postCode;

    /**
     * @var ?string $phone1 Primary contact phone number for the location. Can include formatting characters.
     */
    #[JsonProperty('phone_1')]
    public ?string $phone1;

    /**
     * @var string $state Address State
     */
    #[JsonProperty('state')]
    public string $state;

    /**
     * @var ?float $lng Longitude coordinate of the location in decimal degrees format. Used for geolocation and distance calculations. Expected range is between -180 and 180 degrees.
     */
    #[JsonProperty('lng')]
    public ?float $lng;

    /**
     * @var ?float $lat Latitude coordinate of the location in decimal degrees format. Used for geolocation and distance calculations. Expected range is between -90 and 90 degrees.
     */
    #[JsonProperty('lat')]
    public ?float $lat;

    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @param array{
     *   name: string,
     *   state: string,
     *   line1?: ?string,
     *   line2?: ?string,
     *   line3?: ?string,
     *   city?: ?string,
     *   country?: ?string,
     *   postCode?: ?string,
     *   phone1?: ?string,
     *   lng?: ?float,
     *   lat?: ?float,
     *   uuid?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->line1 = $values['line1'] ?? null;
        $this->line2 = $values['line2'] ?? null;
        $this->line3 = $values['line3'] ?? null;
        $this->city = $values['city'] ?? null;
        $this->country = $values['country'] ?? null;
        $this->postCode = $values['postCode'] ?? null;
        $this->phone1 = $values['phone1'] ?? null;
        $this->state = $values['state'];
        $this->lng = $values['lng'] ?? null;
        $this->lat = $values['lat'] ?? null;
        $this->uuid = $values['uuid'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
