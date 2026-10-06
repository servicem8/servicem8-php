<?php

namespace ServiceM8\Types;

use ServiceM8\Core\Json\JsonSerializableType;
use ServiceM8\Traits\InboxMessage;
use DateTime;

class InboxMessageDetail extends JsonSerializableType
{
    use InboxMessage;


    /**
     * @param array{
     *   uuid?: ?string,
     *   active?: ?bool,
     *   editDate?: ?DateTime,
     *   timestamp?: ?DateTime,
     *   readTimestamp?: ?DateTime,
     *   lastReplyTimestamp?: ?DateTime,
     *   snoozeUntilTimestamp?: ?DateTime,
     *   readByStaffUuid?: ?string,
     *   fromName?: ?string,
     *   fromEmail?: ?string,
     *   toEmail?: ?string,
     *   subject?: ?string,
     *   messageText?: ?string,
     *   messageHtml?: ?string,
     *   isArchived?: ?bool,
     *   archivedTimestamp?: ?DateTime,
     *   archivedByStaffUuid?: ?string,
     *   regardingCompanyUuid?: ?string,
     *   convertedToJobUuid?: ?string,
     *   jobTemplateUuid?: ?string,
     *   messageType?: ?value-of<InboxMessageMessageType>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->uuid = $values['uuid'] ?? null;
        $this->active = $values['active'] ?? null;
        $this->editDate = $values['editDate'] ?? null;
        $this->timestamp = $values['timestamp'] ?? null;
        $this->readTimestamp = $values['readTimestamp'] ?? null;
        $this->lastReplyTimestamp = $values['lastReplyTimestamp'] ?? null;
        $this->snoozeUntilTimestamp = $values['snoozeUntilTimestamp'] ?? null;
        $this->readByStaffUuid = $values['readByStaffUuid'] ?? null;
        $this->fromName = $values['fromName'] ?? null;
        $this->fromEmail = $values['fromEmail'] ?? null;
        $this->toEmail = $values['toEmail'] ?? null;
        $this->subject = $values['subject'] ?? null;
        $this->messageText = $values['messageText'] ?? null;
        $this->messageHtml = $values['messageHtml'] ?? null;
        $this->isArchived = $values['isArchived'] ?? null;
        $this->archivedTimestamp = $values['archivedTimestamp'] ?? null;
        $this->archivedByStaffUuid = $values['archivedByStaffUuid'] ?? null;
        $this->regardingCompanyUuid = $values['regardingCompanyUuid'] ?? null;
        $this->convertedToJobUuid = $values['convertedToJobUuid'] ?? null;
        $this->jobTemplateUuid = $values['jobTemplateUuid'] ?? null;
        $this->messageType = $values['messageType'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
