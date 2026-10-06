<?php

namespace ServiceM8\JobPayments\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\JobPaymentCreate;

class UpdateJobPaymentsRequest extends JsonSerializableType
{
    /**
     * @var JobPaymentCreate $body
     */
    public JobPaymentCreate $body;

    /**
     * @param array{
     *   body: JobPaymentCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
