<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class Job extends JsonSerializableType
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
     * @var value-of<JobStatus> $status Current status of the job. Controls where the Job appears in the Dispatch Board..  Valid values are [Quote,Work Order,Unsuccessful,Completed]
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var ?float $lng The longitude coordinate of the job location. (Read only)
     */
    #[JsonProperty('lng')]
    public ?float $lng;

    /**
     * @var ?float $lat The latitude coordinate of the job location. (Read only)
     */
    #[JsonProperty('lat')]
    public ?float $lat;

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
     * @var ?int $geoIsValid Indicates whether the geocoding for the job address is valid. If this is false, the lat, lng, and other geo_ fields should not be used. (Read only).  Valid values are [0,1]
     */
    #[JsonProperty('geo_is_valid')]
    public ?int $geoIsValid;

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
     * @var ?string $invoiceSentStamp The date and time when the invoice was sent. (Read only)
     */
    #[JsonProperty('invoice_sent_stamp')]
    public ?string $invoiceSentStamp;

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
     * @var ?string $geoCountry The country field of the job address. (Read only)
     */
    #[JsonProperty('geo_country')]
    public ?string $geoCountry;

    /**
     * @var ?string $geoPostcode The postcode/ZIP code field of the job address. (Read only)
     */
    #[JsonProperty('geo_postcode')]
    public ?string $geoPostcode;

    /**
     * @var ?string $geoState The state/province field of the job address. (Read only)
     */
    #[JsonProperty('geo_state')]
    public ?string $geoState;

    /**
     * @var ?string $geoCity The city/suburb field of the job address. (Read only)
     */
    #[JsonProperty('geo_city')]
    public ?string $geoCity;

    /**
     * @var ?string $geoStreet The street name field of the job address. (Read only)
     */
    #[JsonProperty('geo_street')]
    public ?string $geoStreet;

    /**
     * @var ?string $geoNumber The street number field of the job address. (Read only)
     */
    #[JsonProperty('geo_number')]
    public ?string $geoNumber;

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
     * @var ?string $quoteSentStamp Timestamp when the quote was sent to the client. Format is YYYY-MM-DD HH:MM:SS. (Read only)
     */
    #[JsonProperty('quote_sent_stamp')]
    public ?string $quoteSentStamp;

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
     * @var ?string $generatedJobId System-generated unique job identifier. This is read-only and automatically assigned when a job is created. (Read only)
     */
    #[JsonProperty('generated_job_id')]
    public ?string $generatedJobId;

    /**
     * @var ?string $totalInvoiceAmount The total amount to be invoiced for this job. (Read only)
     */
    #[JsonProperty('total_invoice_amount')]
    public ?string $totalInvoiceAmount;

    /**
     * @var ?int $paymentProcessed Indicates whether the job has been exported to the connected Accounting Package..  Valid values are [0,1]
     */
    #[JsonProperty('payment_processed')]
    public ?int $paymentProcessed;

    /**
     * @var ?string $paymentProcessedStamp The date and time the job has been exported to the connected Accounting Package. (Read only)
     */
    #[JsonProperty('payment_processed_stamp')]
    public ?string $paymentProcessedStamp;

    /**
     * @var ?int $paymentReceived Indicates whether full payment has been received for this job..  Valid values are [0,1]
     */
    #[JsonProperty('payment_received')]
    public ?int $paymentReceived;

    /**
     * @var ?string $paymentReceivedStamp The date and time when full payment was received. (Read only)
     */
    #[JsonProperty('payment_received_stamp')]
    public ?string $paymentReceivedStamp;

    /**
     * @var ?string $completionDate The date and time that the job status was changed to Completed.
     */
    #[JsonProperty('completion_date')]
    public ?string $completionDate;

    /**
     * @var ?string $completionActionedByUuid UUID of the staff member who marked this job as completed. References a staff record in the system. (Read only)
     */
    #[JsonProperty('completion_actioned_by_uuid')]
    public ?string $completionActionedByUuid;

    /**
     * @var ?string $unsuccessfulDate The date and time that the job status was changed to Unsuccessful.
     */
    #[JsonProperty('unsuccessful_date')]
    public ?string $unsuccessfulDate;

    /**
     * @var ?string $jobIsScheduledUntilStamp The end date/time of the last scheduled activity for this job. After this date, the job is considered Unscheduled. (Read only)
     */
    #[JsonProperty('job_is_scheduled_until_stamp')]
    public ?string $jobIsScheduledUntilStamp;

    /**
     * @param array{
     *   status: value-of<JobStatus>,
     *   createdByStaffUuid?: ?string,
     *   date?: ?string,
     *   companyUuid?: ?string,
     *   billingAddress?: ?string,
     *   lng?: ?float,
     *   lat?: ?float,
     *   paymentDate?: ?string,
     *   paymentActionedByUuid?: ?string,
     *   paymentMethod?: ?string,
     *   paymentAmount?: ?string,
     *   categoryUuid?: ?string,
     *   paymentNote?: ?string,
     *   geoIsValid?: ?int,
     *   purchaseOrderNumber?: ?string,
     *   invoiceSent?: ?int,
     *   invoiceSentStamp?: ?string,
     *   invoiceDate?: ?string,
     *   readyToInvoice?: mixed,
     *   readyToInvoiceStamp?: mixed,
     *   geoCountry?: ?string,
     *   geoPostcode?: ?string,
     *   geoState?: ?string,
     *   geoCity?: ?string,
     *   geoStreet?: ?string,
     *   geoNumber?: ?string,
     *   queueUuid?: ?string,
     *   queueExpiryDate?: ?string,
     *   queueAssignedStaffUuid?: ?string,
     *   badges?: ?string,
     *   quoteDate?: ?string,
     *   quoteSent?: ?int,
     *   quoteSentStamp?: ?string,
     *   workOrderDate?: ?string,
     *   activeNetworkRequestUuid?: mixed,
     *   relatedKnowledgeArticles?: mixed,
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     *   jobAddress?: ?string,
     *   jobDescription?: ?string,
     *   workDoneDescription?: ?string,
     *   generatedJobId?: ?string,
     *   totalInvoiceAmount?: ?string,
     *   paymentProcessed?: ?int,
     *   paymentProcessedStamp?: ?string,
     *   paymentReceived?: ?int,
     *   paymentReceivedStamp?: ?string,
     *   completionDate?: ?string,
     *   completionActionedByUuid?: ?string,
     *   unsuccessfulDate?: ?string,
     *   jobIsScheduledUntilStamp?: ?string,
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
        $this->active = $values['active'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
        $this->jobAddress = $values['jobAddress'] ?? null;
        $this->jobDescription = $values['jobDescription'] ?? null;
        $this->workDoneDescription = $values['workDoneDescription'] ?? null;
        $this->generatedJobId = $values['generatedJobId'] ?? null;
        $this->totalInvoiceAmount = $values['totalInvoiceAmount'] ?? null;
        $this->paymentProcessed = $values['paymentProcessed'] ?? null;
        $this->paymentProcessedStamp = $values['paymentProcessedStamp'] ?? null;
        $this->paymentReceived = $values['paymentReceived'] ?? null;
        $this->paymentReceivedStamp = $values['paymentReceivedStamp'] ?? null;
        $this->completionDate = $values['completionDate'] ?? null;
        $this->completionActionedByUuid = $values['completionActionedByUuid'] ?? null;
        $this->unsuccessfulDate = $values['unsuccessfulDate'] ?? null;
        $this->jobIsScheduledUntilStamp = $values['jobIsScheduledUntilStamp'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
