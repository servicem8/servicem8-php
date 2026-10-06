<?php

namespace ServiceM8;

use ServiceM8\ServiceTemplates\ServiceTemplatesClient;
use ServiceM8\AllocationWindows\AllocationWindowsClient;
use ServiceM8\Assets\AssetsClient;
use ServiceM8\AssetTypes\AssetTypesClient;
use ServiceM8\AssetTypeFields\AssetTypeFieldsClient;
use ServiceM8\Attachments\AttachmentsClient;
use ServiceM8\Availabilities\AvailabilitiesClient;
use ServiceM8\Badges\BadgesClient;
use ServiceM8\Categories\CategoriesClient;
use ServiceM8\Clients\ClientsClient;
use ServiceM8\CompanyContacts\CompanyContactsClient;
use ServiceM8\Notes\NotesClient;
use ServiceM8\Diary\DiaryClient;
use ServiceM8\DocumentTemplates\DocumentTemplatesClient;
use ServiceM8\Email\EmailClient;
use ServiceM8\EmailTemplates\EmailTemplatesClient;
use ServiceM8\Feedback\FeedbackClient;
use ServiceM8\Forms\FormsClient;
use ServiceM8\FormFields\FormFieldsClient;
use ServiceM8\FormResponses\FormResponsesClient;
use ServiceM8\Inbox\InboxClient;
use ServiceM8\Jobs\JobsClient;
use ServiceM8\JobActivities\JobActivitiesClient;
use ServiceM8\JobAllocations\JobAllocationsClient;
use ServiceM8\JobChecklists\JobChecklistsClient;
use ServiceM8\JobContacts\JobContactsClient;
use ServiceM8\JobMaterials\JobMaterialsClient;
use ServiceM8\JobMaterialBundles\JobMaterialBundlesClient;
use ServiceM8\JobPayments\JobPaymentsClient;
use ServiceM8\JobTemplates\JobTemplatesClient;
use ServiceM8\KnowledgeArticles\KnowledgeArticlesClient;
use ServiceM8\Locations\LocationsClient;
use ServiceM8\Materials\MaterialsClient;
use ServiceM8\Bundles\BundlesClient;
use ServiceM8\Notifications\NotificationsClient;
use ServiceM8\JobQueues\JobQueuesClient;
use ServiceM8\Search\SearchClient;
use ServiceM8\SecurityRoles\SecurityRolesClient;
use ServiceM8\Sms\SmsClient;
use ServiceM8\SmsTemplates\SmsTemplatesClient;
use ServiceM8\StaffMembers\StaffMembersClient;
use ServiceM8\StaffMessages\StaffMessagesClient;
use ServiceM8\StaffTimeEvents\StaffTimeEventsClient;
use ServiceM8\Suppliers\SuppliersClient;
use ServiceM8\Tasks\TasksClient;
use ServiceM8\TaxRates\TaxRatesClient;
use ServiceM8\Vendors\VendorsClient;
use Psr\Http\Client\ClientInterface;
use ServiceM8\Core\Client\RawClient;

class ServiceM8Client
{
    /**
     * @var ServiceTemplatesClient $serviceTemplates
     */
    public ServiceTemplatesClient $serviceTemplates;

    /**
     * @var AllocationWindowsClient $allocationWindows
     */
    public AllocationWindowsClient $allocationWindows;

    /**
     * @var AssetsClient $assets
     */
    public AssetsClient $assets;

    /**
     * @var AssetTypesClient $assetTypes
     */
    public AssetTypesClient $assetTypes;

    /**
     * @var AssetTypeFieldsClient $assetTypeFields
     */
    public AssetTypeFieldsClient $assetTypeFields;

    /**
     * @var AttachmentsClient $attachments
     */
    public AttachmentsClient $attachments;

    /**
     * @var AvailabilitiesClient $availabilities
     */
    public AvailabilitiesClient $availabilities;

    /**
     * @var BadgesClient $badges
     */
    public BadgesClient $badges;

    /**
     * @var CategoriesClient $categories
     */
    public CategoriesClient $categories;

    /**
     * @var ClientsClient $clients
     */
    public ClientsClient $clients;

    /**
     * @var CompanyContactsClient $companyContacts
     */
    public CompanyContactsClient $companyContacts;

    /**
     * @var NotesClient $notes
     */
    public NotesClient $notes;

