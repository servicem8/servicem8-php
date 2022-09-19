# OpenAPI\Client\ClientsApi

All URIs are relative to https://api.servicem8.com/api_1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCompanySingle()**](ClientsApi.md#deleteCompanySingle) | **DELETE** /company/{uuid}.json | Delete a Client |
| [**getCompanyAll()**](ClientsApi.md#getCompanyAll) | **GET** /company.json | List all Clients |
| [**getCompanySingle()**](ClientsApi.md#getCompanySingle) | **GET** /company/{uuid}.json | Retrieve a Client |
| [**postCompanyCreate()**](ClientsApi.md#postCompanyCreate) | **POST** /company.json | Create a new Client |
| [**postCompanySingle()**](ClientsApi.md#postCompanySingle) | **POST** /company/{uuid}.json | Update a Client |


## `deleteCompanySingle()`

```php
deleteCompanySingle($uuid): \OpenAPI\Client\Model\Result
```

Delete a Client

In ServiceM8, records are never deleted, but are archived. Archived records will remain accessible via the API as (active = 0), however will no longer be visible in UI. Archived records can be restored to active by setting the record active field to 1.          #### OAuth Scope This endpoint requires the following OAuth scope **manage_customers**.

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


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Client

try {
    $result = $apiInstance->deleteCompanySingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->deleteCompanySingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the Client | |

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

## `getCompanyAll()`

```php
getCompanyAll(): \OpenAPI\Client\Model\Company[]
```

List all Clients

#### Filtering This endpoint supports result filtering. For more information on how to filter this request, [go here](/docs/filtering).         #### OAuth Scope This endpoint requires the following OAuth scope **read_customers**.

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


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCompanyAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->getCompanyAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Company[]**](../Model/Company.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanySingle()`

```php
getCompanySingle($uuid): \OpenAPI\Client\Model\Company
```

Retrieve a Client

#### OAuth Scope This endpoint requires the following OAuth scope **read_customers**.

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


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Client

try {
    $result = $apiInstance->getCompanySingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->getCompanySingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the Client | |

### Return type

[**\OpenAPI\Client\Model\Company**](../Model/Company.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCompanyCreate()`

```php
postCompanyCreate($client): \OpenAPI\Client\Model\Result
```

Create a new Client

#### OAuth Scope This endpoint requires the following OAuth scope **manage_customers**.          #### Record UUID UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the response header as x-record-uuid.

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


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client = new \OpenAPI\Client\Model\Company(); // \OpenAPI\Client\Model\Company | Client record to create

try {
    $result = $apiInstance->postCompanyCreate($client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->postCompanyCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client** | [**\OpenAPI\Client\Model\Company**](../Model/Company.md)| Client record to create | |

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

## `postCompanySingle()`

```php
postCompanySingle($uuid, $client): \OpenAPI\Client\Model\Result
```

Update a Client

#### OAuth Scope This endpoint requires the following OAuth scope **manage_customers**.

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


$apiInstance = new OpenAPI\Client\Api\ClientsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Client
$client = new \OpenAPI\Client\Model\Company(); // \OpenAPI\Client\Model\Company | Client fields to update

try {
    $result = $apiInstance->postCompanySingle($uuid, $client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->postCompanySingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the Client | |
| **client** | [**\OpenAPI\Client\Model\Company**](../Model/Company.md)| Client fields to update | |

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
