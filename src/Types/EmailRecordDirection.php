<?php

namespace ServiceM8\Types;

enum EmailRecordDirection: string
{
    case Inbound = "inbound";
    case Outbound = "outbound";
}
