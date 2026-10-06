<?php

namespace ServiceM8\CompanyContacts\Requests;

use ServiceM8\Core\Json\JsonSerializableType;

class ListCompanyContactsRequest extends JsonSerializableType
{
    /**
     * @var ?string $filter Filter records using public API field names and the operators eq, ne, gt, or lt. Combine up to 10 conditions with and. Enclose string values in single quotes; numeric values do not need quotes. When using the SDK, pass an unencoded expression; the SDK handles URL encoding. See https://developer.servicem8.com/docs/filtering for details.
     */
    public ?string $filter;

    /**
     * @param array{
     *   filter?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->filter = $values['filter'] ?? null;
    }
}
