<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\ArrayType;

class Attachment extends JsonSerializableType
{
    /**
     * @var ?string $relatedObject The type of object this attachment is related to (e.g., 'job', 'company', 'staff'). Must be a valid object type. Always stored in lowercase.
     */
    #[JsonProperty('related_object')]
    public ?string $relatedObject;

    /**
     * @var ?string $relatedObjectUuid UUID of the related object to which this attachment belongs. Must be a valid UUID of an existing object of the type specified in the related_object field.
     */
    #[JsonProperty('related_object_uuid')]
    public ?string $relatedObjectUuid;

    /**
     * @var ?string $attachmentName Name of the attachment file. Used for display purposes and for naming the file when downloaded. Does not need to include file extension as this is determined by the file_type field.
     */
    #[JsonProperty('attachment_name')]
    public ?string $attachmentName;

    /**
     * @var ?string $fileType File extension including the leading dot (e.g., '.pdf', '.jpg'). Determines how the file is processed and displayed. Always stored in lowercase.
     */
    #[JsonProperty('file_type')]
    public ?string $fileType;

    /**
     * @var ?string $attachmentSource Indicates the source or type of the attachment (e.g., 'INVOICE', 'QUOTE'). Used for filtering and determining how to display the attachment.
     */
    #[JsonProperty('attachment_source')]
    public ?string $attachmentSource;

    /**
     * @var ?string $tags Comma-separated list of tags associated with the attachment. Used for categorization and filtering of attachments.
     */
    #[JsonProperty('tags')]
    public ?string $tags;

    /**
     * @var ?float $lng Longitude coordinate where the attachment was created. Used for geolocation of photos and other attachments. Decimal degrees format.
     */
    #[JsonProperty('lng')]
    public ?float $lng;

    /**
     * @var ?float $lat Latitude coordinate where the attachment was created. Used for geolocation of photos and other attachments. Decimal degrees format.
     */
    #[JsonProperty('lat')]
    public ?float $lat;

    /**
     * @var ?int $photoWidth Width of the image in pixels. Only applicable for image attachments. Read-only in the API. (Read only)
     */
    #[JsonProperty('photo_width')]
    public ?int $photoWidth;

    /**
     * @var ?int $photoHeight Height of the image in pixels. Only applicable for image attachments. Read-only in the API. (Read only)
     */
    #[JsonProperty('photo_height')]
    public ?int $photoHeight;

    /**
     * @var ?string $extractedInfo Additional information extracted from the file, such as form responses or OCR text. Read-only in the API. (Read only)
     */
    #[JsonProperty('extracted_info')]
    public ?string $extractedInfo;

    /**
     * @var ?int $isFavourite Flag indicating whether this attachment has been marked as a favorite. Used for filtering and displaying attachments..  Valid values are [0,1]
     */
    #[JsonProperty('is_favourite')]
    public ?int $isFavourite;

    /**
     * @var mixed $className The specific class type of the attachment. Used for specialized attachment types that extend the base dboAttachment class. Read-only in the API.
     */
    #[JsonProperty('class_name')]
    public mixed $className;

    /**
     * @var ?array<string, mixed> $metadata Additional structured data associated with the attachment in JSON format. The schema varies depending on attachment type and source. Used to store extended information that doesn't fit into standard fields. (Read only)
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public ?array $metadata;

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
     * @var ?string $createdByStaffUuid
     */
    #[JsonProperty('created_by_staff_uuid')]
    public ?string $createdByStaffUuid;

    /**
     * @var ?string $timestamp
     */
    #[JsonProperty('timestamp')]
    public ?string $timestamp;

    /**
     * @var ?AttachmentSignatureData $signatureData (Read only)
     */
    #[JsonProperty('signature_data')]
    public ?AttachmentSignatureData $signatureData;

    /**
     * @param array{
     *   relatedObject?: ?string,
     *   relatedObjectUuid?: ?string,
     *   attachmentName?: ?string,
     *   fileType?: ?string,
     *   attachmentSource?: ?string,
     *   tags?: ?string,
     *   lng?: ?float,
     *   lat?: ?float,
     *   photoWidth?: ?int,
     *   photoHeight?: ?int,
     *   extractedInfo?: ?string,
     *   isFavourite?: ?int,
     *   className?: mixed,
     *   metadata?: ?array<string, mixed>,
     *   uuid?: ?string,
     *   active?: ?int,
     *   editDate?: mixed,
     *   createdByStaffUuid?: ?string,
     *   timestamp?: ?string,
     *   signatureData?: ?AttachmentSignatureData,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->relatedObject = $values['relatedObject'] ?? null;
        $this->relatedObjectUuid = $values['relatedObjectUuid'] ?? null;
        $this->attachmentName = $values['attachmentName'] ?? null;
        $this->fileType = $values['fileType'] ?? null;
        $this->attachmentSource = $values['attachmentSource'] ?? null;
        $this->tags = $values['tags'] ?? null;
        $this->lng = $values['lng'] ?? null;
        $this->lat = $values['lat'] ?? null;
        $this->photoWidth = $values['photoWidth'] ?? null;
        $this->photoHeight = $values['photoHeight'] ?? null;
        $this->extractedInfo = $values['extractedInfo'] ?? null;
        $this->isFavourite = $values['isFavourite'] ?? null;
        $this->className = $values['className'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
        $this->uuid = $values['uuid'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
        $this->createdByStaffUuid = $values['createdByStaffUuid'] ?? null;
        $this->timestamp = $values['timestamp'] ?? null;
        $this->signatureData = $values['signatureData'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
