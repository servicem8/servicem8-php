<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class SupplierCreate extends JsonSerializableType
{
    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

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
     * @param array{
     *   uuid?: ?string,
     *   name?: ?string,
     *   businessNumber?: ?string,
     *   address?: ?string,
     *   email?: ?string,
     *   phone?: ?string,
     *   accountNumber?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->name = $values['name'] ?? null;
        $this->businessNumber = $values['businessNumber'] ?? null;
        $this->address = $values['address'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->accountNumber = $values['accountNumber'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
