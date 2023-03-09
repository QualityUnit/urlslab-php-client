# Swagger\Client\QaApi

All URIs are relative to *https://api.urlslab.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAnswer**](QaApi.md#getanswer) | **POST** /v1/qa | Get answer for a question

# **getAnswer**
> getAnswer()

Get answer for a question

Get answer for a question with the data indexed in user account domain(s)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: UrlslabApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X_URLSLAB_API_KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X_URLSLAB_API_KEY', 'Bearer');

$apiInstance = new Swagger\Client\Urlslab\QaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getAnswer();
} catch (Exception $e) {
    echo 'Exception when calling QaApi->getAnswer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

