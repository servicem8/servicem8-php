<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class FormResponse extends JsonSerializableType
{
    /**
     * @var ?string $formUuid UUID of the form used to generate this form response. Links to a specific form in the system that defines the fields to be gathered.
     */
    #[JsonProperty('form_uuid')]
    public ?string $formUuid;

    /**
     * @var ?string $staffUuid UUID of the staff member who completed this FormResponse.
     */
    #[JsonProperty('staff_uuid')]
    public ?string $staffUuid;

    /**
     * @var ?string $regardingObject The object type that this form response is associated with. Common values include 'job', 'asset', or 'company'. Works in conjunction with regarding_object_uuid to link this form response to a specific record in the system.
     */
    #[JsonProperty('regarding_object')]
    public ?string $regardingObject;

    /**
     * @var ?string $regardingObjectUuid UUID of the specific record this form response is linked to. For example, if regarding_object is 'job', this will be the UUID of the specific job. This creates a relationship between the form response and the object it refers to.
     */
    #[JsonProperty('regarding_object_uuid')]
    public ?string $regardingObjectUuid;

    /**
     * @var ?string $fieldData JSON array of form answers captured at submission time.
     */
    #[JsonProperty('field_data')]
    public ?string $fieldData;

    /**
     * @var ?string $timestamp Date and time when the form was submitted/completed. Used for sorting and displaying form responses chronologically. Format is YYYY-MM-DD HH:MM:SS in UTC timezone.
     */
    #[JsonProperty('timestamp')]
    public ?string $timestamp;

    /**
     * @var ?string $formByStaffUuid UUID of the staff member who completed or submitted this form. Identifies which user filled out the form. Used for tracking form submission history and staff accountability.
     */
    #[JsonProperty('form_by_staff_uuid')]
    public ?string $formByStaffUuid;

    /**
     * @var ?string $documentAttachmentUuid UUID of the document attachment generated from this form response. When a form is completed, it can generate a PDF document which is stored as an attachment. This field links to that generated document attachment.
     */
    #[JsonProperty('document_attachment_uuid')]
    public ?string $documentAttachmentUuid;

    /**
     * @var ?string $assetUuid UUID of the Asset this form response is related to. Used when the FormResponsepertains to a specific asset, such as equipment inspections, maintenance checklists, or asset condition reports.
     */
    #[JsonProperty('asset_uuid')]
    public ?string $assetUuid;

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
     *   formUuid?: ?string,
     *   staffUuid?: ?string,
     *   regardingObject?: ?string,
     *   regardingObjectUuid?: ?string,
     *   fieldData?: ?string,
     *   timestamp?: ?string,
     *   formByStaffUuid?: ?string,
     *   documentAttachmentUuid?: ?string,
     *   assetUuid?: ?string,
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->formUuid = $values['formUuid'] ?? null;
        $this->staffUuid = $values['staffUuid'] ?? null;
        $this->regardingObject = $values['regardingObject'] ?? null;
        $this->regardingObjectUuid = $values['regardingObjectUuid'] ?? null;
        $this->fieldData = $values['fieldData'] ?? null;
        $this->timestamp = $values['timestamp'] ?? null;
        $this->formByStaffUuid = $values['formByStaffUuid'] ?? null;
        $this->documentAttachmentUuid = $values['documentAttachmentUuid'] ?? null;
        $this->assetUuid = $values['assetUuid'] ?? null;
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
