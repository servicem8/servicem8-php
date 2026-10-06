<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class CompanyContactCreate extends JsonSerializableType
{
    /**
     * @var ?string $companyUuid The UUID of the company this contact belongs to
     */
    #[JsonProperty('company_uuid')]
    public ?string $companyUuid;

    /**
     * @var ?string $first First name of the company contact. Used for identifying and addressing the contact in communications.
     */
    #[JsonProperty('first')]
    public ?string $first;

    /**
     * @var ?string $last Last name of the company contact. Used together with the first name to identify the contact.
     */
    #[JsonProperty('last')]
    public ?string $last;

    /**
     * @var ?string $phone Primary phone number for the contact. Used for voice communications with the contact. Should include area code and can include international code.
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?string $mobile Mobile phone number for the contact. Used for SMS communications and alternative voice contact. Should include area code and can include international code.
     */
    #[JsonProperty('mobile')]
    public ?string $mobile;

    /**
     * @var ?string $email Email address of the contact. Used for sending email communications, quotes, invoices, and other electronic correspondence.
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $type Specifies the type of contact. Common values include 'BILLING' for billing contacts and 'JOB' for job contacts. This field determines how the contact is used in the system.
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var ?string $isPrimaryContact Indicates whether this contact is the primary contact for the company. Value of 1 means this is the primary contact, 0 means it is not. A company should have only one active primary contact.
     */
    #[JsonProperty('is_primary_contact')]
    public ?string $isPrimaryContact;

    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @param array{
     *   companyUuid?: ?string,
     *   first?: ?string,
     *   last?: ?string,
     *   phone?: ?string,
     *   mobile?: ?string,
     *   email?: ?string,
     *   type?: ?string,
     *   isPrimaryContact?: ?string,
     *   uuid?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->companyUuid = $values['companyUuid'] ?? null;
        $this->first = $values['first'] ?? null;
        $this->last = $values['last'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->mobile = $values['mobile'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->isPrimaryContact = $values['isPrimaryContact'] ?? null;
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
