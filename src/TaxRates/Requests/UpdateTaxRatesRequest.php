<?php

namespace ServiceM8\TaxRates\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\TaxRateCreate;

class UpdateTaxRatesRequest extends JsonSerializableType
{
    /**
     * @var TaxRateCreate $body
     */
    public TaxRateCreate $body;

    /**
     * @param array{
     *   body: TaxRateCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
