<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Core\Json\JsonProperty;

class StaffCreate extends JsonSerializableType
{
    /**
     * @var string $first Staff First Name
     */
    #[JsonProperty('first')]
    public string $first;

    /**
     * @var string $last Staff Last Name
     */
    #[JsonProperty('last')]
    public string $last;

    /**
     * @var ?string $email Staff Email Address. This is also your login name.
     */
    #[JsonProperty('email')]
    public ?string $email;

    /**
     * @var ?string $mobile Mobile phone number of the staff member. Used for SMS communications and identification when calling.
     */
    #[JsonProperty('mobile')]
    public ?string $mobile;

    /**
     * @var ?float $lng Longitude coordinate of the staff member's current or last known location. Used for tracking staff locations and calculating routes and travel distances.
     */
    #[JsonProperty('lng')]
    public ?float $lng;

    /**
     * @var ?float $lat Latitude coordinate of the staff member's current or last known location. Used for tracking staff locations and calculating routes and travel distances.
     */
    #[JsonProperty('lat')]
    public ?float $lat;

    /**
     * @var ?string $geoTimestamp The date and time when the staff member's geographic location (lat/lng) was last updated. Format is YYYY-MM-DD HH:MM:SS. Used to determine how recent the location data is.
     */
    #[JsonProperty('geo_timestamp')]
    public ?string $geoTimestamp;

    /**
     * @var ?string $jobTitle The staff member's job title or role within the organization. Used for organizational purposes and displayed in various places throughout the system.
     */
    #[JsonProperty('job_title')]
    public ?string $jobTitle;

    /**
     * @var ?string $navigatingToJobUuid UUID of the job the staff member is currently navigating to. Used to track which job a staff member is traveling toward.
     */
    #[JsonProperty('navigating_to_job_uuid')]
    public ?string $navigatingToJobUuid;

    /**
     * @var ?string $navigatingTimestamp The date and time when the staff member started navigating to a job. Format is YYYY-MM-DD HH:MM:SS. Used to track when navigation began.
     */
    #[JsonProperty('navigating_timestamp')]
    public ?string $navigatingTimestamp;

    /**
     * @var ?string $navigatingExpiryTimestamp The date and time when navigation to a job is expected to complete or expire. Format is YYYY-MM-DD HH:MM:SS. Used to determine if navigation is still active.
     */
    #[JsonProperty('navigating_expiry_timestamp')]
    public ?string $navigatingExpiryTimestamp;

    /**
     * @var ?string $color The color assigned to this staff member, represented as a hex color code. Used for visual identification in the schedule, dispatch board, and other interfaces.
     */
    #[JsonProperty('color')]
    public ?string $color;

    /**
     * @var ?string $customIconUrl URL for the staff member's custom icon image. This is served by CustomStaffSprite and returns the uploaded PNG custom image when one has been set, otherwise it falls back to the generated staff icon. Uploaded custom icons must be 512x512 pixels or smaller.
     */
    #[JsonProperty('custom_icon_url')]
    public ?string $customIconUrl;

    /**
     * @var ?string $statusMessage Short message summarising the staff's current status.
     */
    #[JsonProperty('status_message')]
    public ?string $statusMessage;

    /**
     * @var ?string $statusMessageTimestamp The date and time when the staff member's status message was last updated. Format is YYYY-MM-DD HH:MM:SS. Used to determine how recent the status message is.
     */
    #[JsonProperty('status_message_timestamp')]
    public ?string $statusMessageTimestamp;

    /**
     * @var ?int $hideFromSchedule Boolean flag controlling whether this staff member appears in the schedule view. When true (1), the staff member is hidden from the schedule. When false (0), they appear normally in scheduling interfaces..  Valid values are [0,1]
     */
    #[JsonProperty('hide_from_schedule')]
    public ?int $hideFromSchedule;

    /**
     * @var ?string $uuid Unique identifier for this record
     */
    #[JsonProperty('uuid')]
    public ?string $uuid;

    /**
     * @var ?string $canReceivePushNotification
     */
    #[JsonProperty('can_receive_push_notification')]
    public ?string $canReceivePushNotification;

    /**
     * @var ?string $securityRoleUuid
     */
    #[JsonProperty('security_role_uuid')]
    public ?string $securityRoleUuid;

    /**
     * @var ?string $labourMaterialUuid The default labour rate to apply to job time recorded by this staff member.
     */
    #[JsonProperty('labour_material_uuid')]
    public ?string $labourMaterialUuid;

    /**
     * @param array{
     *   first: string,
     *   last: string,
     *   email?: ?string,
     *   mobile?: ?string,
     *   lng?: ?float,
     *   lat?: ?float,
     *   geoTimestamp?: ?string,
     *   jobTitle?: ?string,
     *   navigatingToJobUuid?: ?string,
     *   navigatingTimestamp?: ?string,
     *   navigatingExpiryTimestamp?: ?string,
     *   color?: ?string,
     *   customIconUrl?: ?string,
     *   statusMessage?: ?string,
     *   statusMessageTimestamp?: ?string,
     *   hideFromSchedule?: ?int,
     *   uuid?: ?string,
     *   canReceivePushNotification?: ?string,
     *   securityRoleUuid?: ?string,
     *   labourMaterialUuid?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->first = $values['first'];
        $this->last = $values['last'];
        $this->email = $values['email'] ?? null;
        $this->mobile = $values['mobile'] ?? null;
        $this->lng = $values['lng'] ?? null;
        $this->lat = $values['lat'] ?? null;
        $this->geoTimestamp = $values['geoTimestamp'] ?? null;
        $this->jobTitle = $values['jobTitle'] ?? null;
        $this->navigatingToJobUuid = $values['navigatingToJobUuid'] ?? null;
        $this->navigatingTimestamp = $values['navigatingTimestamp'] ?? null;
        $this->navigatingExpiryTimestamp = $values['navigatingExpiryTimestamp'] ?? null;
        $this->color = $values['color'] ?? null;
        $this->customIconUrl = $values['customIconUrl'] ?? null;
        $this->statusMessage = $values['statusMessage'] ?? null;
        $this->statusMessageTimestamp = $values['statusMessageTimestamp'] ?? null;
        $this->hideFromSchedule = $values['hideFromSchedule'] ?? null;
        $this->uuid = $values['uuid'] ?? null;
        $this->canReceivePushNotification = $values['canReceivePushNotification'] ?? null;
        $this->securityRoleUuid = $values['securityRoleUuid'] ?? null;
        $this->labourMaterialUuid = $values['labourMaterialUuid'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
