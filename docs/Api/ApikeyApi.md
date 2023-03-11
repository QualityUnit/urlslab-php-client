# Swagger\Client\ApikeyApi

All URIs are relative to *https://api.urlslab.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAPIKey**](ApikeyApi.md#createapikey) | **PUT** /v1/apikey | Creates a new API Key for the user
[**deleteAPIKey**](ApikeyApi.md#deleteapikey) | **DELETE** /v1/apikey | Deletes an API Key for the user
[**listAPIKey**](ApikeyApi.md#listapikey) | **GET** /v1/apikey | Lists all API Keys for the user
[**validate**](ApikeyApi.md#validate) | **GET** /v1/apikey/validate | validate a given API Key

# **createAPIKey**
> \Swagger\Client\Model\DomainAcknowledged createAPIKey($body)

Creates a new API Key for the user

Creates a new API Key for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: UrlslabApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Urlslab\ApikeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = "body_example"; // string | API Key to be validated

try {
    $result = $apiInstance->createAPIKey($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApikeyApi->createAPIKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)| API Key to be validated | [optional]

### Return type

[**\Swagger\Client\Model\DomainAcknowledged**](../Model/DomainAcknowledged.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAPIKey**
> \Swagger\Client\Model\DomainAcknowledged deleteAPIKey($body)

Deletes an API Key for the user

Deletes an API Key for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: UrlslabApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Urlslab\ApikeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = "body_example"; // string | API Key to be validated

try {
    $result = $apiInstance->deleteAPIKey($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApikeyApi->deleteAPIKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)| API Key to be validated | [optional]

### Return type

[**\Swagger\Client\Model\DomainAcknowledged**](../Model/DomainAcknowledged.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAPIKey**
> \Swagger\Client\Model\DomainAcknowledged listAPIKey($body)

Lists all API Keys for the user

Lists API Key for the user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: UrlslabApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Urlslab\ApikeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = "body_example"; // string | API Key to be validated

try {
    $result = $apiInstance->listAPIKey($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApikeyApi->listAPIKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)| API Key to be validated | [optional]

### Return type

[**\Swagger\Client\Model\DomainAcknowledged**](../Model/DomainAcknowledged.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validate**
> \Swagger\Client\Model\DomainAcknowledged validate($body)

validate a given API Key

Validates the API Key provided in the request header

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: UrlslabApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');

$apiInstance = new Swagger\Client\Urlslab\ApikeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = "body_example"; // string | API Key to be validated

try {
    $result = $apiInstance->validate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApikeyApi->validate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)| API Key to be validated | [optional]

### Return type

[**\Swagger\Client\Model\DomainAcknowledged**](../Model/DomainAcknowledged.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

 - **Content-Type**: text/plain
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

