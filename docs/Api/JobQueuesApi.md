# OpenAPI\Client\JobQueuesApi

All URIs are relative to https://api.servicem8.com/api_1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteQueueSingle()**](JobQueuesApi.md#deleteQueueSingle) | **DELETE** /queue/{uuid}.json | Delete a Job Queue |
| [**getQueueAll()**](JobQueuesApi.md#getQueueAll) | **GET** /queue.json | List all Job Queues |
| [**getQueueSingle()**](JobQueuesApi.md#getQueueSingle) | **GET** /queue/{uuid}.json | Retrieve a Job Queue |
| [**postQueueCreate()**](JobQueuesApi.md#postQueueCreate) | **POST** /queue.json | Create a new Job Queue |
| [**postQueueSingle()**](JobQueuesApi.md#postQueueSingle) | **POST** /queue/{uuid}.json | Update a Job Queue |


## `deleteQueueSingle()`

```php
deleteQueueSingle($uuid): \OpenAPI\Client\Model\Result
```

Delete a Job Queue

In ServiceM8, records are never deleted, but are archived. Archived records will remain accessible via the API as (active = 0), however will no longer be visible in UI. Archived records can be restored to active by setting the record active field to 1.          #### OAuth Scope This endpoint requires the following OAuth scope **manage_job_queues**.

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


$apiInstance = new OpenAPI\Client\Api\JobQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Job Queue

try {
    $result = $apiInstance->deleteQueueSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobQueuesApi->deleteQueueSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the Job Queue | |

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

## `getQueueAll()`

```php
getQueueAll(): \OpenAPI\Client\Model\Queue[]
```

List all Job Queues

#### Filtering This endpoint supports result filtering. For more information on how to filter this request, [go here](/docs/filtering).         #### OAuth Scope This endpoint requires the following OAuth scope **read_job_queues**.

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


$apiInstance = new OpenAPI\Client\Api\JobQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getQueueAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobQueuesApi->getQueueAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Queue[]**](../Model/Queue.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getQueueSingle()`

```php
getQueueSingle($uuid): \OpenAPI\Client\Model\Queue
```

Retrieve a Job Queue

#### OAuth Scope This endpoint requires the following OAuth scope **read_job_queues**.

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


$apiInstance = new OpenAPI\Client\Api\JobQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Job Queue

try {
    $result = $apiInstance->getQueueSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobQueuesApi->getQueueSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the Job Queue | |

### Return type

[**\OpenAPI\Client\Model\Queue**](../Model/Queue.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postQueueCreate()`

```php
postQueueCreate($jobQueue): \OpenAPI\Client\Model\Result
```

Create a new Job Queue

#### OAuth Scope This endpoint requires the following OAuth scope **manage_job_queues**.          #### Record UUID UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the response header as x-record-uuid.

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


$apiInstance = new OpenAPI\Client\Api\JobQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobQueue = new \OpenAPI\Client\Model\Queue(); // \OpenAPI\Client\Model\Queue | Job Queue record to create

try {
    $result = $apiInstance->postQueueCreate($jobQueue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobQueuesApi->postQueueCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **jobQueue** | [**\OpenAPI\Client\Model\Queue**](../Model/Queue.md)| Job Queue record to create | |

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

## `postQueueSingle()`

```php
postQueueSingle($uuid, $jobQueue): \OpenAPI\Client\Model\Result
```

Update a Job Queue

#### OAuth Scope This endpoint requires the following OAuth scope **manage_job_queues**.

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


$apiInstance = new OpenAPI\Client\Api\JobQueuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Job Queue
$jobQueue = new \OpenAPI\Client\Model\Queue(); // \OpenAPI\Client\Model\Queue | Job Queue fields to update

try {
    $result = $apiInstance->postQueueSingle($uuid, $jobQueue);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobQueuesApi->postQueueSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the Job Queue | |
| **jobQueue** | [**\OpenAPI\Client\Model\Queue**](../Model/Queue.md)| Job Queue fields to update | |

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
