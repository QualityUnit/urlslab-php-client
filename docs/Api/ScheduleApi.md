# Swagger\Client\ScheduleApi

All URIs are relative to *https://api.urlslab.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSchedule**](ScheduleApi.md#createschedule) | **PUT** /v1/schedule | create a new schedule
[**deleteSchedule**](ScheduleApi.md#deleteschedule) | **DELETE** /v1/schedule/{id} | delete a schedule
[**getSchedule**](ScheduleApi.md#getschedule) | **GET** /v1/schedule/{id} | get a specific schedule details
[**listSchedules**](ScheduleApi.md#listschedules) | **GET** /v1/schedule | get list of all schedules for the user

# **createSchedule**
> \Swagger\Client\Model\DomainScheduleAPISchedule[] createSchedule($body)

create a new schedule

Creates a new schedule for the user associated to the API Key. Update not possible

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: UrlslabApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X_URLSLAB_API_KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X_URLSLAB_API_KEY', 'Bearer');

$apiInstance = new Swagger\Client\Urlslab\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\DomainScheduleScheduleConf()); // \Swagger\Client\Model\DomainScheduleScheduleConf[] | 

try {
    $result = $apiInstance->createSchedule($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->createSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DomainScheduleScheduleConf[]**](../Model/DomainScheduleScheduleConf.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\DomainScheduleAPISchedule[]**](../Model/DomainScheduleAPISchedule.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSchedule**
> \Swagger\Client\Model\DomainAcknowledged deleteSchedule($id)

delete a schedule

Deletes a schedule for the user associated to the API Key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: UrlslabApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X_URLSLAB_API_KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X_URLSLAB_API_KEY', 'Bearer');

$apiInstance = new Swagger\Client\Urlslab\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->deleteSchedule($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->deleteSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DomainAcknowledged**](../Model/DomainAcknowledged.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSchedule**
> \Swagger\Client\Model\DomainScheduleAPISchedule getSchedule($id)

get a specific schedule details

Returns the details of a specific schedule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: UrlslabApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X_URLSLAB_API_KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X_URLSLAB_API_KEY', 'Bearer');

$apiInstance = new Swagger\Client\Urlslab\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->getSchedule($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->getSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Swagger\Client\Model\DomainScheduleAPISchedule**](../Model/DomainScheduleAPISchedule.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listSchedules**
> \Swagger\Client\Model\DomainScheduleAPISchedule[] listSchedules()

get list of all schedules for the user

Returns a list of all schedules for the user associated to the API Key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: UrlslabApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X_URLSLAB_API_KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X_URLSLAB_API_KEY', 'Bearer');

$apiInstance = new Swagger\Client\Urlslab\ScheduleApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listSchedules();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScheduleApi->listSchedules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\DomainScheduleAPISchedule[]**](../Model/DomainScheduleAPISchedule.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

