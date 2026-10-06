<?php

namespace ServiceM8\Types;

enum InboxMessageMessageType: string
{
    case Email = "email";
    case Sms = "sms";
    case OnlineBooking = "online_booking";
    case PhoneCall = "phone_call";
    case Reminder = "reminder";
    case Form = "form";
    case NetworkRequest = "network_request";
    case SupplierInvoice = "supplier_invoice";
    case Asset = "asset";
    case PartnerLead = "partner_lead";
    case Automation = "automation";
}
