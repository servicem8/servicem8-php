<?php

namespace ServiceM8\Types;

enum AssetTypeFieldCreateFieldDataFieldType: string
{
    case Text = "Text";
    case Number = "Number";
    case Date = "Date";
    case MultipleChoice = "Multiple Choice";
}
