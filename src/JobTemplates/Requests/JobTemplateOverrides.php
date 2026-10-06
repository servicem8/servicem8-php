<?php

namespace ServiceM8\JobTemplates\Requests;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class JobTemplateOverrides extends JsonSerializableType
{
    /**
     * @var ?string $jobDescription Job description
     */
    #[JsonProperty('job_description')]
    public ?string $jobDescription;

    /**
     * @var ?string $companyUuid UUID of the company/client. Cannot be used together with company_name.
     */
    #[JsonProperty('company_uuid')]
    public ?string $companyUuid;

    /**
     * @var ?string $companyName Name of the company/client. If a company with this name exists, it will be used. Otherwise, a new company will be created. Cannot be used together with company_uuid.
     */
    #[JsonProperty('company_name')]
    public ?string $companyName;

    /**
     * @var ?string $jobAddress Street address for the job
     */
    #[JsonProperty('job_address')]
    public ?string $jobAddress;

    /**
     * @param array{
     *   jobDescription?: ?string,
     *   companyUuid?: ?string,
     *   companyName?: ?string,
     *   jobAddress?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->jobDescription = $values['jobDescription'] ?? null;
        $this->companyUuid = $values['companyUuid'] ?? null;
        $this->companyName = $values['companyName'] ?? null;
        $this->jobAddress = $values['jobAddress'] ?? null;
    }
}
