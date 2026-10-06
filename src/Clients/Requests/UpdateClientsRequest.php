<?php

namespace ServiceM8\Clients\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\CompanyCreate;

class UpdateClientsRequest extends JsonSerializableType
{
    /**
     * @var CompanyCreate $body
     */
    public CompanyCreate $body;

    /**
     * @param array{
     *   body: CompanyCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
