# OpenAPI\Client\SMSTemplatesApi

All URIs are relative to https://api.servicem8.com/api_1.0, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteSmsTemplateSingle()**](SMSTemplatesApi.md#deleteSmsTemplateSingle) | **DELETE** /smstemplate/{uuid}.json | Delete a SMS Template |
| [**getSmsTemplateAll()**](SMSTemplatesApi.md#getSmsTemplateAll) | **GET** /smstemplate.json | List all SMS Templates |
| [**getSmsTemplateSingle()**](SMSTemplatesApi.md#getSmsTemplateSingle) | **GET** /smstemplate/{uuid}.json | Retrieve a SMS Template |
| [**postSmsTemplateCreate()**](SMSTemplatesApi.md#postSmsTemplateCreate) | **POST** /smstemplate.json | Create a new SMS Template |
| [**postSmsTemplateSingle()**](SMSTemplatesApi.md#postSmsTemplateSingle) | **POST** /smstemplate/{uuid}.json | Update a SMS Template |


## `deleteSmsTemplateSingle()`

```php
deleteSmsTemplateSingle($uuid): \OpenAPI\Client\Model\Result
```

Delete a SMS Template

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


$apiInstance = new OpenAPI\Client\Api\SMSTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the SMS Template

try {
    $result = $apiInstance->deleteSmsTemplateSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSTemplatesApi->deleteSmsTemplateSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the SMS Template | |

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

## `getSmsTemplateAll()`

```php
getSmsTemplateAll(): \OpenAPI\Client\Model\SmsTemplate[]
```

List all SMS Templates

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


$apiInstance = new OpenAPI\Client\Api\SMSTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSmsTemplateAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSTemplatesApi->getSmsTemplateAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\SmsTemplate[]**](../Model/SmsTemplate.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmsTemplateSingle()`

```php
getSmsTemplateSingle($uuid): \OpenAPI\Client\Model\SmsTemplate
```

Retrieve a SMS Template

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


$apiInstance = new OpenAPI\Client\Api\SMSTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the SMS Template

try {
    $result = $apiInstance->getSmsTemplateSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSTemplatesApi->getSmsTemplateSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the SMS Template | |

### Return type

[**\OpenAPI\Client\Model\SmsTemplate**](../Model/SmsTemplate.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSmsTemplateCreate()`

```php
postSmsTemplateCreate($sMSTemplate): \OpenAPI\Client\Model\Result
```

Create a new SMS Template

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


$apiInstance = new OpenAPI\Client\Api\SMSTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sMSTemplate = new \OpenAPI\Client\Model\SmsTemplate(); // \OpenAPI\Client\Model\SmsTemplate | SMS Template record to create

try {
    $result = $apiInstance->postSmsTemplateCreate($sMSTemplate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSTemplatesApi->postSmsTemplateCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sMSTemplate** | [**\OpenAPI\Client\Model\SmsTemplate**](../Model/SmsTemplate.md)| SMS Template record to create | |

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

## `postSmsTemplateSingle()`

```php
postSmsTemplateSingle($uuid, $sMSTemplate): \OpenAPI\Client\Model\Result
```

Update a SMS Template

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


$apiInstance = new OpenAPI\Client\Api\SMSTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of the SMS Template
$sMSTemplate = new \OpenAPI\Client\Model\SmsTemplate(); // \OpenAPI\Client\Model\SmsTemplate | SMS Template fields to update

try {
    $result = $apiInstance->postSmsTemplateSingle($uuid, $sMSTemplate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SMSTemplatesApi->postSmsTemplateSingle: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of the SMS Template | |
| **sMSTemplate** | [**\OpenAPI\Client\Model\SmsTemplate**](../Model/SmsTemplate.md)| SMS Template fields to update | |

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
