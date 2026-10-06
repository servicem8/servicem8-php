<?php

namespace ServiceM8\Types;

enum ServiceTemplateVariationVariationType: string
{
    case TimePeriod = "time-period";
    case PublicHoliday = "public-holiday";
    case CustomerBooking = "customer-booking";
    case TravelDistance = "travel-distance";
    case MaximumTravelDistance = "maximum-travel-distance";
}