    /**
     * @var DiaryClient $diary
     */
    public DiaryClient $diary;

    /**
     * @var DocumentTemplatesClient $documentTemplates
     */
    public DocumentTemplatesClient $documentTemplates;

    /**
     * @var EmailClient $email
     */
    public EmailClient $email;

    /**
     * @var EmailTemplatesClient $emailTemplates
     */
    public EmailTemplatesClient $emailTemplates;

    /**
     * @var FeedbackClient $feedback
     */
    public FeedbackClient $feedback;

    /**
     * @var FormsClient $forms
     */
    public FormsClient $forms;

    /**
     * @var FormFieldsClient $formFields
     */
    public FormFieldsClient $formFields;

    /**
     * @var FormResponsesClient $formResponses
     */
    public FormResponsesClient $formResponses;

    /**
     * @var InboxClient $inbox
     */
    public InboxClient $inbox;

    /**
     * @var JobsClient $jobs
     */
    public JobsClient $jobs;

    /**
     * @var JobActivitiesClient $jobActivities
     */
    public JobActivitiesClient $jobActivities;

    /**
     * @var JobAllocationsClient $jobAllocations
     */
    public JobAllocationsClient $jobAllocations;

    /**
     * @var JobChecklistsClient $jobChecklists
     */
    public JobChecklistsClient $jobChecklists;

    /**
     * @var JobContactsClient $jobContacts
     */
    public JobContactsClient $jobContacts;

    /**
     * @var JobMaterialsClient $jobMaterials
     */
    public JobMaterialsClient $jobMaterials;

    /**
     * @var JobMaterialBundlesClient $jobMaterialBundles
     */
    public JobMaterialBundlesClient $jobMaterialBundles;

    /**
     * @var JobPaymentsClient $jobPayments
     */
    public JobPaymentsClient $jobPayments;

    /**
     * @var JobTemplatesClient $jobTemplates
     */
    public JobTemplatesClient $jobTemplates;

    /**
     * @var KnowledgeArticlesClient $knowledgeArticles
     */
    public KnowledgeArticlesClient $knowledgeArticles;

    /**
     * @var LocationsClient $locations
     */
    public LocationsClient $locations;

    /**
     * @var MaterialsClient $materials
     */
    public MaterialsClient $materials;

    /**
     * @var BundlesClient $bundles
     */
    public BundlesClient $bundles;

    /**
     * @var NotificationsClient $notifications
     */
    public NotificationsClient $notifications;

    /**
     * @var JobQueuesClient $jobQueues
     */
    public JobQueuesClient $jobQueues;

    /**
     * @var SearchClient $search
     */
    public SearchClient $search;

    /**
     * @var SecurityRolesClient $securityRoles
     */
    public SecurityRolesClient $securityRoles;

    /**
     * @var SmsClient $sms
     */
    public SmsClient $sms;

    /**
     * @var SmsTemplatesClient $smsTemplates
     */
    public SmsTemplatesClient $smsTemplates;

    /**
     * @var StaffMembersClient $staffMembers
     */
    public StaffMembersClient $staffMembers;

    /**
     * @var StaffMessagesClient $staffMessages
     */
    public StaffMessagesClient $staffMessages;

    /**
     * @var StaffTimeEventsClient $staffTimeEvents
     */
    public StaffTimeEventsClient $staffTimeEvents;

    /**
     * @var SuppliersClient $suppliers
     */
    public SuppliersClient $suppliers;

    /**
     * @var TasksClient $tasks
     */
    public TasksClient $tasks;

    /**
     * @var TaxRatesClient $taxRates
     */
    public TaxRatesClient $taxRates;

    /**
     * @var VendorsClient $vendors
     */
    public VendorsClient $vendors;

    /**
     * @var array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options @phpstan-ignore-next-line Property is used in endpoint methods via HttpEndpointGenerator
     */
    private array $options;

    /**
     * @var RawClient $client
     */
    private RawClient $client;

