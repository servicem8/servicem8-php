<?php

namespace ServiceM8\Types;

enum ServiceTemplateVariationDataVariationApplicabilityItem: string
{
    case Materials = "materials";
    case Labour = "labour";
    case Callout = "callout";
    case CalloutFee = "callout_fee";
}
