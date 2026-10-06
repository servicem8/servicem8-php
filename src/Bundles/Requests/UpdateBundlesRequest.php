<?php

namespace ServiceM8\Bundles\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\MaterialBundleCreate;

class UpdateBundlesRequest extends JsonSerializableType
{
    /**
     * @var MaterialBundleCreate $body
     */
    public MaterialBundleCreate $body;

    /**
     * @param array{
     *   body: MaterialBundleCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
