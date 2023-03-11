# Swagger\Client\SummaryApi

All URIs are relative to *https://api.urlslab.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSummary**](SummaryApi.md#getsummary) | **POST** /v1/summary | Get summarization data for url

# **getSummary**
> \Swagger\Client\Model\DomainDataRetrievalSummaryResponse[] getSummary($body)

Get summarization data for url

Get summarization data for url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: UrlslabApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Urlslab\SummaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\DomainDataRetrievalUpdatableRetrieval()); // \Swagger\Client\Model\DomainDataRetrievalUpdatableRetrieval[] | 

try {
    $result = $apiInstance->getSummary($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SummaryApi->getSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DomainDataRetrievalUpdatableRetrieval[]**](../Model/DomainDataRetrievalUpdatableRetrieval.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DomainDataRetrievalSummaryResponse[]**](../Model/DomainDataRetrievalSummaryResponse.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

