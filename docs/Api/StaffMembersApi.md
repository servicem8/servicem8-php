# OpenAPI\Client\StaffMembersApi

All URIs are relative to https://api.servicem8.com/api_1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteStaffSingle()**](StaffMembersApi.md#deleteStaffSingle) | **DELETE** /staff/{uuid}.json | Delete a Staff Member |
| [**getStaffAll()**](StaffMembersApi.md#getStaffAll) | **GET** /staff.json | List all Staff Members |
| [**getStaffSingle()**](StaffMembersApi.md#getStaffSingle) | **GET** /staff/{uuid}.json | Retrieve a Staff Member |
| [**postStaffCreate()**](StaffMembersApi.md#postStaffCreate) | **POST** /staff.json | Create a new Staff Member |
| [**postStaffSingle()**](StaffMembersApi.md#postStaffSingle) | **POST** /staff/{uuid}.json | Update a Staff Member |


## `deleteStaffSingle()`

```php
deleteStaffSingle($uuid): \OpenAPI\Client\Model\Result
```

Delete a Staff Member

In ServiceM8, records are never deleted, but are archived. Archived records will remain accessible via the API as (active = 0), however will no longer be visible in UI. Archived records can be restored to active by setting the record active field to 1.          #### OAuth Scope This endpoint requires the following OAuth scope **manage_staff**.

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


$apiInstance = new OpenAPI\Client\Api\StaffMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Staff Member

try {
    $result = $apiInstance->deleteStaffSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffMembersApi->deleteStaffSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the Staff Member | |

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

## `getStaffAll()`

```php
getStaffAll(): \OpenAPI\Client\Model\Staff[]
```

List all Staff Members

#### Filtering This endpoint supports result filtering. For more information on how to filter this request, [go here](/docs/filtering).         #### OAuth Scope This endpoint requires the following OAuth scope **read_staff**.

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


$apiInstance = new OpenAPI\Client\Api\StaffMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getStaffAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffMembersApi->getStaffAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\Staff[]**](../Model/Staff.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStaffSingle()`

```php
getStaffSingle($uuid): \OpenAPI\Client\Model\Staff
```

Retrieve a Staff Member

#### OAuth Scope This endpoint requires the following OAuth scope **read_staff**.

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


$apiInstance = new OpenAPI\Client\Api\StaffMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Staff Member

try {
    $result = $apiInstance->getStaffSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffMembersApi->getStaffSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the Staff Member | |

### Return type

[**\OpenAPI\Client\Model\Staff**](../Model/Staff.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postStaffCreate()`

```php
postStaffCreate($staffMember): \OpenAPI\Client\Model\Result
```

Create a new Staff Member

#### OAuth Scope This endpoint requires the following OAuth scope **manage_staff**.          #### Record UUID UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the response header as x-record-uuid.

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


$apiInstance = new OpenAPI\Client\Api\StaffMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$staffMember = new \OpenAPI\Client\Model\Staff(); // \OpenAPI\Client\Model\Staff | Staff Member record to create

try {
    $result = $apiInstance->postStaffCreate($staffMember);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffMembersApi->postStaffCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **staffMember** | [**\OpenAPI\Client\Model\Staff**](../Model/Staff.md)| Staff Member record to create | |

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

## `postStaffSingle()`

```php
postStaffSingle($uuid, $staffMember): \OpenAPI\Client\Model\Result
```

Update a Staff Member

#### OAuth Scope This endpoint requires the following OAuth scope **manage_staff**.

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


$apiInstance = new OpenAPI\Client\Api\StaffMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Staff Member
$staffMember = new \OpenAPI\Client\Model\Staff(); // \OpenAPI\Client\Model\Staff | Staff Member fields to update

try {
    $result = $apiInstance->postStaffSingle($uuid, $staffMember);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffMembersApi->postStaffSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the Staff Member | |
| **staffMember** | [**\OpenAPI\Client\Model\Staff**](../Model/Staff.md)| Staff Member fields to update | |

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
