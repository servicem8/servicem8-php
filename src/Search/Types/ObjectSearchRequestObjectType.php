<?php

namespace ServiceM8\Search\Types;

enum ObjectSearchRequestObjectType: string
{
    case Job = "job";
    case Company = "company";
    case Material = "material";
    case Knowledgearticle = "knowledgearticle";
    case Attachment = "attachment";
    case Formresponse = "formresponse";
    case Asset = "asset";
    case Materialbundle = "materialbundle";
}
