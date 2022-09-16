# OpenAPI\Client\JobMaterialBundlesApi

All URIs are relative to https://api.servicem8.com/api_1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteJobMaterialBundleSingle()**](JobMaterialBundlesApi.md#deleteJobMaterialBundleSingle) | **DELETE** /jobmaterialbundle/{uuid}.json | Delete a JobMaterialBundle |
| [**getJobMaterialBundleAll()**](JobMaterialBundlesApi.md#getJobMaterialBundleAll) | **GET** /jobmaterialbundle.json | List all JobMaterialBundles |
| [**getJobMaterialBundleSingle()**](JobMaterialBundlesApi.md#getJobMaterialBundleSingle) | **GET** /jobmaterialbundle/{uuid}.json | Retrieve a JobMaterialBundle |
| [**postJobMaterialBundleCreate()**](JobMaterialBundlesApi.md#postJobMaterialBundleCreate) | **POST** /jobmaterialbundle.json | Create a new JobMaterialBundle |
| [**postJobMaterialBundleSingle()**](JobMaterialBundlesApi.md#postJobMaterialBundleSingle) | **POST** /jobmaterialbundle/{uuid}.json | Update a JobMaterialBundle |


## `deleteJobMaterialBundleSingle()`

```php
deleteJobMaterialBundleSingle($uuid): \OpenAPI\Client\Model\Result
```

Delete a JobMaterialBundle

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


$apiInstance = new OpenAPI\Client\Api\JobMaterialBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the JobMaterialBundle

try {
    $result = $apiInstance->deleteJobMaterialBundleSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobMaterialBundlesApi->deleteJobMaterialBundleSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the JobMaterialBundle | |

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

## `getJobMaterialBundleAll()`

```php
getJobMaterialBundleAll(): \OpenAPI\Client\Model\JobMaterialBundle[]
```

List all JobMaterialBundles

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


$apiInstance = new OpenAPI\Client\Api\JobMaterialBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getJobMaterialBundleAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobMaterialBundlesApi->getJobMaterialBundleAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\JobMaterialBundle[]**](../Model/JobMaterialBundle.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJobMaterialBundleSingle()`

```php
getJobMaterialBundleSingle($uuid): \OpenAPI\Client\Model\JobMaterialBundle
```

Retrieve a JobMaterialBundle

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


$apiInstance = new OpenAPI\Client\Api\JobMaterialBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the JobMaterialBundle

try {
    $result = $apiInstance->getJobMaterialBundleSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobMaterialBundlesApi->getJobMaterialBundleSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the JobMaterialBundle | |

### Return type

[**\OpenAPI\Client\Model\JobMaterialBundle**](../Model/JobMaterialBundle.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postJobMaterialBundleCreate()`

```php
postJobMaterialBundleCreate($jobMaterialBundle): \OpenAPI\Client\Model\Result
```

Create a new JobMaterialBundle

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


$apiInstance = new OpenAPI\Client\Api\JobMaterialBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobMaterialBundle = new \OpenAPI\Client\Model\JobMaterialBundle(); // \OpenAPI\Client\Model\JobMaterialBundle | JobMaterialBundle record to create

try {
    $result = $apiInstance->postJobMaterialBundleCreate($jobMaterialBundle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobMaterialBundlesApi->postJobMaterialBundleCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **jobMaterialBundle** | [**\OpenAPI\Client\Model\JobMaterialBundle**](../Model/JobMaterialBundle.md)| JobMaterialBundle record to create | |

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

## `postJobMaterialBundleSingle()`

```php
postJobMaterialBundleSingle($uuid, $jobMaterialBundle): \OpenAPI\Client\Model\Result
```

Update a JobMaterialBundle

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


$apiInstance = new OpenAPI\Client\Api\JobMaterialBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the JobMaterialBundle
$jobMaterialBundle = new \OpenAPI\Client\Model\JobMaterialBundle(); // \OpenAPI\Client\Model\JobMaterialBundle | JobMaterialBundle fields to update

try {
    $result = $apiInstance->postJobMaterialBundleSingle($uuid, $jobMaterialBundle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobMaterialBundlesApi->postJobMaterialBundleSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the JobMaterialBundle | |
| **jobMaterialBundle** | [**\OpenAPI\Client\Model\JobMaterialBundle**](../Model/JobMaterialBundle.md)| JobMaterialBundle fields to update | |

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
