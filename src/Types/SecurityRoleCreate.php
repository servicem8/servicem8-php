<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class SecurityRoleCreate extends JsonSerializableType
{
    /**
     * @var string $name The name given to the security role
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $roleDescription A detailed description of the security role's purpose and permissions. This field provides information about what access and capabilities are granted to users assigned this role.
     */
    #[JsonProperty('role_description')]
    public ?string $roleDescription;

    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @param array{
     *   name: string,
     *   roleDescription?: ?string,
     *   uuid?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->roleDescription = $values['roleDescription'] ?? null;
        $this->uuid = $values['uuid'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
