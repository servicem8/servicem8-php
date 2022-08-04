# OpenAPI\Client\CompanyContactsApi

All URIs are relative to https://api.servicem8.com/api_1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCompanyContactSingle()**](CompanyContactsApi.md#deleteCompanyContactSingle) | **DELETE** /companycontact/{uuid}.json | Delete a Company Contact |
| [**getCompanyContactAll()**](CompanyContactsApi.md#getCompanyContactAll) | **GET** /companycontact.json | List all Company Contacts |
| [**getCompanyContactSingle()**](CompanyContactsApi.md#getCompanyContactSingle) | **GET** /companycontact/{uuid}.json | Retrieve a Company Contact |
| [**postCompanyContactCreate()**](CompanyContactsApi.md#postCompanyContactCreate) | **POST** /companycontact.json | Create a new Company Contact |
| [**postCompanyContactSingle()**](CompanyContactsApi.md#postCompanyContactSingle) | **POST** /companycontact/{uuid}.json | Update a Company Contact |


## `deleteCompanyContactSingle()`

```php
deleteCompanyContactSingle($uuid): \OpenAPI\Client\Model\Result
```

Delete a Company Contact

In ServiceM8, records are never deleted, but are archived. Archived records will remain accessible via the API as (active = 0), however will no longer be visible in UI. Archived records can be restored to active by setting the record active field to 1.          #### OAuth Scope This endpoint requires the following OAuth scope **manage_customer_contacts**.

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


$apiInstance = new OpenAPI\Client\Api\CompanyContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Company Contact

try {
    $result = $apiInstance->deleteCompanyContactSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyContactsApi->deleteCompanyContactSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the Company Contact | |

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

## `getCompanyContactAll()`

```php
getCompanyContactAll(): \OpenAPI\Client\Model\CompanyContact[]
```

List all Company Contacts

#### Filtering This endpoint supports result filtering. For more information on how to filter this request, [go here](/docs/filtering).         #### OAuth Scope This endpoint requires the following OAuth scope **read_customer_contacts**.

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


$apiInstance = new OpenAPI\Client\Api\CompanyContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCompanyContactAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyContactsApi->getCompanyContactAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CompanyContact[]**](../Model/CompanyContact.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyContactSingle()`

```php
getCompanyContactSingle($uuid): \OpenAPI\Client\Model\CompanyContact
```

Retrieve a Company Contact

#### OAuth Scope This endpoint requires the following OAuth scope **read_customer_contacts**.

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


$apiInstance = new OpenAPI\Client\Api\CompanyContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Company Contact

try {
    $result = $apiInstance->getCompanyContactSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyContactsApi->getCompanyContactSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the Company Contact | |

### Return type

[**\OpenAPI\Client\Model\CompanyContact**](../Model/CompanyContact.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCompanyContactCreate()`

```php
postCompanyContactCreate($companyContact): \OpenAPI\Client\Model\Result
```

Create a new Company Contact

#### OAuth Scope This endpoint requires the following OAuth scope **manage_customer_contacts**.          #### Record UUID UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the response header as x-record-uuid.

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


$apiInstance = new OpenAPI\Client\Api\CompanyContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$companyContact = new \OpenAPI\Client\Model\CompanyContact(); // \OpenAPI\Client\Model\CompanyContact | Company Contact record to create

try {
    $result = $apiInstance->postCompanyContactCreate($companyContact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyContactsApi->postCompanyContactCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **companyContact** | [**\OpenAPI\Client\Model\CompanyContact**](../Model/CompanyContact.md)| Company Contact record to create | |

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

## `postCompanyContactSingle()`

```php
postCompanyContactSingle($uuid, $companyContact): \OpenAPI\Client\Model\Result
```

Update a Company Contact

#### OAuth Scope This endpoint requires the following OAuth scope **manage_customer_contacts**.

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


$apiInstance = new OpenAPI\Client\Api\CompanyContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Company Contact
$companyContact = new \OpenAPI\Client\Model\CompanyContact(); // \OpenAPI\Client\Model\CompanyContact | Company Contact fields to update

try {
    $result = $apiInstance->postCompanyContactSingle($uuid, $companyContact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyContactsApi->postCompanyContactSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the Company Contact | |
| **companyContact** | [**\OpenAPI\Client\Model\CompanyContact**](../Model/CompanyContact.md)| Company Contact fields to update | |

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
