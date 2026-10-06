<?php

namespace ServiceM8\AssetTypes\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\AssetTypeCreate;

class UpdateAssetTypesRequest extends JsonSerializableType
{
    /**
     * @var AssetTypeCreate $body
     */
    public AssetTypeCreate $body;

    /**
     * @param array{
     *   body: AssetTypeCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