    /**
     * @param ?string $apiKey The apiKey to use for authentication.
     * @param ?string $accessToken The accessToken to use for authentication.
     * @param ?array{
     *   baseUrl?: string,
     *   client?: ClientInterface,
     *   maxRetries?: int,
     *   timeout?: float,
     *   headers?: array<string, string>,
     * } $options
     */
    public function __construct(
        ?string $apiKey = null,
        ?string $accessToken = null,
        ?array $options = null,
    ) {
        $apiKey ??= getenv('SERVICEM8_API_KEY') ?: null;
        $accessToken ??= getenv('SERVICEM8_OAUTH2') ?: null;
        $defaultHeaders = [
            'X-Fern-Language' => 'PHP',
            'X-Fern-SDK-Name' => 'ServiceM8',
        ];
        if ($apiKey != null) {
            $defaultHeaders['X-Api-Key'] = $apiKey;
        }
        if ($accessToken != null) {
            $defaultHeaders['Authorization'] = "Bearer $accessToken";
        }

        $this->options = $options ?? [];

        $this->options['headers'] = array_merge(
            $defaultHeaders,
            $this->options['headers'] ?? [],
        );

        $this->client = new RawClient(
            options: $this->options,
        );

        $this->serviceTemplates = new ServiceTemplatesClient($this->client, $this->options);
        $this->allocationWindows = new AllocationWindowsClient($this->client, $this->options);
        $this->assets = new AssetsClient($this->client, $this->options);
        $this->assetTypes = new AssetTypesClient($this->client, $this->options);
        $this->assetTypeFields = new AssetTypeFieldsClient($this->client, $this->options);
        $this->attachments = new AttachmentsClient($this->client, $this->options);
        $this->availabilities = new AvailabilitiesClient($this->client, $this->options);
        $this->badges = new BadgesClient($this->client, $this->options);
        $this->categories = new CategoriesClient($this->client, $this->options);
        $this->clients = new ClientsClient($this->client, $this->options);
        $this->companyContacts = new CompanyContactsClient($this->client, $this->options);
        $this->notes = new NotesClient($this->client, $this->options);
        $this->diary = new DiaryClient($this->client, $this->options);
        $this->documentTemplates = new DocumentTemplatesClient($this->client, $this->options);
        $this->email = new EmailClient($this->client, $this->options);
        $this->emailTemplates = new EmailTemplatesClient($this->client, $this->options);
        $this->feedback = new FeedbackClient($this->client, $this->options);
        $this->forms = new FormsClient($this->client, $this->options);
        $this->formFields = new FormFieldsClient($this->client, $this->options);
        $this->formResponses = new FormResponsesClient($this->client, $this->options);
        $this->inbox = new InboxClient($this->client, $this->options);
        $this->jobs = new JobsClient($this->client, $this->options);
        $this->jobActivities = new JobActivitiesClient($this->client, $this->options);
        $this->jobAllocations = new JobAllocationsClient($this->client, $this->options);
        $this->jobChecklists = new JobChecklistsClient($this->client, $this->options);
        $this->jobContacts = new JobContactsClient($this->client, $this->options);
        $this->jobMaterials = new JobMaterialsClient($this->client, $this->options);
        $this->jobMaterialBundles = new JobMaterialBundlesClient($this->client, $this->options);
        $this->jobPayments = new JobPaymentsClient($this->client, $this->options);
        $this->jobTemplates = new JobTemplatesClient($this->client, $this->options);
        $this->knowledgeArticles = new KnowledgeArticlesClient($this->client, $this->options);
        $this->locations = new LocationsClient($this->client, $this->options);
        $this->materials = new MaterialsClient($this->client, $this->options);
        $this->bundles = new BundlesClient($this->client, $this->options);
        $this->notifications = new NotificationsClient($this->client, $this->options);
        $this->jobQueues = new JobQueuesClient($this->client, $this->options);
        $this->search = new SearchClient($this->client, $this->options);
        $this->securityRoles = new SecurityRolesClient($this->client, $this->options);
        $this->sms = new SmsClient($this->client, $this->options);
        $this->smsTemplates = new SmsTemplatesClient($this->client, $this->options);
        $this->staffMembers = new StaffMembersClient($this->client, $this->options);
        $this->staffMessages = new StaffMessagesClient($this->client, $this->options);
        $this->staffTimeEvents = new StaffTimeEventsClient($this->client, $this->options);
        $this->suppliers = new SuppliersClient($this->client, $this->options);
        $this->tasks = new TasksClient($this->client, $this->options);
        $this->taxRates = new TaxRatesClient($this->client, $this->options);
        $this->vendors = new VendorsClient($this->client, $this->options);
    }
}
