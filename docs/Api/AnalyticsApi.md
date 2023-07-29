# OpenAPI\Client\AnalyticsApi

All URIs are relative to https://api.urlslab.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPageStats()**](AnalyticsApi.md#getPageStats) | **POST** /v1/analytics/page-stats | Page Stats data from google search console |
| [**getSiteUrls()**](AnalyticsApi.md#getSiteUrls) | **GET** /v1/analytics/site-urls | Site URLs from GSC |
| [**getTopKeywords()**](AnalyticsApi.md#getTopKeywords) | **POST** /v1/analytics/keywords | Keyword Analytics data from google search console |


## `getPageStats()`

```php
getPageStats($domain_data_retrieval_analytics_search_request): \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchResponse
```

Page Stats data from google search console

Get page stats analytics data from google search console

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlslabApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_data_retrieval_analytics_search_request = new \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchRequest(); // \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchRequest | Analytics request

try {
    $result = $apiInstance->getPageStats($domain_data_retrieval_analytics_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getPageStats: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_data_retrieval_analytics_search_request** | [**\OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchRequest**](../Model/DomainDataRetrievalAnalyticsSearchRequest.md)| Analytics request | |

### Return type

[**\OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchResponse**](../Model/DomainDataRetrievalAnalyticsSearchResponse.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSiteUrls()`

```php
getSiteUrls(): \OpenAPI\Client\Model\DomainDataRetrievalSiteUrlsResponse
```

Site URLs from GSC

Get site urls from google search console

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlslabApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSiteUrls();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getSiteUrls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\DomainDataRetrievalSiteUrlsResponse**](../Model/DomainDataRetrievalSiteUrlsResponse.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTopKeywords()`

```php
getTopKeywords($domain_data_retrieval_analytics_search_request): \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchResponse
```

Keyword Analytics data from google search console

Get keyword analytics data from google search console

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlslabApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_data_retrieval_analytics_search_request = new \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchRequest(); // \OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchRequest | Analytics request

try {
    $result = $apiInstance->getTopKeywords($domain_data_retrieval_analytics_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->getTopKeywords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_data_retrieval_analytics_search_request** | [**\OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchRequest**](../Model/DomainDataRetrievalAnalyticsSearchRequest.md)| Analytics request | |

### Return type

[**\OpenAPI\Client\Model\DomainDataRetrievalAnalyticsSearchResponse**](../Model/DomainDataRetrievalAnalyticsSearchResponse.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
