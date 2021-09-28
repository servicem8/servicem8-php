# OpenAPI\Client\AllocationWindowsApi

All URIs are relative to https://api.servicem8.com/api_1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAllocationWindowSingle()**](AllocationWindowsApi.md#deleteAllocationWindowSingle) | **DELETE** /allocationwindow/{uuid}.json | Delete an Allocation Window
[**getAllocationWindowAll()**](AllocationWindowsApi.md#getAllocationWindowAll) | **GET** /allocationwindow.json | List all Allocation Windows
[**getAllocationWindowSingle()**](AllocationWindowsApi.md#getAllocationWindowSingle) | **GET** /allocationwindow/{uuid}.json | Retrieve an Allocation Window
[**postAllocationWindowCreate()**](AllocationWindowsApi.md#postAllocationWindowCreate) | **POST** /allocationwindow.json | Create a new Allocation Window
[**postAllocationWindowSingle()**](AllocationWindowsApi.md#postAllocationWindowSingle) | **POST** /allocationwindow/{uuid}.json | Update an Allocation Window


## `deleteAllocationWindowSingle()`

```php
deleteAllocationWindowSingle($uuid): \OpenAPI\Client\Model\Result
```

Delete an Allocation Window

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


$apiInstance = new OpenAPI\Client\Api\AllocationWindowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Allocation Window

try {
    $result = $apiInstance->deleteAllocationWindowSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllocationWindowsApi->deleteAllocationWindowSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| UUID of the Allocation Window |

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

## `getAllocationWindowAll()`

```php
getAllocationWindowAll(): \OpenAPI\Client\Model\AllocationWindow[]
```

List all Allocation Windows

#### Filtering This endpoint supports result filtering. For more information on how to filter this request, [go here](/docs/filtering).

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


$apiInstance = new OpenAPI\Client\Api\AllocationWindowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllocationWindowAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllocationWindowsApi->getAllocationWindowAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AllocationWindow[]**](../Model/AllocationWindow.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllocationWindowSingle()`

```php
getAllocationWindowSingle($uuid): \OpenAPI\Client\Model\AllocationWindow
```

Retrieve an Allocation Window

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


$apiInstance = new OpenAPI\Client\Api\AllocationWindowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Allocation Window

try {
    $result = $apiInstance->getAllocationWindowSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllocationWindowsApi->getAllocationWindowSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| UUID of the Allocation Window |

### Return type

[**\OpenAPI\Client\Model\AllocationWindow**](../Model/AllocationWindow.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAllocationWindowCreate()`

```php
postAllocationWindowCreate($allocationWindow): \OpenAPI\Client\Model\Result
```

Create a new Allocation Window

#### Record UUID UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the response header as x-record-uuid.

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


$apiInstance = new OpenAPI\Client\Api\AllocationWindowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$allocationWindow = new \OpenAPI\Client\Model\AllocationWindow(); // \OpenAPI\Client\Model\AllocationWindow | Allocation Window record to create

try {
    $result = $apiInstance->postAllocationWindowCreate($allocationWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllocationWindowsApi->postAllocationWindowCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **allocationWindow** | [**\OpenAPI\Client\Model\AllocationWindow**](../Model/AllocationWindow.md)| Allocation Window record to create |

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

## `postAllocationWindowSingle()`

```php
postAllocationWindowSingle($uuid, $allocationWindow): \OpenAPI\Client\Model\Result
```

Update an Allocation Window

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


$apiInstance = new OpenAPI\Client\Api\AllocationWindowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Allocation Window
$allocationWindow = new \OpenAPI\Client\Model\AllocationWindow(); // \OpenAPI\Client\Model\AllocationWindow | Allocation Window fields to update

try {
    $result = $apiInstance->postAllocationWindowSingle($uuid, $allocationWindow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AllocationWindowsApi->postAllocationWindowSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| UUID of the Allocation Window |
 **allocationWindow** | [**\OpenAPI\Client\Model\AllocationWindow**](../Model/AllocationWindow.md)| Allocation Window fields to update |

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
