<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;
use ServiceM8\Core\Types\ArrayType;

class AttachmentSignatureDataSignatureDetails extends JsonSerializableType
{
    /**
     * @var string $signatureText Text entered by the signer as the electronic representation of their signature
     */
    #[JsonProperty('signatureText')]
    public string $signatureText;

    /**
     * @var float $signatureUnixtime Unixtime at which the document was signed
     */
    #[JsonProperty('signatureUnixtime')]
    public float $signatureUnixtime;

    /**
     * @var ?array<string, mixed> $metadata Optional additional data regarding the signature event
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public ?array $metadata;

    /**
     * @param array{
     *   signatureText: string,
     *   signatureUnixtime: float,
     *   metadata?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->signatureText = $values['signatureText'];
        $this->signatureUnixtime = $values['signatureUnixtime'];
        $this->metadata = $values['metadata'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
