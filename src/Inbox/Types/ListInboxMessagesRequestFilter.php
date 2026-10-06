<?php

namespace ServiceM8\Inbox\Types;

enum ListInboxMessagesRequestFilter: string
{
    case All = "all";
    case Unread = "unread";
    case Archived = "archived";
    case Snoozed = "snoozed";
}
