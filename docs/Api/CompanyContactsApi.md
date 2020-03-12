# Swagger\Client\CompanyContactsApi

All URIs are relative to *https://api.servicem8.com/api_1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCompanyContactSingle**](CompanyContactsApi.md#deleteCompanyContactSingle) | **DELETE** /companycontact/{uuid}.json | Delete a Company Contact
[**getCompanyContactAll**](CompanyContactsApi.md#getCompanyContactAll) | **GET** /companycontact.json | List all Company Contacts
[**getCompanyContactSingle**](CompanyContactsApi.md#getCompanyContactSingle) | **GET** /companycontact/{uuid}.json | Retrieve a Company Contact
[**postCompanyContactCreate**](CompanyContactsApi.md#postCompanyContactCreate) | **POST** /companycontact.json | Create a new Company Contact
[**postCompanyContactSingle**](CompanyContactsApi.md#postCompanyContactSingle) | **POST** /companycontact/{uuid}.json | Update a Company Contact


# **deleteCompanyContactSingle**
> \Swagger\Client\Model\Result deleteCompanyContactSingle($uuid)

Delete a Company Contact

In ServiceM8, records are never deleted, but are archived. Archived records will remain accessible via the API as (active = 0), however will no longer be visible in UI. Archived records can be restored to active by setting the record active field to 1.          #### OAuth Scope This endpoint requires the following OAuth scope **manage_customer_contacts**.

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

$apiInstance = new Swagger\Client\Api\CompanyContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | UUID of the Company Contact

try {
    $result = $apiInstance->deleteCompanyContactSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyContactsApi->deleteCompanyContactSingle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of the Company Contact |

### Return type

[**\Swagger\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompanyContactAll**
> \Swagger\Client\Model\CompanyContact[] getCompanyContactAll()

List all Company Contacts

#### Filtering This endpoint supports result filtering. For more information on how to filter this request, [go here](/docs/filtering).         #### OAuth Scope This endpoint requires the following OAuth scope **read_customer_contacts**.

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

$apiInstance = new Swagger\Client\Api\CompanyContactsApi(
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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\CompanyContact[]**](../Model/CompanyContact.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompanyContactSingle**
> \Swagger\Client\Model\CompanyContact getCompanyContactSingle($uuid)

Retrieve a Company Contact

#### OAuth Scope This endpoint requires the following OAuth scope **read_customer_contacts**.

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

$apiInstance = new Swagger\Client\Api\CompanyContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | UUID of the Company Contact

try {
    $result = $apiInstance->getCompanyContactSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyContactsApi->getCompanyContactSingle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of the Company Contact |

### Return type

[**\Swagger\Client\Model\CompanyContact**](../Model/CompanyContact.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCompanyContactCreate**
> \Swagger\Client\Model\Result postCompanyContactCreate($companyContact)

Create a new Company Contact

#### OAuth Scope This endpoint requires the following OAuth scope **manage_customer_contacts**.          #### Record UUID UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the response header as x-record-uuid.

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

$apiInstance = new Swagger\Client\Api\CompanyContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$companyContact = new \Swagger\Client\Model\CompanyContact(); // \Swagger\Client\Model\CompanyContact | Company Contact record to create

try {
    $result = $apiInstance->postCompanyContactCreate($companyContact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyContactsApi->postCompanyContactCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companyContact** | [**\Swagger\Client\Model\CompanyContact**](../Model/CompanyContact.md)| Company Contact record to create |

### Return type

[**\Swagger\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCompanyContactSingle**
> \Swagger\Client\Model\Result postCompanyContactSingle($uuid, $companyContact)

Update a Company Contact

#### OAuth Scope This endpoint requires the following OAuth scope **manage_customer_contacts**.

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

$apiInstance = new Swagger\Client\Api\CompanyContactsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | UUID of the Company Contact
$companyContact = new \Swagger\Client\Model\CompanyContact(); // \Swagger\Client\Model\CompanyContact | Company Contact fields to update

try {
    $result = $apiInstance->postCompanyContactSingle($uuid, $companyContact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompanyContactsApi->postCompanyContactSingle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of the Company Contact |
 **companyContact** | [**\Swagger\Client\Model\CompanyContact**](../Model/CompanyContact.md)| Company Contact fields to update |

### Return type

[**\Swagger\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

