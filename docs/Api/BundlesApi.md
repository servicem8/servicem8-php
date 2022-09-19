# OpenAPI\Client\BundlesApi

All URIs are relative to https://api.servicem8.com/api_1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteMaterialBundleSingle()**](BundlesApi.md#deleteMaterialBundleSingle) | **DELETE** /materialbundle/{uuid}.json | Delete a Bundle |
| [**getMaterialBundleAll()**](BundlesApi.md#getMaterialBundleAll) | **GET** /materialbundle.json | List all Bundles |
| [**getMaterialBundleSingle()**](BundlesApi.md#getMaterialBundleSingle) | **GET** /materialbundle/{uuid}.json | Retrieve a Bundle |
| [**postMaterialBundleCreate()**](BundlesApi.md#postMaterialBundleCreate) | **POST** /materialbundle.json | Create a new Bundle |
| [**postMaterialBundleSingle()**](BundlesApi.md#postMaterialBundleSingle) | **POST** /materialbundle/{uuid}.json | Update a Bundle |


## `deleteMaterialBundleSingle()`

```php
deleteMaterialBundleSingle($uuid): \OpenAPI\Client\Model\Result
```

Delete a Bundle

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


$apiInstance = new OpenAPI\Client\Api\BundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Bundle

try {
    $result = $apiInstance->deleteMaterialBundleSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundlesApi->deleteMaterialBundleSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the Bundle | |

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

## `getMaterialBundleAll()`

```php
getMaterialBundleAll(): \OpenAPI\Client\Model\MaterialBundle[]
```

List all Bundles

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


$apiInstance = new OpenAPI\Client\Api\BundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMaterialBundleAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundlesApi->getMaterialBundleAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\MaterialBundle[]**](../Model/MaterialBundle.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMaterialBundleSingle()`

```php
getMaterialBundleSingle($uuid): \OpenAPI\Client\Model\MaterialBundle
```

Retrieve a Bundle

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


$apiInstance = new OpenAPI\Client\Api\BundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Bundle

try {
    $result = $apiInstance->getMaterialBundleSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundlesApi->getMaterialBundleSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the Bundle | |

### Return type

[**\OpenAPI\Client\Model\MaterialBundle**](../Model/MaterialBundle.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postMaterialBundleCreate()`

```php
postMaterialBundleCreate($bundle): \OpenAPI\Client\Model\Result
```

Create a new Bundle

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


$apiInstance = new OpenAPI\Client\Api\BundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bundle = new \OpenAPI\Client\Model\MaterialBundle(); // \OpenAPI\Client\Model\MaterialBundle | Bundle record to create

try {
    $result = $apiInstance->postMaterialBundleCreate($bundle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundlesApi->postMaterialBundleCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bundle** | [**\OpenAPI\Client\Model\MaterialBundle**](../Model/MaterialBundle.md)| Bundle record to create | |

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

## `postMaterialBundleSingle()`

```php
postMaterialBundleSingle($uuid, $bundle): \OpenAPI\Client\Model\Result
```

Update a Bundle

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


$apiInstance = new OpenAPI\Client\Api\BundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Bundle
$bundle = new \OpenAPI\Client\Model\MaterialBundle(); // \OpenAPI\Client\Model\MaterialBundle | Bundle fields to update

try {
    $result = $apiInstance->postMaterialBundleSingle($uuid, $bundle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BundlesApi->postMaterialBundleSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the Bundle | |
| **bundle** | [**\OpenAPI\Client\Model\MaterialBundle**](../Model/MaterialBundle.md)| Bundle fields to update | |

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
