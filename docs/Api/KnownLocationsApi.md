# OpenAPI\Client\KnownLocationsApi

All URIs are relative to https://api.servicem8.com/api_1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteKnownLocationSingle()**](KnownLocationsApi.md#deleteKnownLocationSingle) | **DELETE** /knownlocation/{uuid}.json | Delete a Known Location
[**getKnownLocationAll()**](KnownLocationsApi.md#getKnownLocationAll) | **GET** /knownlocation.json | List all Known Locations
[**getKnownLocationSingle()**](KnownLocationsApi.md#getKnownLocationSingle) | **GET** /knownlocation/{uuid}.json | Retrieve a Known Location
[**postKnownLocationCreate()**](KnownLocationsApi.md#postKnownLocationCreate) | **POST** /knownlocation.json | Create a new Known Location
[**postKnownLocationSingle()**](KnownLocationsApi.md#postKnownLocationSingle) | **POST** /knownlocation/{uuid}.json | Update a Known Location


## `deleteKnownLocationSingle()`

```php
deleteKnownLocationSingle($uuid): \OpenAPI\Client\Model\Result
```

Delete a Known Location

In ServiceM8, records are never deleted, but are archived. Archived records will remain accessible via the API as (active = 0), however will no longer be visible in UI. Archived records can be restored to active by setting the record active field to 1.          #### OAuth Scope This endpoint requires the following OAuth scope **manage_locations**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KnownLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Known Location

try {
    $result = $apiInstance->deleteKnownLocationSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnownLocationsApi->deleteKnownLocationSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| UUID of the Known Location |

### Return type

[**\OpenAPI\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKnownLocationAll()`

```php
getKnownLocationAll(): \OpenAPI\Client\Model\KnownLocation[]
```

List all Known Locations

#### Filtering This endpoint supports result filtering. For more information on how to filter this request, [go here](/docs/filtering).         #### OAuth Scope This endpoint requires the following OAuth scope **read_locations**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KnownLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getKnownLocationAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnownLocationsApi->getKnownLocationAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\KnownLocation[]**](../Model/KnownLocation.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getKnownLocationSingle()`

```php
getKnownLocationSingle($uuid): \OpenAPI\Client\Model\KnownLocation
```

Retrieve a Known Location

#### OAuth Scope This endpoint requires the following OAuth scope **read_locations**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KnownLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Known Location

try {
    $result = $apiInstance->getKnownLocationSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnownLocationsApi->getKnownLocationSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| UUID of the Known Location |

### Return type

[**\OpenAPI\Client\Model\KnownLocation**](../Model/KnownLocation.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postKnownLocationCreate()`

```php
postKnownLocationCreate($knownLocation): \OpenAPI\Client\Model\Result
```

Create a new Known Location

#### OAuth Scope This endpoint requires the following OAuth scope **manage_locations**.          #### Record UUID UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the response header as x-record-uuid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KnownLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$knownLocation = new \OpenAPI\Client\Model\KnownLocation(); // \OpenAPI\Client\Model\KnownLocation | Known Location record to create

try {
    $result = $apiInstance->postKnownLocationCreate($knownLocation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnownLocationsApi->postKnownLocationCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **knownLocation** | [**\OpenAPI\Client\Model\KnownLocation**](../Model/KnownLocation.md)| Known Location record to create |

### Return type

[**\OpenAPI\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postKnownLocationSingle()`

```php
postKnownLocationSingle($uuid, $knownLocation): \OpenAPI\Client\Model\Result
```

Update a Known Location

#### OAuth Scope This endpoint requires the following OAuth scope **manage_locations**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\KnownLocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Known Location
$knownLocation = new \OpenAPI\Client\Model\KnownLocation(); // \OpenAPI\Client\Model\KnownLocation | Known Location fields to update

try {
    $result = $apiInstance->postKnownLocationSingle($uuid, $knownLocation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnownLocationsApi->postKnownLocationSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| UUID of the Known Location |
 **knownLocation** | [**\OpenAPI\Client\Model\KnownLocation**](../Model/KnownLocation.md)| Known Location fields to update |

### Return type

[**\OpenAPI\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
