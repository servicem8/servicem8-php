<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class ServiceTemplateStaffCapability extends JsonSerializableType
{
    /**
     * @var ?string $uuid Unique identifier for the StaffCapability record.
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var ?string $serviceUuid Editable parent Service UUID.
     */
    #[JsonProperty('service_uuid')]
    public ?string $serviceUuid;

    /**
     * @var ?string $staffUuid Staff member UUID that can perform this service.
     */
    #[JsonProperty('staff_uuid')]
    public ?string $staffUuid;

    /**
     * @var ?int $sortOrder Display order for capability records.
     */
    #[JsonProperty('sort_order')]
    public ?int $sortOrder;

    /**
     * @var ?int $active Soft-delete flag; 1 is active and 0 is inactive.
     */
    #[JsonProperty('active')]
    public ?int $active;

    /**
     * @param array{
     *   uuid?: ?string,
     *   serviceUuid?: ?string,
     *   staffUuid?: ?string,
     *   sortOrder?: ?int,
     *   active?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->serviceUuid = $values['serviceUuid'] ?? null;
        $this->staffUuid = $values['staffUuid'] ?? null;
        $this->sortOrder = $values['sortOrder'] ?? null;
        $this->active = $values['active'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
