<?php

namespace ServiceM8\Types;

enum StaffTimeEventEventName: string
{
    case ClockOn = "CLOCK_ON";
    case ClockOff = "CLOCK_OFF";
    case LunchStart = "LUNCH_START";
    case LunchEnd = "LUNCH_END";
}
