# Swagger\Client\ScreenshotApi

All URIs are relative to *https://api.urlslab.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getScreenshots**](ScreenshotApi.md#getscreenshots) | **POST** /v1/screenshot | Get screenshot of url

# **getScreenshots**
> \Swagger\Client\Model\DomainDataRetrievalScreenshotResponse[] getScreenshots($body)

Get screenshot of url

Get screenshot of any given url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: UrlslabApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X_URLSLAB_API_KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X_URLSLAB_API_KEY', 'Bearer');

$apiInstance = new Swagger\Client\Urlslab\ScreenshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\DomainDataRetrievalUpdatableRetrieval()); // \Swagger\Client\Model\DomainDataRetrievalUpdatableRetrieval[] | 

try {
    $result = $apiInstance->getScreenshots($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreenshotApi->getScreenshots: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DomainDataRetrievalUpdatableRetrieval[]**](../Model/DomainDataRetrievalUpdatableRetrieval.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DomainDataRetrievalScreenshotResponse[]**](../Model/DomainDataRetrievalScreenshotResponse.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

