# OpenAPI\Client\SerpApi

All URIs are relative to https://api.urlslab.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**search()**](SerpApi.md#search) | **POST** /v1/serp/search | Search the Serp to get top urls |


## `search()`

```php
search($domain_data_retrieval_serp_api_search_request): \OpenAPI\Client\Model\DomainDataRetrievalSerpApiSearchResponse[]
```

Search the Serp to get top urls

Get top Urls of SERP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlslabApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SerpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_data_retrieval_serp_api_search_request = new \OpenAPI\Client\Model\DomainDataRetrievalSerpApiSearchRequest(); // \OpenAPI\Client\Model\DomainDataRetrievalSerpApiSearchRequest | Searching Params

try {
    $result = $apiInstance->search($domain_data_retrieval_serp_api_search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerpApi->search: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_data_retrieval_serp_api_search_request** | [**\OpenAPI\Client\Model\DomainDataRetrievalSerpApiSearchRequest**](../Model/DomainDataRetrievalSerpApiSearchRequest.md)| Searching Params | |

### Return type

[**\OpenAPI\Client\Model\DomainDataRetrievalSerpApiSearchResponse[]**](../Model/DomainDataRetrievalSerpApiSearchResponse.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
