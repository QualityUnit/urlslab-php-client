# OpenAPI\Client\DomainsApi

All URIs are relative to https://api.urlslab.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUserDomains()**](DomainsApi.md#getUserDomains) | **GET** /v1/domains | Get Domains of a user |


## `getUserDomains()`

```php
getUserDomains($domain_name, $primary_order_id, $secondary_order_id, $limit, $sorting_field, $sorting_direction, $body): \OpenAPI\Client\Model\DomainDomainsDomainBulkResponseDTO
```

Get Domains of a user

Get Domains of a user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlslabApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DomainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$domain_name = 'domain_name_example'; // string | the domain name to search for
$primary_order_id = new \OpenAPI\Client\Model\Int(); // Int | Primary Order ID for pagination
$secondary_order_id = new \OpenAPI\Client\Model\Int(); // Int | Secondary Order ID for pagination
$limit = new \OpenAPI\Client\Model\Int(); // Int | limit of each page
$sorting_field = 'sorting_field_example'; // string | the field to sort by
$sorting_direction = 'sorting_direction_example'; // string | the direction to sort by
$body = 'body_example'; // string

try {
    $result = $apiInstance->getUserDomains($domain_name, $primary_order_id, $secondary_order_id, $limit, $sorting_field, $sorting_direction, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DomainsApi->getUserDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain_name** | **string**| the domain name to search for | [optional] |
| **primary_order_id** | [**Int**](../Model/.md)| Primary Order ID for pagination | [optional] |
| **secondary_order_id** | [**Int**](../Model/.md)| Secondary Order ID for pagination | [optional] |
| **limit** | [**Int**](../Model/.md)| limit of each page | [optional] |
| **sorting_field** | **string**| the field to sort by | [optional] |
| **sorting_direction** | **string**| the direction to sort by | [optional] |
| **body** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\DomainDomainsDomainBulkResponseDTO**](../Model/DomainDomainsDomainBulkResponseDTO.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

- **Content-Type**: `text/plain`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
