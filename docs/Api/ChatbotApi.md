# Swagger\Client\ChatbotApi

All URIs are relative to *https://api.urlslab.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStatelessChatbotAnswer**](ChatbotApi.md#getstatelesschatbotanswer) | **POST** /v1/chatbot | Get a chatbot answer with stateless chatbot

# **getStatelessChatbotAnswer**
> getStatelessChatbotAnswer()

Get a chatbot answer with stateless chatbot

Get a chatbot answer with stateless chatbot, no session is required

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: UrlslabApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X_URLSLAB_API_KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X_URLSLAB_API_KEY', 'Bearer');

$apiInstance = new Swagger\Client\com.urlslab\ChatbotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getStatelessChatbotAnswer();
} catch (Exception $e) {
    echo 'Exception when calling ChatbotApi->getStatelessChatbotAnswer: ', $e->getMessage(), PHP_EOL;
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

