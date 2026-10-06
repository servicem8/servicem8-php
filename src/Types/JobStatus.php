<?php

namespace ServiceM8\Types;

enum JobStatus: string
{
    case Quote = "Quote";
    case WorkOrder = "Work Order";
    case Unsuccessful = "Unsuccessful";
    case Completed = "Completed";
}
