<?php

namespace ServiceM8\Feedback\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Types\FeedbackCreate;

class UpdateFeedbackRequest extends JsonSerializableType
{
    /**
     * @var FeedbackCreate $body
     */
    public FeedbackCreate $body;

    /**
     * @param array{
     *   body: FeedbackCreate,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
    }
}
