<?php

namespace ServiceM8\AssetTypeFields\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\AssetTypeFieldCreate;

class UpdateAssetTypeFieldsRequest extends JsonSerializableType
{
    /**
     * @var AssetTypeFieldCreate $body
     */
    public AssetTypeFieldCreate $body;

    /**
     * @param array{
     *   body: AssetTypeFieldCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
