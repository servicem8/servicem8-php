<?php

namespace ServiceM8\CompanyContacts\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\CompanyContactCreate;

class UpdateCompanyContactsRequest extends JsonSerializableType
{
    /**
     * @var CompanyContactCreate $body
     */
    public CompanyContactCreate $body;

    /**
     * @param array{
     *   body: CompanyContactCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
