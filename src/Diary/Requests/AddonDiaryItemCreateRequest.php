<?php

namespace ServiceM8\Diary\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class AddonDiaryItemCreateRequest extends JsonSerializableType
{
    /**
     * @var string $jobUuid UUID of the Job whose Diary receives the item.
     */
    #[JsonProperty('job_uuid')]
    public string $jobUuid;

    /**
     * @var string $content Plaintext Diary item content. Markup is displayed literally.
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * @param array{
     *   jobUuid: string,
     *   content: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->jobUuid = $values['jobUuid'];
        $this->content = $values['content'];
    }
}
