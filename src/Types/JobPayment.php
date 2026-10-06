<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class JobPayment extends JsonSerializableType
{
    /**
     * @var ?string $jobUuid UUID of the job this payment is associated with. Each payment must be linked to a valid job in the system.
     */
    #[JsonProperty('job_uuid')]
    public ?string $jobUuid;

    /**
     * @var ?string $actionedByUuid UUID of the staff member who recorded or processed this payment. Used for tracking which staff member handled the transaction.
     */
    #[JsonProperty('actioned_by_uuid')]
    public ?string $actionedByUuid;

    /**
     * @var ?string $timestamp The date and time when this payment was recorded or processed. Format is YYYY-MM-DD HH:MM:SS. Used for payment reconciliation and reporting.
     */
    #[JsonProperty('timestamp')]
    public ?string $timestamp;

    /**
     * @var ?string $amount The payment amount in the account's currency.
     */
    #[JsonProperty('amount')]
    public ?string $amount;

    /**
     * @var ?string $method The payment method used for this transaction. Examples include 'Cash', 'Credit Card', 'Bank Transfer', 'Stripe', etc.
     */
    #[JsonProperty('method')]
    public ?string $method;

    /**
     * @var ?string $note Optional text field for storing additional information about the payment. Can be used to record reference numbers, transaction IDs, or other payment-specific details.
     */
    #[JsonProperty('note')]
    public ?string $note;

    /**
     * @var ?string $attachmentUuid UUID linking to a stored attachment related to this payment, such as a receipt image. This is an optional reference to an Attachment record.
     */
    #[JsonProperty('attachment_uuid')]
    public ?string $attachmentUuid;

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
     * @var ?int $isDeposit Boolean flag indicating whether this payment represents a deposit against future work (true) rather than a payment for completed work (false). Read-only in the API. (Read only).  Valid values are [0,1]
     */
    #[JsonProperty('is_deposit')]
    public ?int $isDeposit;

    /**
     * @param array{
     *   jobUuid?: ?string,
     *   actionedByUuid?: ?string,
     *   timestamp?: ?string,
     *   amount?: ?string,
     *   method?: ?string,
     *   note?: ?string,
     *   attachmentUuid?: ?string,
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     *   isDeposit?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->jobUuid = $values['jobUuid'] ?? null;
        $this->actionedByUuid = $values['actionedByUuid'] ?? null;
        $this->timestamp = $values['timestamp'] ?? null;
        $this->amount = $values['amount'] ?? null;
        $this->method = $values['method'] ?? null;
        $this->note = $values['note'] ?? null;
        $this->attachmentUuid = $values['attachmentUuid'] ?? null;
        $this->uuid = $values['uuid'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
        $this->isDeposit = $values['isDeposit'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
