<?php

namespace ServiceM8\Types;

enum JobCreateStatus: string
{
    case Quote = "Quote";
    case WorkOrder = "Work Order";
    case Unsuccessful = "Unsuccessful";
    case Completed = "Completed";
}
