# Swagger\Client\KnowledgeArticlesApi

All URIs are relative to *https://api.servicem8.com/api_1.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteKnowledgeArticleSingle**](KnowledgeArticlesApi.md#deleteKnowledgeArticleSingle) | **DELETE** /knowledgearticle/{uuid}.json | Delete a Knowledge Article
[**getKnowledgeArticleAll**](KnowledgeArticlesApi.md#getKnowledgeArticleAll) | **GET** /knowledgearticle.json | List all Knowledge Articles
[**getKnowledgeArticleSingle**](KnowledgeArticlesApi.md#getKnowledgeArticleSingle) | **GET** /knowledgearticle/{uuid}.json | Retrieve a Knowledge Article
[**postKnowledgeArticleCreate**](KnowledgeArticlesApi.md#postKnowledgeArticleCreate) | **POST** /knowledgearticle.json | Create a new Knowledge Article
[**postKnowledgeArticleSingle**](KnowledgeArticlesApi.md#postKnowledgeArticleSingle) | **POST** /knowledgearticle/{uuid}.json | Update a Knowledge Article


# **deleteKnowledgeArticleSingle**
> \Swagger\Client\Model\Result deleteKnowledgeArticleSingle($uuid)

Delete a Knowledge Article

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

$apiInstance = new Swagger\Client\Api\KnowledgeArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | UUID of the Knowledge Article

try {
    $result = $apiInstance->deleteKnowledgeArticleSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeArticlesApi->deleteKnowledgeArticleSingle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of the Knowledge Article |

### Return type

[**\Swagger\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKnowledgeArticleAll**
> \Swagger\Client\Model\KnowledgeArticle[] getKnowledgeArticleAll()

List all Knowledge Articles

#### Filtering This endpoint supports result filtering. For more information on how to filter this request, [go here](/docs/filtering).         #### OAuth Scope This endpoint requires the following OAuth scope **read_knowledge**.

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

$apiInstance = new Swagger\Client\Api\KnowledgeArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getKnowledgeArticleAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeArticlesApi->getKnowledgeArticleAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\KnowledgeArticle[]**](../Model/KnowledgeArticle.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getKnowledgeArticleSingle**
> \Swagger\Client\Model\KnowledgeArticle getKnowledgeArticleSingle($uuid)

Retrieve a Knowledge Article

#### OAuth Scope This endpoint requires the following OAuth scope **read_knowledge**.

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

$apiInstance = new Swagger\Client\Api\KnowledgeArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | UUID of the Knowledge Article

try {
    $result = $apiInstance->getKnowledgeArticleSingle($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeArticlesApi->getKnowledgeArticleSingle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of the Knowledge Article |

### Return type

[**\Swagger\Client\Model\KnowledgeArticle**](../Model/KnowledgeArticle.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postKnowledgeArticleCreate**
> \Swagger\Client\Model\Result postKnowledgeArticleCreate($knowledgeArticle)

Create a new Knowledge Article

#### OAuth Scope This endpoint requires the following OAuth scope **manage_knowledge**.          #### Record UUID UUID is optional for record creation. If no UUID is supplied, a UUID will be automatically generated for the new record and returned in the response header as x-record-uuid.

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

$apiInstance = new Swagger\Client\Api\KnowledgeArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$knowledgeArticle = new \Swagger\Client\Model\KnowledgeArticle(); // \Swagger\Client\Model\KnowledgeArticle | Knowledge Article record to create

try {
    $result = $apiInstance->postKnowledgeArticleCreate($knowledgeArticle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeArticlesApi->postKnowledgeArticleCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **knowledgeArticle** | [**\Swagger\Client\Model\KnowledgeArticle**](../Model/KnowledgeArticle.md)| Knowledge Article record to create |

### Return type

[**\Swagger\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postKnowledgeArticleSingle**
> \Swagger\Client\Model\Result postKnowledgeArticleSingle($uuid, $knowledgeArticle)

Update a Knowledge Article



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

$apiInstance = new Swagger\Client\Api\KnowledgeArticlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "uuid_example"; // string | UUID of the Knowledge Article
$knowledgeArticle = new \Swagger\Client\Model\KnowledgeArticle(); // \Swagger\Client\Model\KnowledgeArticle | Knowledge Article fields to update

try {
    $result = $apiInstance->postKnowledgeArticleSingle($uuid, $knowledgeArticle);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling KnowledgeArticlesApi->postKnowledgeArticleSingle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of the Knowledge Article |
 **knowledgeArticle** | [**\Swagger\Client\Model\KnowledgeArticle**](../Model/KnowledgeArticle.md)| Knowledge Article fields to update |

### Return type

[**\Swagger\Client\Model\Result**](../Model/Result.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

