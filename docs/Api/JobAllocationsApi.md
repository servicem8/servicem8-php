# OpenAPI\Client\JobAllocationsApi

All URIs are relative to https://api.servicem8.com/api_1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteJobAllocationSingle()**](JobAllocationsApi.md#deleteJobAllocationSingle) | **DELETE** /joballocation/{uuid}.json | Delete a Job Allocation |
| [**getJobAllocationAll()**](JobAllocationsApi.md#getJobAllocationAll) | **GET** /joballocation.json | List all Job Allocations |
| [**getJobAllocationSingle()**](JobAllocationsApi.md#getJobAllocationSingle) | **GET** /joballocation/{uuid}.json | Retrieve a Job Allocation |
| [**postJobAllocationCreate()**](JobAllocationsApi.md#postJobAllocationCreate) | **POST** /joballocation.json | Create a new Job Allocation |
| [**postJobAllocationSingle()**](JobAllocationsApi.md#postJobAllocationSingle) | **POST** /joballocation/{uuid}.json | Update a Job Allocation |


## `deleteJobAllocationSingle()`

```php
deleteJobAllocationSingle($uuid): \OpenAPI\Client\Model\Result
```

Delete a Job Allocation

In ServiceM8, records are never deleted, but are archived. Archived records will remain accessible via the API as (active = 0), however will no longer be visible in UI. Archived records can be restored to active by setting the record active field to 1.

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


$apiInstance = new OpenAPI\Client\Api\JobAllocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Job Allocation

try {
    $result = $apiInstance->deleteJobAllocationSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAllocationsApi->deleteJobAllocationSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the Job Allocation | |

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

## `getJobAllocationAll()`

```php
getJobAllocationAll(): \OpenAPI\Client\Model\JobAllocation[]
```

List all Job Allocations

#### Filtering This endpoint supports result filtering. For more information on how to filter this request, [go here](/docs/filtering).         #### OAuth Scope This endpoint requires the following OAuth scope **read_schedule**.

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


$apiInstance = new OpenAPI\Client\Api\JobAllocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getJobAllocationAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAllocationsApi->getJobAllocationAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\JobAllocation[]**](../Model/JobAllocation.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJobAllocationSingle()`

```php
getJobAllocationSingle($uuid): \OpenAPI\Client\Model\JobAllocation
```

Retrieve a Job Allocation

#### OAuth Scope This endpoint requires the following OAuth scope **read_schedule**.

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


$apiInstance = new OpenAPI\Client\Api\JobAllocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Job Allocation

try {
    $result = $apiInstance->getJobAllocationSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAllocationsApi->getJobAllocationSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the Job Allocation | |

### Return type

[**\OpenAPI\Client\Model\JobAllocation**](../Model/JobAllocation.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postJobAllocationCreate()`

```php
postJobAllocationCreate($jobAllocation): \OpenAPI\Client\Model\Result
```

Create a new Job Allocation

#### OAuth Scope This endpoint requires the following OAuth scope **manage_schedule**.          #### Record UUID UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the response header as x-record-uuid.

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


$apiInstance = new OpenAPI\Client\Api\JobAllocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobAllocation = new \OpenAPI\Client\Model\JobAllocation(); // \OpenAPI\Client\Model\JobAllocation | Job Allocation record to create

try {
    $result = $apiInstance->postJobAllocationCreate($jobAllocation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAllocationsApi->postJobAllocationCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **jobAllocation** | [**\OpenAPI\Client\Model\JobAllocation**](../Model/JobAllocation.md)| Job Allocation record to create | |

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

## `postJobAllocationSingle()`

```php
postJobAllocationSingle($uuid, $jobAllocation): \OpenAPI\Client\Model\Result
```

Update a Job Allocation

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


$apiInstance = new OpenAPI\Client\Api\JobAllocationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Job Allocation
$jobAllocation = new \OpenAPI\Client\Model\JobAllocation(); // \OpenAPI\Client\Model\JobAllocation | Job Allocation fields to update

try {
    $result = $apiInstance->postJobAllocationSingle($uuid, $jobAllocation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobAllocationsApi->postJobAllocationSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the Job Allocation | |
| **jobAllocation** | [**\OpenAPI\Client\Model\JobAllocation**](../Model/JobAllocation.md)| Job Allocation fields to update | |

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
