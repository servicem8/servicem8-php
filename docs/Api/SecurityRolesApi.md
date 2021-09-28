# OpenAPI\Client\SecurityRolesApi

All URIs are relative to https://api.servicem8.com/api_1.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSecurityRoleSingle()**](SecurityRolesApi.md#deleteSecurityRoleSingle) | **DELETE** /securityrole/{uuid}.json | Delete a Security Role
[**getSecurityRoleAll()**](SecurityRolesApi.md#getSecurityRoleAll) | **GET** /securityrole.json | List all Security Roles
[**getSecurityRoleSingle()**](SecurityRolesApi.md#getSecurityRoleSingle) | **GET** /securityrole/{uuid}.json | Retrieve a Security Role
[**postSecurityRoleCreate()**](SecurityRolesApi.md#postSecurityRoleCreate) | **POST** /securityrole.json | Create a new Security Role
[**postSecurityRoleSingle()**](SecurityRolesApi.md#postSecurityRoleSingle) | **POST** /securityrole/{uuid}.json | Update a Security Role


## `deleteSecurityRoleSingle()`

```php
deleteSecurityRoleSingle($uuid): \OpenAPI\Client\Model\Result
```

Delete a Security Role

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


$apiInstance = new OpenAPI\Client\Api\SecurityRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Security Role

try {
    $result = $apiInstance->deleteSecurityRoleSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityRolesApi->deleteSecurityRoleSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| UUID of the Security Role |

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

## `getSecurityRoleAll()`

```php
getSecurityRoleAll(): \OpenAPI\Client\Model\SecurityRole[]
```

List all Security Roles

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


$apiInstance = new OpenAPI\Client\Api\SecurityRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSecurityRoleAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityRolesApi->getSecurityRoleAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\SecurityRole[]**](../Model/SecurityRole.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSecurityRoleSingle()`

```php
getSecurityRoleSingle($uuid): \OpenAPI\Client\Model\SecurityRole
```

Retrieve a Security Role

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


$apiInstance = new OpenAPI\Client\Api\SecurityRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Security Role

try {
    $result = $apiInstance->getSecurityRoleSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityRolesApi->getSecurityRoleSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| UUID of the Security Role |

### Return type

[**\OpenAPI\Client\Model\SecurityRole**](../Model/SecurityRole.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSecurityRoleCreate()`

```php
postSecurityRoleCreate($securityRole): \OpenAPI\Client\Model\Result
```

Create a new Security Role

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


$apiInstance = new OpenAPI\Client\Api\SecurityRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$securityRole = new \OpenAPI\Client\Model\SecurityRole(); // \OpenAPI\Client\Model\SecurityRole | Security Role record to create

try {
    $result = $apiInstance->postSecurityRoleCreate($securityRole);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityRolesApi->postSecurityRoleCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **securityRole** | [**\OpenAPI\Client\Model\SecurityRole**](../Model/SecurityRole.md)| Security Role record to create |

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

## `postSecurityRoleSingle()`

```php
postSecurityRoleSingle($uuid, $securityRole): \OpenAPI\Client\Model\Result
```

Update a Security Role

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


$apiInstance = new OpenAPI\Client\Api\SecurityRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the Security Role
$securityRole = new \OpenAPI\Client\Model\SecurityRole(); // \OpenAPI\Client\Model\SecurityRole | Security Role fields to update

try {
    $result = $apiInstance->postSecurityRoleSingle($uuid, $securityRole);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityRolesApi->postSecurityRoleSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | **string**| UUID of the Security Role |
 **securityRole** | [**\OpenAPI\Client\Model\SecurityRole**](../Model/SecurityRole.md)| Security Role fields to update |

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
