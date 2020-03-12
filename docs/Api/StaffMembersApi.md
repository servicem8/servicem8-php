# Swagger\Client\StaffMembersApi

All URIs are relative to *https://api.servicem8.com/api_1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteStaffMemberSingle**](StaffMembersApi.md#deleteStaffMemberSingle) | **DELETE** /staff/{uuid}.json | Delete a Staff Member
[**getStaffMemberAll**](StaffMembersApi.md#getStaffMemberAll) | **GET** /staff.json | List all Staff Members
[**getStaffMemberSingle**](StaffMembersApi.md#getStaffMemberSingle) | **GET** /staff/{uuid}.json | Retrieve a Staff Member
[**postStaffMemberCreate**](StaffMembersApi.md#postStaffMemberCreate) | **POST** /staff.json | Create a new Staff Member
[**postStaffMemberSingle**](StaffMembersApi.md#postStaffMemberSingle) | **POST** /staff/{uuid}.json | Update a Staff Member


# **deleteStaffMemberSingle**
> \Swagger\Client\Model\Result deleteStaffMemberSingle($uuid)

Delete a Staff Member

In ServiceM8, records are never deleted, but are archived. Archived records will remain accessible via the API as (active = 0), however will no longer be visible in UI. Archived records can be restored to active by setting the record active field to 1.          #### OAuth Scope This endpoint requires the following OAuth scope **manage_staff**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StaffMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | UUID of the Staff Member

try {
    $result = $apiInstance->deleteStaffMemberSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffMembersApi->deleteStaffMemberSingle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of the Staff Member |

### Return type

[**\Swagger\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStaffMemberAll**
> \Swagger\Client\Model\StaffMember[] getStaffMemberAll()

List all Staff Members

#### Filtering This endpoint supports result filtering. For more information on how to filter this request, [go here](/docs/filtering).         #### OAuth Scope This endpoint requires the following OAuth scope **read_staff**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StaffMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getStaffMemberAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffMembersApi->getStaffMemberAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\StaffMember[]**](../Model/StaffMember.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStaffMemberSingle**
> \Swagger\Client\Model\StaffMember getStaffMemberSingle($uuid)

Retrieve a Staff Member

#### OAuth Scope This endpoint requires the following OAuth scope **read_staff**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StaffMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | UUID of the Staff Member

try {
    $result = $apiInstance->getStaffMemberSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffMembersApi->getStaffMemberSingle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of the Staff Member |

### Return type

[**\Swagger\Client\Model\StaffMember**](../Model/StaffMember.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postStaffMemberCreate**
> \Swagger\Client\Model\Result postStaffMemberCreate($staffMember)

Create a new Staff Member

#### OAuth Scope This endpoint requires the following OAuth scope **manage_staff**.          #### Record UUID UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the response header as x-record-uuid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StaffMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$staffMember = new \Swagger\Client\Model\StaffMember(); // \Swagger\Client\Model\StaffMember | Staff Member record to create

try {
    $result = $apiInstance->postStaffMemberCreate($staffMember);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffMembersApi->postStaffMemberCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **staffMember** | [**\Swagger\Client\Model\StaffMember**](../Model/StaffMember.md)| Staff Member record to create |

### Return type

[**\Swagger\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postStaffMemberSingle**
> \Swagger\Client\Model\Result postStaffMemberSingle($uuid, $staffMember)

Update a Staff Member

#### OAuth Scope This endpoint requires the following OAuth scope **manage_staff**.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure OAuth2 access token for authorization: oauth2
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\StaffMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | UUID of the Staff Member
$staffMember = new \Swagger\Client\Model\StaffMember(); // \Swagger\Client\Model\StaffMember | Staff Member fields to update

try {
    $result = $apiInstance->postStaffMemberSingle($uuid, $staffMember);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaffMembersApi->postStaffMemberSingle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of the Staff Member |
 **staffMember** | [**\Swagger\Client\Model\StaffMember**](../Model/StaffMember.md)| Staff Member fields to update |

### Return type

[**\Swagger\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

