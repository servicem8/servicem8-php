<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class Vendor extends JsonSerializableType
{
    /**
     * @var ?string $businessNumber The company's business identification number as required by the local tax authority. For example, ABN in Australia, EIN in the USA, VAT number in the EU, or business registration number. Format varies by country/region.
     */
    #[JsonProperty('business_number')]
    public ?string $businessNumber;

    /**
     * @var ?string $email Primary email address for the company. Used for system notifications, customer communications, and as the default sender address for emails sent from the system.
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $emailAccounts Accounts/billing email accounts configured for the company.
     */
    #[JsonProperty('email_accounts')]
    public ?string $emailAccounts;

    /**
     * @var ?string $billingAddress The company's billing address where invoices and financial correspondence should be sent.
     */
    #[JsonProperty('billing_address')]
    public ?string $billingAddress;

    /**
     * @var mixed $acceptedPaymentMethods DEPRECATED
     */
    #[JsonProperty('accepted_payment_methods')]
    public mixed $acceptedPaymentMethods;

    /**
     * @var ?string $defaultRegion Default geographic region for the company. Affects currency, tax calculations, date formats, and other region-specific behaviors in the system.
     */
    #[JsonProperty('default_region')]
    public ?string $defaultRegion;

    /**
     * @var ?string $currency Three-letter ISO currency code (e.g., 'USD', 'AUD', 'EUR') representing the company's primary currency. Used for all financial calculations and displays in the system.
     */
    #[JsonProperty('currency')]
    public ?string $currency;

    /**
     * @var ?string $openingTimeMonday The minute of the day (from midnight) when the business opens on Monday. For example, 480 represents 8:00 AM (8 hours × 60 minutes). Used for scheduling and availability calculations.
     */
    #[JsonProperty('opening_time_monday')]
    public ?string $openingTimeMonday;

    /**
     * @var ?string $closingTimeMonday The minute of the day (from midnight) when the business closes on Monday. For example, 1020 represents 5:00 PM (17 hours × 60 minutes). Used for scheduling and availability calculations.
     */
    #[JsonProperty('closing_time_monday')]
    public ?string $closingTimeMonday;

    /**
     * @var ?string $openingTimeTuesday The minute of the day (from midnight) when the business opens on Tuesday. For example, 480 represents 8:00 AM (8 hours × 60 minutes). Used for scheduling and availability calculations.
     */
    #[JsonProperty('opening_time_tuesday')]
    public ?string $openingTimeTuesday;

    /**
     * @var ?string $closingTimeTuesday The minute of the day (from midnight) when the business closes on Tuesday. For example, 1020 represents 5:00 PM (17 hours × 60 minutes). Used for scheduling and availability calculations.
     */
    #[JsonProperty('closing_time_tuesday')]
    public ?string $closingTimeTuesday;

    /**
     * @var ?string $openingTimeWednesday The minute of the day (from midnight) when the business opens on Wednesday. For example, 480 represents 8:00 AM (8 hours × 60 minutes). Used for scheduling and availability calculations.
     */
    #[JsonProperty('opening_time_wednesday')]
    public ?string $openingTimeWednesday;

    /**
     * @var ?string $closingTimeWednesday The minute of the day (from midnight) when the business closes on Wednesday. For example, 1020 represents 5:00 PM (17 hours × 60 minutes). Used for scheduling and availability calculations.
     */
    #[JsonProperty('closing_time_wednesday')]
    public ?string $closingTimeWednesday;

    /**
     * @var ?string $openingTimeThursday The minute of the day (from midnight) when the business opens on Thursday. For example, 480 represents 8:00 AM (8 hours × 60 minutes). Used for scheduling and availability calculations.
     */
    #[JsonProperty('opening_time_thursday')]
    public ?string $openingTimeThursday;

    /**
     * @var ?string $closingTimeThursday The minute of the day (from midnight) when the business closes on Thursday. For example, 1020 represents 5:00 PM (17 hours × 60 minutes). Used for scheduling and availability calculations.
     */
    #[JsonProperty('closing_time_thursday')]
    public ?string $closingTimeThursday;

    /**
     * @var ?string $openingTimeFriday The minute of the day (from midnight) when the business opens on Friday. For example, 480 represents 8:00 AM (8 hours × 60 minutes). Used for scheduling and availability calculations.
     */
    #[JsonProperty('opening_time_friday')]
    public ?string $openingTimeFriday;

    /**
     * @var ?string $closingTimeFriday The minute of the day (from midnight) when the business closes on Friday. For example, 1020 represents 5:00 PM (17 hours × 60 minutes). Used for scheduling and availability calculations.
     */
    #[JsonProperty('closing_time_friday')]
    public ?string $closingTimeFriday;

    /**
     * @var ?string $openingTimeSaturday The minute of the day (from midnight) when the business opens on Saturday. For example, 480 represents 8:00 AM (8 hours × 60 minutes). Used for scheduling and availability calculations.
     */
    #[JsonProperty('opening_time_saturday')]
    public ?string $openingTimeSaturday;

    /**
     * @var ?string $closingTimeSaturday The minute of the day (from midnight) when the business closes on Saturday. For example, 1020 represents 5:00 PM (17 hours × 60 minutes). Used for scheduling and availability calculations.
     */
    #[JsonProperty('closing_time_saturday')]
    public ?string $closingTimeSaturday;

    /**
     * @var ?string $openingTimeSunday The minute of the day (from midnight) when the business opens on Sunday. For example, 480 represents 8:00 AM (8 hours × 60 minutes). Used for scheduling and availability calculations.
     */
    #[JsonProperty('opening_time_sunday')]
    public ?string $openingTimeSunday;

    /**
     * @var ?string $closingTimeSunday The minute of the day (from midnight) when the business closes on Sunday. For example, 1020 represents 5:00 PM (17 hours × 60 minutes). Used for scheduling and availability calculations.
     */
    #[JsonProperty('closing_time_sunday')]
    public ?string $closingTimeSunday;

    /**
     * @var ?string $timezoneName IANA timezone name (e.g., 'America/New_York', 'Australia/Sydney') for the company's primary location. Used for date/time calculations, scheduling, and display of times across the system.
     */
    #[JsonProperty('timezone_name')]
    public ?string $timezoneName;

    /**
     * @var ?string $invoiceTerms Text describing the payment terms that appear on invoices. For example, '14 days', 'Net 30', etc. Used to communicate payment expectations to customers on invoices and financial documents.
     */
    #[JsonProperty('invoice_terms')]
    public ?string $invoiceTerms;

    /**
     * @var ?string $jobDefaultStatus Default status for new jobs created in the system. Valid values are 'Quote' or 'Work Order'. Controls the initial state of newly created jobs.
     */
    #[JsonProperty('job_default_status')]
    public ?string $jobDefaultStatus;

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
     * @var string $name Company Name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $abnNumber Company ABN Number (Australian Accounts Only)
     */
    #[JsonProperty('abn_number')]
    public ?string $abnNumber;

    /**
     * @var ?string $website Company Website address
     */
    #[JsonProperty('website')]
    public ?string $website;

    /**
     * @param array{
     *   name: string,
     *   businessNumber?: ?string,
     *   email?: ?string,
     *   emailAccounts?: ?string,
     *   billingAddress?: ?string,
     *   acceptedPaymentMethods?: mixed,
     *   defaultRegion?: ?string,
     *   currency?: ?string,
     *   openingTimeMonday?: ?string,
     *   closingTimeMonday?: ?string,
     *   openingTimeTuesday?: ?string,
     *   closingTimeTuesday?: ?string,
     *   openingTimeWednesday?: ?string,
     *   closingTimeWednesday?: ?string,
     *   openingTimeThursday?: ?string,
     *   closingTimeThursday?: ?string,
     *   openingTimeFriday?: ?string,
     *   closingTimeFriday?: ?string,
     *   openingTimeSaturday?: ?string,
     *   closingTimeSaturday?: ?string,
     *   openingTimeSunday?: ?string,
     *   closingTimeSunday?: ?string,
     *   timezoneName?: ?string,
     *   invoiceTerms?: ?string,
     *   jobDefaultStatus?: ?string,
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     *   abnNumber?: ?string,
     *   website?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->businessNumber = $values['businessNumber'] ?? null;
        $this->email = $values['email'] ?? null;
        $this->emailAccounts = $values['emailAccounts'] ?? null;
        $this->billingAddress = $values['billingAddress'] ?? null;
        $this->acceptedPaymentMethods = $values['acceptedPaymentMethods'] ?? null;
        $this->defaultRegion = $values['defaultRegion'] ?? null;
        $this->currency = $values['currency'] ?? null;
        $this->openingTimeMonday = $values['openingTimeMonday'] ?? null;
        $this->closingTimeMonday = $values['closingTimeMonday'] ?? null;
        $this->openingTimeTuesday = $values['openingTimeTuesday'] ?? null;
        $this->closingTimeTuesday = $values['closingTimeTuesday'] ?? null;
        $this->openingTimeWednesday = $values['openingTimeWednesday'] ?? null;
        $this->closingTimeWednesday = $values['closingTimeWednesday'] ?? null;
        $this->openingTimeThursday = $values['openingTimeThursday'] ?? null;
        $this->closingTimeThursday = $values['closingTimeThursday'] ?? null;
        $this->openingTimeFriday = $values['openingTimeFriday'] ?? null;
        $this->closingTimeFriday = $values['closingTimeFriday'] ?? null;
        $this->openingTimeSaturday = $values['openingTimeSaturday'] ?? null;
        $this->closingTimeSaturday = $values['closingTimeSaturday'] ?? null;
        $this->openingTimeSunday = $values['openingTimeSunday'] ?? null;
        $this->closingTimeSunday = $values['closingTimeSunday'] ?? null;
        $this->timezoneName = $values['timezoneName'] ?? null;
        $this->invoiceTerms = $values['invoiceTerms'] ?? null;
        $this->jobDefaultStatus = $values['jobDefaultStatus'] ?? null;
        $this->uuid = $values['uuid'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
        $this->name = $values['name'];
        $this->abnNumber = $values['abnNumber'] ?? null;
        $this->website = $values['website'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
