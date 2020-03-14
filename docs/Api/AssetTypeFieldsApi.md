# OpenAPI\Client\AssetTypeFieldsApi

All URIs are relative to *https://api.servicem8.com/api_1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAssetTypeFieldSingle**](AssetTypeFieldsApi.md#deleteAssetTypeFieldSingle) | **DELETE** /assettypefield/{uuid}.json | Delete an Asset Type Field
[**getAssetTypeFieldAll**](AssetTypeFieldsApi.md#getAssetTypeFieldAll) | **GET** /assettypefield.json | List all Asset Type Fields
[**getAssetTypeFieldSingle**](AssetTypeFieldsApi.md#getAssetTypeFieldSingle) | **GET** /assettypefield/{uuid}.json | Retrieve an Asset Type Field
[**postAssetTypeFieldCreate**](AssetTypeFieldsApi.md#postAssetTypeFieldCreate) | **POST** /assettypefield.json | Create a new Asset Type Field
[**postAssetTypeFieldSingle**](AssetTypeFieldsApi.md#postAssetTypeFieldSingle) | **POST** /assettypefield/{uuid}.json | Update an Asset Type Field



## deleteAssetTypeFieldSingle

> \OpenAPI\Client\Model\Result deleteAssetTypeFieldSingle($uuid)

Delete an Asset Type Field

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


$apiInstance = new OpenAPI\Client\Api\AssetTypeFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Asset Type Field

try {
    $result = $apiInstance->deleteAssetTypeFieldSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTypeFieldsApi->deleteAssetTypeFieldSingle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of the Asset Type Field |

### Return type

[**\OpenAPI\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAssetTypeFieldAll

> \OpenAPI\Client\Model\AssetTypeField[] getAssetTypeFieldAll()

List all Asset Type Fields

#### Filtering This endpoint supports result filtering. For more information on how to filter this request, [go here](/docs/filtering).         #### OAuth Scope This endpoint requires the following OAuth scope **read_assets**.

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


$apiInstance = new OpenAPI\Client\Api\AssetTypeFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAssetTypeFieldAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTypeFieldsApi->getAssetTypeFieldAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\AssetTypeField[]**](../Model/AssetTypeField.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getAssetTypeFieldSingle

> \OpenAPI\Client\Model\AssetTypeField getAssetTypeFieldSingle($uuid)

Retrieve an Asset Type Field

#### OAuth Scope This endpoint requires the following OAuth scope **read_assets**.

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


$apiInstance = new OpenAPI\Client\Api\AssetTypeFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Asset Type Field

try {
    $result = $apiInstance->getAssetTypeFieldSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTypeFieldsApi->getAssetTypeFieldSingle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of the Asset Type Field |

### Return type

[**\OpenAPI\Client\Model\AssetTypeField**](../Model/AssetTypeField.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postAssetTypeFieldCreate

> \OpenAPI\Client\Model\Result postAssetTypeFieldCreate($assetTypeField)

Create a new Asset Type Field

#### OAuth Scope This endpoint requires the following OAuth scope **manage_assets**.          #### Record UUID UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the response header as x-record-uuid.

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


$apiInstance = new OpenAPI\Client\Api\AssetTypeFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$assetTypeField = new \OpenAPI\Client\Model\AssetTypeField(); // \OpenAPI\Client\Model\AssetTypeField | Asset Type Field record to create

try {
    $result = $apiInstance->postAssetTypeFieldCreate($assetTypeField);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTypeFieldsApi->postAssetTypeFieldCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **assetTypeField** | [**\OpenAPI\Client\Model\AssetTypeField**](../Model/AssetTypeField.md)| Asset Type Field record to create |

### Return type

[**\OpenAPI\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## postAssetTypeFieldSingle

> \OpenAPI\Client\Model\Result postAssetTypeFieldSingle($uuid, $assetTypeField)

Update an Asset Type Field

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


$apiInstance = new OpenAPI\Client\Api\AssetTypeFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Asset Type Field
$assetTypeField = new \OpenAPI\Client\Model\AssetTypeField(); // \OpenAPI\Client\Model\AssetTypeField | Asset Type Field fields to update

try {
    $result = $apiInstance->postAssetTypeFieldSingle($uuid, $assetTypeField);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetTypeFieldsApi->postAssetTypeFieldSingle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of the Asset Type Field |
 **assetTypeField** | [**\OpenAPI\Client\Model\AssetTypeField**](../Model/AssetTypeField.md)| Asset Type Field fields to update |

### Return type

[**\OpenAPI\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

