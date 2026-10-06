<?php

namespace ServiceM8\JobMaterialBundles\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\JobMaterialBundleCreate;

class UpdateJobMaterialBundlesRequest extends JsonSerializableType
{
    /**
     * @var JobMaterialBundleCreate $body
     */
    public JobMaterialBundleCreate $body;

    /**
     * @param array{
     *   body: JobMaterialBundleCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
