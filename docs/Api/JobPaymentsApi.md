# Swagger\Client\JobPaymentsApi

All URIs are relative to *https://api.servicem8.com/api_1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteJobPaymentSingle**](JobPaymentsApi.md#deleteJobPaymentSingle) | **DELETE** /jobpayment/{uuid}.json | Delete a Job Payment
[**getJobPaymentAll**](JobPaymentsApi.md#getJobPaymentAll) | **GET** /jobpayment.json | List all Job Payments
[**getJobPaymentSingle**](JobPaymentsApi.md#getJobPaymentSingle) | **GET** /jobpayment/{uuid}.json | Retrieve a Job Payment
[**postJobPaymentCreate**](JobPaymentsApi.md#postJobPaymentCreate) | **POST** /jobpayment.json | Create a new Job Payment
[**postJobPaymentSingle**](JobPaymentsApi.md#postJobPaymentSingle) | **POST** /jobpayment/{uuid}.json | Update a Job Payment


# **deleteJobPaymentSingle**
> \Swagger\Client\Model\Result deleteJobPaymentSingle($uuid)

Delete a Job Payment

In ServiceM8, records are never deleted, but are archived. Archived records will remain accessible via the API as (active = 0), however will no longer be visible in UI. Archived records can be restored to active by setting the record active field to 1.

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

$apiInstance = new Swagger\Client\Api\JobPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | UUID of the Job Payment

try {
    $result = $apiInstance->deleteJobPaymentSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobPaymentsApi->deleteJobPaymentSingle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of the Job Payment |

### Return type

[**\Swagger\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobPaymentAll**
> \Swagger\Client\Model\JobPayment[] getJobPaymentAll()

List all Job Payments

#### Filtering This endpoint supports result filtering. For more information on how to filter this request, [go here](/docs/filtering).

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

$apiInstance = new Swagger\Client\Api\JobPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getJobPaymentAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobPaymentsApi->getJobPaymentAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\JobPayment[]**](../Model/JobPayment.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJobPaymentSingle**
> \Swagger\Client\Model\JobPayment getJobPaymentSingle($uuid)

Retrieve a Job Payment



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

$apiInstance = new Swagger\Client\Api\JobPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | UUID of the Job Payment

try {
    $result = $apiInstance->getJobPaymentSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobPaymentsApi->getJobPaymentSingle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of the Job Payment |

### Return type

[**\Swagger\Client\Model\JobPayment**](../Model/JobPayment.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postJobPaymentCreate**
> \Swagger\Client\Model\Result postJobPaymentCreate($jobPayment)

Create a new Job Payment

#### Record UUID UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the response header as x-record-uuid.

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

$apiInstance = new Swagger\Client\Api\JobPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$jobPayment = new \Swagger\Client\Model\JobPayment(); // \Swagger\Client\Model\JobPayment | Job Payment record to create

try {
    $result = $apiInstance->postJobPaymentCreate($jobPayment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobPaymentsApi->postJobPaymentCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **jobPayment** | [**\Swagger\Client\Model\JobPayment**](../Model/JobPayment.md)| Job Payment record to create |

### Return type

[**\Swagger\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postJobPaymentSingle**
> \Swagger\Client\Model\Result postJobPaymentSingle($uuid, $jobPayment)

Update a Job Payment



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

$apiInstance = new Swagger\Client\Api\JobPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | UUID of the Job Payment
$jobPayment = new \Swagger\Client\Model\JobPayment(); // \Swagger\Client\Model\JobPayment | Job Payment fields to update

try {
    $result = $apiInstance->postJobPaymentSingle($uuid, $jobPayment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JobPaymentsApi->postJobPaymentSingle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of the Job Payment |
 **jobPayment** | [**\Swagger\Client\Model\JobPayment**](../Model/JobPayment.md)| Job Payment fields to update |

### Return type

[**\Swagger\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

