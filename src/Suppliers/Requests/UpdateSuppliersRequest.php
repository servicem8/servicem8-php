<?php

namespace ServiceM8\Suppliers\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\SupplierCreate;

class UpdateSuppliersRequest extends JsonSerializableType
{
    /**
     * @var SupplierCreate $body
     */
    public SupplierCreate $body;

    /**
     * @param array{
     *   body: SupplierCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
