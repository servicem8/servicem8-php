<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class JobCreate extends JsonSerializableType
{
    /**
     * @var ?string $createdByStaffUuid UUID of the staff member who created this job. Records which staff member initially added the job to the system.
     */
    #[JsonProperty('created_by_staff_uuid')]
    public ?string $createdByStaffUuid;

    /**
     * @var ?string $date The date the job was created or scheduled. Used for organizing jobs chronologically and for reference in reports.
     */
    #[JsonProperty('date')]
    public ?string $date;

    /**
     * @var ?string $companyUuid UUID reference to the client/company record associated with this job. Links the job to a client in the system, establishing the client-job relationship for billing and contact purposes.
     */
    #[JsonProperty('company_uuid')]
    public ?string $companyUuid;

    /**
     * @var ?string $billingAddress The address where invoices and billing information should be sent. If not specified, defaults to the job address.
     */
    #[JsonProperty('billing_address')]
    public ?string $billingAddress;

    /**
     * @var value-of<JobCreateStatus> $status Current status of the job. Controls where the Job appears in the Dispatch Board..  Valid values are [Quote,Work Order,Unsuccessful,Completed]
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var mixed $lng Longitude coordinate of the job location. Used for mapping and geolocation features. This is automatically populated based on the job address through geocoding.
     */
    #[JsonProperty('lng')]
    public mixed $lng;

    /**
     * @var mixed $lat Latitude coordinate of the job location. Used for mapping and geolocation features. This is automatically populated based on the job address through geocoding.
     */
    #[JsonProperty('lat')]
    public mixed $lat;

    /**
     * @var ?string $paymentDate Not used. Refer to JobPayment endpoint.
     */
    #[JsonProperty('payment_date')]
    public ?string $paymentDate;

    /**
     * @var ?string $paymentActionedByUuid Not used. Refer to JobPayment endpoint.
     */
    #[JsonProperty('payment_actioned_by_uuid')]
    public ?string $paymentActionedByUuid;

    /**
     * @var ?string $paymentMethod Not used. Refer to JobPayment endpoint.
     */
    #[JsonProperty('payment_method')]
    public ?string $paymentMethod;

    /**
     * @var ?string $paymentAmount Not used. Refer to JobPayment endpoint.
     */
    #[JsonProperty('payment_amount')]
    public ?string $paymentAmount;

    /**
     * @var ?string $categoryUuid UUID reference to the job category this job belongs to. Categories help organize jobs by type of work or department.
     */
    #[JsonProperty('category_uuid')]
    public ?string $categoryUuid;

    /**
     * @var ?string $paymentNote Not used. Refer to JobPayment endpoint.
     */
    #[JsonProperty('payment_note')]
    public ?string $paymentNote;

    /**
     * @var mixed $geoIsValid Indicates whether the geocoding for the job address was successful. When true, the latitude and longitude coordinates are considered accurate for mapping and location-based features.
     */
    #[JsonProperty('geo_is_valid')]
    public mixed $geoIsValid;

    /**
     * @var ?string $purchaseOrderNumber Client purchase order reference number for this job. Used for cross-referencing with external accounting or order management systems.
     */
    #[JsonProperty('purchase_order_number')]
    public ?string $purchaseOrderNumber;

    /**
     * @var ?int $invoiceSent Indicates whether an invoice has been sent for this job..  Valid values are [0,1]
     */
    #[JsonProperty('invoice_sent')]
    public ?int $invoiceSent;

    /**
     * @var mixed $invoiceSentStamp Timestamp when the invoice was sent to the client. Format is YYYY-MM-DD HH:MM:SS.
     */
    #[JsonProperty('invoice_sent_stamp')]
    public mixed $invoiceSentStamp;

    /**
     * @var ?string $invoiceDate The date the invoice was issued. This determines when payment is due based on the client's payment terms. Automatically set when a job is completed or manually when invoice is created.
     */
    #[JsonProperty('invoice_date')]
    public ?string $invoiceDate;

    /**
     * @var mixed $readyToInvoice DEPRECATED
     */
    #[JsonProperty('ready_to_invoice')]
    public mixed $readyToInvoice;

    /**
     * @var mixed $readyToInvoiceStamp DEPRECATED
     */
    #[JsonProperty('ready_to_invoice_stamp')]
    public mixed $readyToInvoiceStamp;

    /**
     * @var mixed $geoCountry The country component extracted from the geocoded job address. Automatically populated when an address is geocoded.
     */
    #[JsonProperty('geo_country')]
    public mixed $geoCountry;

    /**
     * @var mixed $geoPostcode The postal/zip code component extracted from the geocoded job address. Automatically populated when an address is geocoded.
     */
    #[JsonProperty('geo_postcode')]
    public mixed $geoPostcode;

    /**
     * @var mixed $geoState The state/province component extracted from the geocoded job address. Automatically populated when an address is geocoded.
     */
    #[JsonProperty('geo_state')]
    public mixed $geoState;

    /**
     * @var mixed $geoCity The city/locality component extracted from the geocoded job address. Automatically populated when an address is geocoded.
     */
    #[JsonProperty('geo_city')]
    public mixed $geoCity;

    /**
     * @var mixed $geoStreet The street name component extracted from the geocoded job address. Automatically populated when an address is geocoded.
     */
    #[JsonProperty('geo_street')]
    public mixed $geoStreet;

    /**
     * @var mixed $geoNumber The street number component extracted from the geocoded job address. Automatically populated when an address is geocoded.
     */
    #[JsonProperty('geo_number')]
    public mixed $geoNumber;

    /**
     * @var ?string $queueUuid The UUID of the queue this job belongs to.
     */
    #[JsonProperty('queue_uuid')]
    public ?string $queueUuid;

    /**
     * @var ?string $queueExpiryDate The date and time when the job expires from the queue.
     */
    #[JsonProperty('queue_expiry_date')]
    public ?string $queueExpiryDate;

    /**
     * @var ?string $queueAssignedStaffUuid The UUID of the staff member assigned to this job in the queue.
     */
    #[JsonProperty('queue_assigned_staff_uuid')]
    public ?string $queueAssignedStaffUuid;

    /**
     * @var ?string $badges JSON Array of Badge UUIDs
     */
    #[JsonProperty('badges')]
    public ?string $badges;

    /**
     * @var ?string $quoteDate The date and time that the job status was changed to Quote.
     */
    #[JsonProperty('quote_date')]
    public ?string $quoteDate;

    /**
     * @var ?int $quoteSent Boolean flag indicating whether a quote has been sent to the client for this job..  Valid values are [0,1]
     */
    #[JsonProperty('quote_sent')]
    public ?int $quoteSent;

    /**
     * @var mixed $quoteSentStamp Timestamp when the quote was sent to the client. Format is YYYY-MM-DD HH:MM:SS.
     */
    #[JsonProperty('quote_sent_stamp')]
    public mixed $quoteSentStamp;

    /**
     * @var ?string $workOrderDate The date and time that the job status was changed to Work Order.
     */
    #[JsonProperty('work_order_date')]
    public ?string $workOrderDate;

    /**
     * @var mixed $activeNetworkRequestUuid DEPRECATED
     */
    #[JsonProperty('active_network_request_uuid')]
    public mixed $activeNetworkRequestUuid;

    /**
     * @var mixed $relatedKnowledgeArticles DEPRECATED
     */
    #[JsonProperty('related_knowledge_articles')]
    public mixed $relatedKnowledgeArticles;

    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var ?string $jobAddress Physical address where the job is to be performed. This address is used for geocoding to place the job on the map.
     */
    #[JsonProperty('job_address')]
    public ?string $jobAddress;

    /**
     * @var ?string $jobDescription
     */
    #[JsonProperty('job_description')]
    public ?string $jobDescription;

    /**
     * @var ?string $workDoneDescription
     */
    #[JsonProperty('work_done_description')]
    public ?string $workDoneDescription;

    /**
     * @var ?int $paymentProcessed Indicates whether the job has been exported to the connected Accounting Package..  Valid values are [0,1]
     */
    #[JsonProperty('payment_processed')]
    public ?int $paymentProcessed;

    /**
     * @var ?int $paymentReceived Indicates whether full payment has been received for this job..  Valid values are [0,1]
     */
    #[JsonProperty('payment_received')]
    public ?int $paymentReceived;

    /**
     * @var ?string $completionDate The date and time that the job status was changed to Completed.
     */
    #[JsonProperty('completion_date')]
    public ?string $completionDate;

    /**
     * @var ?string $unsuccessfulDate The date and time that the job status was changed to Unsuccessful.
     */
    #[JsonProperty('unsuccessful_date')]
    public ?string $unsuccessfulDate;

    /**
     * @param array{
     *   status: value-of<JobCreateStatus>,
     *   createdByStaffUuid?: ?string,
     *   date?: ?string,
     *   companyUuid?: ?string,
     *   billingAddress?: ?string,
     *   lng?: mixed,
     *   lat?: mixed,
     *   paymentDate?: ?string,
     *   paymentActionedByUuid?: ?string,
     *   paymentMethod?: ?string,
     *   paymentAmount?: ?string,
     *   categoryUuid?: ?string,
     *   paymentNote?: ?string,
     *   geoIsValid?: mixed,
     *   purchaseOrderNumber?: ?string,
     *   invoiceSent?: ?int,
     *   invoiceSentStamp?: mixed,
     *   invoiceDate?: ?string,
     *   readyToInvoice?: mixed,
     *   readyToInvoiceStamp?: mixed,
     *   geoCountry?: mixed,
     *   geoPostcode?: mixed,
     *   geoState?: mixed,
     *   geoCity?: mixed,
     *   geoStreet?: mixed,
     *   geoNumber?: mixed,
     *   queueUuid?: ?string,
     *   queueExpiryDate?: ?string,
     *   queueAssignedStaffUuid?: ?string,
     *   badges?: ?string,
     *   quoteDate?: ?string,
     *   quoteSent?: ?int,
     *   quoteSentStamp?: mixed,
     *   workOrderDate?: ?string,
     *   activeNetworkRequestUuid?: mixed,
     *   relatedKnowledgeArticles?: mixed,
     *   uuid?: ?string,
     *   jobAddress?: ?string,
     *   jobDescription?: ?string,
     *   workDoneDescription?: ?string,
     *   paymentProcessed?: ?int,
     *   paymentReceived?: ?int,
     *   completionDate?: ?string,
     *   unsuccessfulDate?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->createdByStaffUuid = $values['createdByStaffUuid'] ?? null;
        $this->date = $values['date'] ?? null;
        $this->companyUuid = $values['companyUuid'] ?? null;
        $this->billingAddress = $values['billingAddress'] ?? null;
        $this->status = $values['status'];
        $this->lng = $values['lng'] ?? null;
        $this->lat = $values['lat'] ?? null;
        $this->paymentDate = $values['paymentDate'] ?? null;
        $this->paymentActionedByUuid = $values['paymentActionedByUuid'] ?? null;
        $this->paymentMethod = $values['paymentMethod'] ?? null;
        $this->paymentAmount = $values['paymentAmount'] ?? null;
        $this->categoryUuid = $values['categoryUuid'] ?? null;
        $this->paymentNote = $values['paymentNote'] ?? null;
        $this->geoIsValid = $values['geoIsValid'] ?? null;
        $this->purchaseOrderNumber = $values['purchaseOrderNumber'] ?? null;
        $this->invoiceSent = $values['invoiceSent'] ?? null;
        $this->invoiceSentStamp = $values['invoiceSentStamp'] ?? null;
        $this->invoiceDate = $values['invoiceDate'] ?? null;
        $this->readyToInvoice = $values['readyToInvoice'] ?? null;
        $this->readyToInvoiceStamp = $values['readyToInvoiceStamp'] ?? null;
        $this->geoCountry = $values['geoCountry'] ?? null;
        $this->geoPostcode = $values['geoPostcode'] ?? null;
        $this->geoState = $values['geoState'] ?? null;
        $this->geoCity = $values['geoCity'] ?? null;
        $this->geoStreet = $values['geoStreet'] ?? null;
        $this->geoNumber = $values['geoNumber'] ?? null;
        $this->queueUuid = $values['queueUuid'] ?? null;
        $this->queueExpiryDate = $values['queueExpiryDate'] ?? null;
        $this->queueAssignedStaffUuid = $values['queueAssignedStaffUuid'] ?? null;
        $this->badges = $values['badges'] ?? null;
        $this->quoteDate = $values['quoteDate'] ?? null;
        $this->quoteSent = $values['quoteSent'] ?? null;
        $this->quoteSentStamp = $values['quoteSentStamp'] ?? null;
        $this->workOrderDate = $values['workOrderDate'] ?? null;
        $this->activeNetworkRequestUuid = $values['activeNetworkRequestUuid'] ?? null;
        $this->relatedKnowledgeArticles = $values['relatedKnowledgeArticles'] ?? null;
        $this->uuid = $values['uuid'] ?? null;
        $this->jobAddress = $values['jobAddress'] ?? null;
        $this->jobDescription = $values['jobDescription'] ?? null;
        $this->workDoneDescription = $values['workDoneDescription'] ?? null;
        $this->paymentProcessed = $values['paymentProcessed'] ?? null;
        $this->paymentReceived = $values['paymentReceived'] ?? null;
        $this->completionDate = $values['completionDate'] ?? null;
        $this->unsuccessfulDate = $values['unsuccessfulDate'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
