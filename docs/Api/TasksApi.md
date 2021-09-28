# OpenAPI\Client\TasksApi

All URIs are relative to https://api.servicem8.com/api_1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteTaskSingle()**](TasksApi.md#deleteTaskSingle) | **DELETE** /task/{uuid}.json | Delete a Task
[**getTaskAll()**](TasksApi.md#getTaskAll) | **GET** /task.json | List all Tasks
[**getTaskSingle()**](TasksApi.md#getTaskSingle) | **GET** /task/{uuid}.json | Retrieve a Task
[**postTaskCreate()**](TasksApi.md#postTaskCreate) | **POST** /task.json | Create a new Task
[**postTaskSingle()**](TasksApi.md#postTaskSingle) | **POST** /task/{uuid}.json | Update a Task


## `deleteTaskSingle()`

```php
deleteTaskSingle($uuid): \OpenAPI\Client\Model\Result
```

Delete a Task

In ServiceM8, records are never deleted, but are archived. Archived records will remain accessible via the API as (active = 0), however will no longer be visible in UI. Archived records can be restored to active by setting the record active field to 1.          #### OAuth Scope This endpoint requires the following OAuth scope **manage_tasks**.

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


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Task

try {
    $result = $apiInstance->deleteTaskSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->deleteTaskSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| UUID of the Task |

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

## `getTaskAll()`

```php
getTaskAll(): \OpenAPI\Client\Model\Task[]
```

List all Tasks

#### Filtering This endpoint supports result filtering. For more information on how to filter this request, [go here](/docs/filtering).         #### OAuth Scope This endpoint requires the following OAuth scope **read_tasks**.

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


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getTaskAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getTaskAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Task[]**](../Model/Task.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaskSingle()`

```php
getTaskSingle($uuid): \OpenAPI\Client\Model\Task
```

Retrieve a Task

#### OAuth Scope This endpoint requires the following OAuth scope **read_tasks**.

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


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Task

try {
    $result = $apiInstance->getTaskSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->getTaskSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| UUID of the Task |

### Return type

[**\OpenAPI\Client\Model\Task**](../Model/Task.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTaskCreate()`

```php
postTaskCreate($task): \OpenAPI\Client\Model\Result
```

Create a new Task

#### OAuth Scope This endpoint requires the following OAuth scope **manage_tasks**.          #### Record UUID UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the response header as x-record-uuid.

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


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task = new \OpenAPI\Client\Model\Task(); // \OpenAPI\Client\Model\Task | Task record to create

try {
    $result = $apiInstance->postTaskCreate($task);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->postTaskCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task** | [**\OpenAPI\Client\Model\Task**](../Model/Task.md)| Task record to create |

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

## `postTaskSingle()`

```php
postTaskSingle($uuid, $task): \OpenAPI\Client\Model\Result
```

Update a Task

#### OAuth Scope This endpoint requires the following OAuth scope **manage_tasks**.

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


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Task
$task = new \OpenAPI\Client\Model\Task(); // \OpenAPI\Client\Model\Task | Task fields to update

try {
    $result = $apiInstance->postTaskSingle($uuid, $task);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->postTaskSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| UUID of the Task |
 **task** | [**\OpenAPI\Client\Model\Task**](../Model/Task.md)| Task fields to update |

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
