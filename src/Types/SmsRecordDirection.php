<?php

namespace ServiceM8\Types;

enum SmsRecordDirection: string
{
    case Inbound = "inbound";
    case Outbound = "outbound";
}
