<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

/**
 * (Read only)
 */
class AttachmentSignatureData extends JsonSerializableType
{
    /**
     * @var bool $templateSupportsSignature True if the template from which this document was produced supports signing
     */
    #[JsonProperty('templateSupportsSignature')]
    public bool $templateSupportsSignature;

    /**
     * @var ?string $documentSnapshotUuid The template mergefield snapshot which captured the unsigned document state
     */
    #[JsonProperty('documentSnapshotUUID')]
    public ?string $documentSnapshotUuid;

    /**
     * @var ?float $documentSnapshotExpiresUnixtime The unixtime at which the snapshot expires
     */
    #[JsonProperty('documentSnapshotExpiresUnixtime')]
    public ?float $documentSnapshotExpiresUnixtime;

    /**
     * @var ?string $signedDocumentAttachmentUuid If a signed version of this document exists, references the UUID of the attachment
     */
    #[JsonProperty('signedDocumentAttachmentUUID')]
    public ?string $signedDocumentAttachmentUuid;

    /**
     * @var ?string $unsignedDocumentAttachmentUuid References the UUID of the unsigned version of this document
     */
    #[JsonProperty('unsignedDocumentAttachmentUUID')]
    public ?string $unsignedDocumentAttachmentUuid;

    /**
     * @var ?AttachmentSignatureDataSignatureDetails $signatureDetails
     */
    #[JsonProperty('signatureDetails')]
    public ?AttachmentSignatureDataSignatureDetails $signatureDetails;

    /**
     * @param array{
     *   templateSupportsSignature: bool,
     *   documentSnapshotUuid?: ?string,
     *   documentSnapshotExpiresUnixtime?: ?float,
     *   signedDocumentAttachmentUuid?: ?string,
     *   unsignedDocumentAttachmentUuid?: ?string,
     *   signatureDetails?: ?AttachmentSignatureDataSignatureDetails,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->templateSupportsSignature = $values['templateSupportsSignature'];
        $this->documentSnapshotUuid = $values['documentSnapshotUuid'] ?? null;
        $this->documentSnapshotExpiresUnixtime = $values['documentSnapshotExpiresUnixtime'] ?? null;
        $this->signedDocumentAttachmentUuid = $values['signedDocumentAttachmentUuid'] ?? null;
        $this->unsignedDocumentAttachmentUuid = $values['unsignedDocumentAttachmentUuid'] ?? null;
        $this->signatureDetails = $values['signatureDetails'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
