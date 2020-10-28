# OpenAPI\Client\JobMaterialsApi

All URIs are relative to https://api.servicem8.com/api_1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteJobMaterialSingle()**](JobMaterialsApi.md#deleteJobMaterialSingle) | **DELETE** /jobmaterial/{uuid}.json | Delete a Job Material
[**getJobMaterialAll()**](JobMaterialsApi.md#getJobMaterialAll) | **GET** /jobmaterial.json | List all Job Materials
[**getJobMaterialSingle()**](JobMaterialsApi.md#getJobMaterialSingle) | **GET** /jobmaterial/{uuid}.json | Retrieve a Job Material
[**postJobMaterialCreate()**](JobMaterialsApi.md#postJobMaterialCreate) | **POST** /jobmaterial.json | Create a new Job Material
[**postJobMaterialSingle()**](JobMaterialsApi.md#postJobMaterialSingle) | **POST** /jobmaterial/{uuid}.json | Update a Job Material


## `deleteJobMaterialSingle()`

```php
deleteJobMaterialSingle($uuid): \OpenAPI\Client\Model\Result
```

Delete a Job Material

In ServiceM8, records are never deleted, but are archived. Archived records will remain accessible via the API as (active = 0), however will no longer be visible in UI. Archived records can be restored to active by setting the record active field to 1.          #### OAuth Scope This endpoint requires the following OAuth scope **manage_job_materials**.

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


$apiInstance = new OpenAPI\Client\Api\JobMaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Job Material

try {
    $result = $apiInstance->deleteJobMaterialSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobMaterialsApi->deleteJobMaterialSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of the Job Material |

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

## `getJobMaterialAll()`

```php
getJobMaterialAll(): \OpenAPI\Client\Model\JobMaterial[]
```

List all Job Materials

#### Filtering This endpoint supports result filtering. For more information on how to filter this request, [go here](/docs/filtering).         #### OAuth Scope This endpoint requires the following OAuth scope **read_job_materials**.

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


$apiInstance = new OpenAPI\Client\Api\JobMaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getJobMaterialAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobMaterialsApi->getJobMaterialAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\JobMaterial[]**](../Model/JobMaterial.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getJobMaterialSingle()`

```php
getJobMaterialSingle($uuid): \OpenAPI\Client\Model\JobMaterial
```

Retrieve a Job Material

#### OAuth Scope This endpoint requires the following OAuth scope **read_job_materials**.

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


$apiInstance = new OpenAPI\Client\Api\JobMaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Job Material

try {
    $result = $apiInstance->getJobMaterialSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobMaterialsApi->getJobMaterialSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of the Job Material |

### Return type

[**\OpenAPI\Client\Model\JobMaterial**](../Model/JobMaterial.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postJobMaterialCreate()`

```php
postJobMaterialCreate($jobMaterial): \OpenAPI\Client\Model\Result
```

Create a new Job Material

#### OAuth Scope This endpoint requires the following OAuth scope **manage_job_materials**.          #### Record UUID UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the response header as x-record-uuid.

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


$apiInstance = new OpenAPI\Client\Api\JobMaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobMaterial = new \OpenAPI\Client\Model\JobMaterial(); // \OpenAPI\Client\Model\JobMaterial | Job Material record to create

try {
    $result = $apiInstance->postJobMaterialCreate($jobMaterial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobMaterialsApi->postJobMaterialCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobMaterial** | [**\OpenAPI\Client\Model\JobMaterial**](../Model/JobMaterial.md)| Job Material record to create |

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

## `postJobMaterialSingle()`

```php
postJobMaterialSingle($uuid, $jobMaterial): \OpenAPI\Client\Model\Result
```

Update a Job Material

#### OAuth Scope This endpoint requires the following OAuth scope **manage_job_materials**.

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


$apiInstance = new OpenAPI\Client\Api\JobMaterialsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Job Material
$jobMaterial = new \OpenAPI\Client\Model\JobMaterial(); // \OpenAPI\Client\Model\JobMaterial | Job Material fields to update

try {
    $result = $apiInstance->postJobMaterialSingle($uuid, $jobMaterial);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobMaterialsApi->postJobMaterialSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of the Job Material |
 **jobMaterial** | [**\OpenAPI\Client\Model\JobMaterial**](../Model/JobMaterial.md)| Job Material fields to update |

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
