<?php

namespace ServiceM8\Core\Client;

enum HttpMethod
{
    case GET;
    case POST;
    case PUT;
    case PATCH;
    case DELETE;
    case HEAD;
}
