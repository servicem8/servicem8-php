<?php

namespace ServiceM8\ServiceTemplates\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\ArrayType;
use ServiceM8\Types\ServiceTemplateQuestion;
use ServiceM8\Types\ServiceTemplateVariation;
use ServiceM8\Types\ServiceTemplateStaffCapability;

class ServiceTemplateUpsertRequest extends JsonSerializableType
{
    /**
     * @var ?string $name Customer-visible service name.
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?string $serviceType Service workflow type stored on the Service DBO.
     */
    #[JsonProperty('service_type')]
    public ?string $serviceType;

    /**
     * @var ?string $bookingType How bookings for this service are scheduled.
     */
    #[JsonProperty('booking_type')]
    public ?string $bookingType;

    /**
     * @var ?string $pricingMethod Pricing model used when quoting or booking this service.
     */
    #[JsonProperty('pricing_method')]
    public ?string $pricingMethod;

    /**
     * @var ?string $serviceDescription Customer-facing description shown before booking.
     */
    #[JsonProperty('service_description')]
    public ?string $serviceDescription;

    /**
     * @var ?string $jobDescription Default job description copied onto jobs created from this service.
     */
    #[JsonProperty('job_description')]
    public ?string $jobDescription;

    /**
     * @var ?string $workDoneDescription Default work done description copied onto completed jobs.
     */
    #[JsonProperty('work_done_description')]
    public ?string $workDoneDescription;

    /**
     * @var ?string $jobCategoryUuid Job category UUID assigned to jobs created from this service.
     */
    #[JsonProperty('job_category_uuid')]
    public ?string $jobCategoryUuid;

    /**
     * @var ?string $jobBadgesJson JSON-encoded badge configuration stored on the Service DBO.
     */
    #[JsonProperty('job_badges_json')]
    public ?string $jobBadgesJson;

    /**
     * @var ?array<string, mixed> $paymentTerms Payment terms object stored as payment_terms_json.
     */
    #[JsonProperty('payment_terms'), ArrayType(['string' => 'mixed'])]
    public ?array $paymentTerms;

    /**
     * @var ?int $isAvailableForCustomerBooking Whether this service is available through customer booking flows.
     */
    #[JsonProperty('is_available_for_customer_booking')]
    public ?int $isAvailableForCustomerBooking;

    /**
     * @var ?int $minimumCustomerBookingLeadTimeMinutes Minimum lead time before a customer can book this service.
     */
    #[JsonProperty('minimum_customer_booking_lead_time_minutes')]
    public ?int $minimumCustomerBookingLeadTimeMinutes;

    /**
     * @var ?int $maximumCustomerBookingLeadTimeMinutes Maximum lead time ahead that a customer can book this service.
     */
    #[JsonProperty('maximum_customer_booking_lead_time_minutes')]
    public ?int $maximumCustomerBookingLeadTimeMinutes;

    /**
     * @var ?int $active Soft-delete flag; set to 0 to deactivate the service.
     */
    #[JsonProperty('active')]
    public ?int $active;

    /**
     * @var ?array<ServiceTemplateQuestion> $questions Sparse question changes; omitted existing questions are untouched.
     */
    #[JsonProperty('questions'), ArrayType([ServiceTemplateQuestion::class])]
    public ?array $questions;

    /**
     * @var ?array<ServiceTemplateVariation> $variations Sparse variation changes; omitted existing variations are untouched.
     */
    #[JsonProperty('variations'), ArrayType([ServiceTemplateVariation::class])]
    public ?array $variations;

    /**
     * @var ?array<ServiceTemplateStaffCapability> $staffCapabilities Sparse staff capability changes; omitted existing capabilities are untouched.
     */
    #[JsonProperty('staffCapabilities'), ArrayType([ServiceTemplateStaffCapability::class])]
    public ?array $staffCapabilities;

    /**
     * @param array{
     *   name?: ?string,
     *   serviceType?: ?string,
     *   bookingType?: ?string,
     *   pricingMethod?: ?string,
     *   serviceDescription?: ?string,
     *   jobDescription?: ?string,
     *   workDoneDescription?: ?string,
     *   jobCategoryUuid?: ?string,
     *   jobBadgesJson?: ?string,
     *   paymentTerms?: ?array<string, mixed>,
     *   isAvailableForCustomerBooking?: ?int,
     *   minimumCustomerBookingLeadTimeMinutes?: ?int,
     *   maximumCustomerBookingLeadTimeMinutes?: ?int,
     *   active?: ?int,
     *   questions?: ?array<ServiceTemplateQuestion>,
     *   variations?: ?array<ServiceTemplateVariation>,
     *   staffCapabilities?: ?array<ServiceTemplateStaffCapability>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->name = $values['name'] ?? null;
        $this->serviceType = $values['serviceType'] ?? null;
        $this->bookingType = $values['bookingType'] ?? null;
        $this->pricingMethod = $values['pricingMethod'] ?? null;
        $this->serviceDescription = $values['serviceDescription'] ?? null;
        $this->jobDescription = $values['jobDescription'] ?? null;
        $this->workDoneDescription = $values['workDoneDescription'] ?? null;
        $this->jobCategoryUuid = $values['jobCategoryUuid'] ?? null;
        $this->jobBadgesJson = $values['jobBadgesJson'] ?? null;
        $this->paymentTerms = $values['paymentTerms'] ?? null;
        $this->isAvailableForCustomerBooking = $values['isAvailableForCustomerBooking'] ?? null;
        $this->minimumCustomerBookingLeadTimeMinutes = $values['minimumCustomerBookingLeadTimeMinutes'] ?? null;
        $this->maximumCustomerBookingLeadTimeMinutes = $values['maximumCustomerBookingLeadTimeMinutes'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->questions = $values['questions'] ?? null;
        $this->variations = $values['variations'] ?? null;
        $this->staffCapabilities = $values['staffCapabilities'] ?? null;
    }
}
