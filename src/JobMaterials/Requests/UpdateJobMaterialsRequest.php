<?php

namespace ServiceM8\JobMaterials\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\JobMaterialCreate;

class UpdateJobMaterialsRequest extends JsonSerializableType
{
    /**
     * @var JobMaterialCreate $body
     */
    public JobMaterialCreate $body;

    /**
     * @param array{
     *   body: JobMaterialCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
