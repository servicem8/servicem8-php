<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class JobContact extends JsonSerializableType
{
    /**
     * @var ?string $jobUuid UUID of the job this contact is associated with. Each job contact must be linked to a valid job in the system. This field cannot be changed once set.
     */
    #[JsonProperty('job_uuid')]
    public ?string $jobUuid;

    /**
     * @var ?string $first First name of the job contact. This information is synced with the job's contact information fields depending on the contact type.
     */
    #[JsonProperty('first')]
    public ?string $first;

    /**
     * @var ?string $last Last name of the job contact. This information is synced with the job's contact information fields depending on the contact type.
     */
    #[JsonProperty('last')]
    public ?string $last;

    /**
     * @var ?string $phone Landline or office phone number of the job contact. Format is flexible but should represent a valid phone number. This field syncs with the job's phone_1 field for job contacts or phone_2 field for billing contacts.
     */
    #[JsonProperty('phone')]
    public ?string $phone;

    /**
     * @var ?string $mobile Mobile phone number of the job contact. Format is flexible but should represent a valid mobile number. This field syncs with the job's mobile field for job contacts or billing_mobile field for billing contacts.
     */
    #[JsonProperty('mobile')]
    public ?string $mobile;

    /**
     * @var ?string $email Email address of the job contact. Should be a valid email format. Used for sending job-related communications. This field syncs with the job's email field for job contacts or billing_email field for billing contacts.
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $type Type of contact relationship to the job. Valid values are: 'JOB' (or 'Job Contact'), 'BILLING' (or 'Billing Contact'), or 'Property Manager'. Controls which job fields are updated when this contact record changes.
     */
    #[JsonProperty('type')]
    public ?string $type;

    /**
     * @var mixed $isPrimaryContact DEPRECATED
     */
    #[JsonProperty('is_primary_contact')]
    public mixed $isPrimaryContact;

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
     *   jobUuid?: ?string,
     *   first?: ?string,
     *   last?: ?string,
     *   phone?: ?string,
     *   mobile?: ?string,
     *   email?: ?string,
     *   type?: ?string,
     *   isPrimaryContact?: mixed,
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->jobUuid = $values['jobUuid'] ?? null;
        $this->first = $values['first'] ?? null;
        $this->last = $values['last'] ?? null;
        $this->phone = $values['phone'] ?? null;
        $this->mobile = $values['mobile'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->type = $values['type'] ?? null;
        $this->isPrimaryContact = $values['isPrimaryContact'] ?? null;
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
