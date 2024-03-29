# OpenAPI\Client\SnapshotApi

All URIs are relative to https://api.urlslab.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSnapshots()**](SnapshotApi.md#getSnapshots) | **POST** /v1/snapshot | Get screenshot of url |
| [**getSnapshotsHistory()**](SnapshotApi.md#getSnapshotsHistory) | **GET** /v1/snapshot/history | Get history of snapshot of url |


## `getSnapshots()`

```php
getSnapshots($domain_data_retrieval_data_request): \OpenAPI\Client\Model\DomainDataRetrievalScreenshotResponse[]
```

Get screenshot of url

Get screenshot of any given url

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlslabApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_data_retrieval_data_request = new \OpenAPI\Client\Model\DomainDataRetrievalDataRequest(); // \OpenAPI\Client\Model\DomainDataRetrievalDataRequest | Url to get related urls

try {
    $result = $apiInstance->getSnapshots($domain_data_retrieval_data_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnapshotApi->getSnapshots: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_data_retrieval_data_request** | [**\OpenAPI\Client\Model\DomainDataRetrievalDataRequest**](../Model/DomainDataRetrievalDataRequest.md)| Url to get related urls | |

### Return type

[**\OpenAPI\Client\Model\DomainDataRetrievalScreenshotResponse[]**](../Model/DomainDataRetrievalScreenshotResponse.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSnapshotsHistory()`

```php
getSnapshotsHistory($url, $last_id, $start_date, $end_date, $only_changed, $limit, $body): \OpenAPI\Client\Model\DomainDataRetrievalUrlSnapshotMultiResponse
```

Get history of snapshot of url

Get history of snapshot of any given url

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlslabApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$url = 'url_example'; // string | Url to get the history of snapshots
$last_id = 'last_id_example'; // string | lastId of event
$start_date = 'start_date_example'; // string | startDate of snapshot to fetch
$end_date = 'end_date_example'; // string | endDate of snapshot to fetch
$only_changed = 'only_changed_example'; // string | if only changed logs should be returned
$limit = 56; // int | limit of events
$body = 'body_example'; // string

try {
    $result = $apiInstance->getSnapshotsHistory($url, $last_id, $start_date, $end_date, $only_changed, $limit, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnapshotApi->getSnapshotsHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **url** | **string**| Url to get the history of snapshots | |
| **last_id** | **string**| lastId of event | [optional] |
| **start_date** | **string**| startDate of snapshot to fetch | [optional] |
| **end_date** | **string**| endDate of snapshot to fetch | [optional] |
| **only_changed** | **string**| if only changed logs should be returned | [optional] |
| **limit** | **int**| limit of events | [optional] |
| **body** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DomainDataRetrievalUrlSnapshotMultiResponse**](../Model/DomainDataRetrievalUrlSnapshotMultiResponse.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

- **Content-Type**: `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
