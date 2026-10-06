<?php

namespace ServiceM8\Inbox\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

/**
 * Structured job data that will be merged into json_data when converting the message to a job
 */
class CreateInboxMessageRequestJobData extends JsonSerializableType
{
    /**
     * @var ?string $contactFirst Job contact first name
     */
    #[JsonProperty('contact_first')]
    public ?string $contactFirst;

    /**
     * @var ?string $contactLast Job contact last name
     */
    #[JsonProperty('contact_last')]
    public ?string $contactLast;

    /**
     * @var ?string $companyName Company/customer name
     */
    #[JsonProperty('company_name')]
    public ?string $companyName;

    /**
     * @var ?string $email Primary email address
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $mobile Mobile phone number
     */
    #[JsonProperty('mobile')]
    public ?string $mobile;

    /**
     * @var ?string $phone1 Primary phone number
     */
    #[JsonProperty('phone_1')]
    public ?string $phone1;

    /**
     * @var ?string $phone2 Secondary phone number
     */
    #[JsonProperty('phone_2')]
    public ?string $phone2;

    /**
     * @var ?string $billingContactFirst Billing contact first name
     */
    #[JsonProperty('billing_contact_first')]
    public ?string $billingContactFirst;

    /**
     * @var ?string $billingContactLast Billing contact last name
     */
    #[JsonProperty('billing_contact_last')]
    public ?string $billingContactLast;

    /**
     * @var ?string $billingEmail Billing email address
     */
    #[JsonProperty('billing_email')]
    public ?string $billingEmail;

    /**
     * @var ?string $billingMobile Billing mobile number
     */
    #[JsonProperty('billing_mobile')]
    public ?string $billingMobile;

    /**
     * @var ?string $billingAttention Billing attention line
     */
    #[JsonProperty('billing_attention')]
    public ?string $billingAttention;

    /**
     * @var ?string $jobDescription Description of the job/work to be done
     */
    #[JsonProperty('job_description')]
    public ?string $jobDescription;

    /**
     * @var ?string $jobAddress Service location address
     */
    #[JsonProperty('job_address')]
    public ?string $jobAddress;

    /**
     * @var ?string $billingAddress Billing address
     */
    #[JsonProperty('billing_address')]
    public ?string $billingAddress;

    /**
     * @var ?string $workDoneDescription Description of completed work
     */
    #[JsonProperty('work_done_description')]
    public ?string $workDoneDescription;

    /**
     * @param array{
     *   contactFirst?: ?string,
     *   contactLast?: ?string,
     *   companyName?: ?string,
     *   email?: ?string,
     *   mobile?: ?string,
     *   phone1?: ?string,
     *   phone2?: ?string,
     *   billingContactFirst?: ?string,
     *   billingContactLast?: ?string,
     *   billingEmail?: ?string,
     *   billingMobile?: ?string,
     *   billingAttention?: ?string,
     *   jobDescription?: ?string,
     *   jobAddress?: ?string,
     *   billingAddress?: ?string,
     *   workDoneDescription?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->contactFirst = $values['contactFirst'] ?? null;
        $this->contactLast = $values['contactLast'] ?? null;
        $this->companyName = $values['companyName'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->mobile = $values['mobile'] ?? null;
        $this->phone1 = $values['phone1'] ?? null;
        $this->phone2 = $values['phone2'] ?? null;
        $this->billingContactFirst = $values['billingContactFirst'] ?? null;
        $this->billingContactLast = $values['billingContactLast'] ?? null;
        $this->billingEmail = $values['billingEmail'] ?? null;
        $this->billingMobile = $values['billingMobile'] ?? null;
        $this->billingAttention = $values['billingAttention'] ?? null;
        $this->jobDescription = $values['jobDescription'] ?? null;
        $this->jobAddress = $values['jobAddress'] ?? null;
        $this->billingAddress = $values['billingAddress'] ?? null;
        $this->workDoneDescription = $values['workDoneDescription'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
