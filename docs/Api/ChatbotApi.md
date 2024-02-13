# OpenAPI\Client\ChatbotApi

All URIs are relative to https://api.urlslab.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createChatbot()**](ChatbotApi.md#createChatbot) | **PUT** /v1/chatbots | Create chatbot |
| [**createChatbotSession()**](ChatbotApi.md#createChatbotSession) | **PUT** /v1/chatbots/sessions/{userChatbotId} | Create chatbot session |
| [**deleteChatbot()**](ChatbotApi.md#deleteChatbot) | **DELETE** /v1/chatbots/{id} | Delete chatbot |
| [**deleteChatbotSession()**](ChatbotApi.md#deleteChatbotSession) | **DELETE** /v1/chatbots/sessions/{chatbotId}/{sessionId} | Delete chatbot session |
| [**getChatbot()**](ChatbotApi.md#getChatbot) | **GET** /v1/chatbots/{id} | Get chatbot by id |
| [**getChatbotSessionConversation()**](ChatbotApi.md#getChatbotSessionConversation) | **GET** /v1/chatbots/conversations/sessions/{chatbotId}/{sessionId} | Get chatbot conversation |
| [**getChatbotSessionSources()**](ChatbotApi.md#getChatbotSessionSources) | **GET** /v1/chatbots/sessions/{chatbotId}/{sessionId}/sources | Get chatbot session sources |
| [**getChatbotSessions()**](ChatbotApi.md#getChatbotSessions) | **GET** /v1/chatbots/conversations/ | Get chatbot sessions |
| [**getChatbotSessionsChart()**](ChatbotApi.md#getChatbotSessionsChart) | **GET** /v1/chatbots/conversations/chart | Get chatbot sessions chart |
| [**getChatbots()**](ChatbotApi.md#getChatbots) | **GET** /v1/chatbots | Get chatbots for a user |
| [**streamChatbotSession()**](ChatbotApi.md#streamChatbotSession) | **POST** /v1/chatbots/sessions/{sessionId}/stream | Stream Chatbot Session |
| [**updateChatbot()**](ChatbotApi.md#updateChatbot) | **POST** /v1/chatbots/{id} | Update chatbot |


## `createChatbot()`

```php
createChatbot($schemas_requests_chatbot_chatbot_create): \OpenAPI\Client\Model\SchemasResponsesChatbotChatbotResponse
```

Create chatbot

create a new chatbot

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlslabApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ChatbotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$schemas_requests_chatbot_chatbot_create = new \OpenAPI\Client\Model\SchemasRequestsChatbotChatbotCreate(); // \OpenAPI\Client\Model\SchemasRequestsChatbotChatbotCreate | Chatbot to create

try {
    $result = $apiInstance->createChatbot($schemas_requests_chatbot_chatbot_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatbotApi->createChatbot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **schemas_requests_chatbot_chatbot_create** | [**\OpenAPI\Client\Model\SchemasRequestsChatbotChatbotCreate**](../Model/SchemasRequestsChatbotChatbotCreate.md)| Chatbot to create | |

### Return type

[**\OpenAPI\Client\Model\SchemasResponsesChatbotChatbotResponse**](../Model/SchemasResponsesChatbotChatbotResponse.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createChatbotSession()`

```php
createChatbotSession($user_chatbot_id): \OpenAPI\Client\Model\SchemasResponsesChatbotChatbotSessionResponse
```

Create chatbot session

create a new chatbot session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlslabApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ChatbotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_chatbot_id = 'user_chatbot_id_example'; // string

try {
    $result = $apiInstance->createChatbotSession($user_chatbot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatbotApi->createChatbotSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_chatbot_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\SchemasResponsesChatbotChatbotSessionResponse**](../Model/SchemasResponsesChatbotChatbotSessionResponse.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteChatbot()`

```php
deleteChatbot($id): \OpenAPI\Client\Model\SchemasResponsesChatbotChatbotResponse
```

Delete chatbot

delete a chatbot

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlslabApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ChatbotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->deleteChatbot($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatbotApi->deleteChatbot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\SchemasResponsesChatbotChatbotResponse**](../Model/SchemasResponsesChatbotChatbotResponse.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteChatbotSession()`

```php
deleteChatbotSession($chatbot_id, $session_id): \OpenAPI\Client\Model\SchemasExtrasCompleted
```

Delete chatbot session

delete a chatbot session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlslabApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ChatbotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string
$session_id = 'session_id_example'; // string

try {
    $result = $apiInstance->deleteChatbotSession($chatbot_id, $session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatbotApi->deleteChatbotSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chatbot_id** | **string**|  | |
| **session_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\SchemasExtrasCompleted**](../Model/SchemasExtrasCompleted.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChatbot()`

```php
getChatbot($id): \OpenAPI\Client\Model\SchemasResponsesChatbotChatbotResponse
```

Get chatbot by id

retrieve chatbot data for a given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlslabApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ChatbotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getChatbot($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatbotApi->getChatbot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\SchemasResponsesChatbotChatbotResponse**](../Model/SchemasResponsesChatbotChatbotResponse.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChatbotSessionConversation()`

```php
getChatbotSessionConversation($chatbot_id, $session_id): \OpenAPI\Client\Model\SchemasResponsesChatbotChatbotConversationMessageResponse
```

Get chatbot conversation

retrieve chatbot conversation for a given session id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlslabApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ChatbotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string
$session_id = 'session_id_example'; // string

try {
    $result = $apiInstance->getChatbotSessionConversation($chatbot_id, $session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatbotApi->getChatbotSessionConversation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chatbot_id** | **string**|  | |
| **session_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\SchemasResponsesChatbotChatbotConversationMessageResponse**](../Model/SchemasResponsesChatbotChatbotConversationMessageResponse.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChatbotSessionSources()`

```php
getChatbotSessionSources($chatbot_id, $session_id): \OpenAPI\Client\Model\SchemasResponsesChatbotChatbotSessionSource
```

Get chatbot session sources

retrieve chatbot session sources for a given id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlslabApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ChatbotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chatbot_id = 'chatbot_id_example'; // string
$session_id = 'session_id_example'; // string

try {
    $result = $apiInstance->getChatbotSessionSources($chatbot_id, $session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatbotApi->getChatbotSessionSources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chatbot_id** | **string**|  | |
| **session_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\SchemasResponsesChatbotChatbotSessionSource**](../Model/SchemasResponsesChatbotChatbotSessionSource.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChatbotSessions()`

```php
getChatbotSessions($pagination, $chatbot_id): \OpenAPI\Client\Model\SchemasResponsesChatbotChatbotSessionOverviewResponse
```

Get chatbot sessions

retrieve chatbot sessions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlslabApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ChatbotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pagination = new \OpenAPI\Client\Model\DomainPaginationPagination(); // DomainPaginationPagination
$chatbot_id = 'chatbot_id_example'; // string

try {
    $result = $apiInstance->getChatbotSessions($pagination, $chatbot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatbotApi->getChatbotSessions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pagination** | [**DomainPaginationPagination**](../Model/.md)|  | |
| **chatbot_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SchemasResponsesChatbotChatbotSessionOverviewResponse**](../Model/SchemasResponsesChatbotChatbotSessionOverviewResponse.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChatbotSessionsChart()`

```php
getChatbotSessionsChart($date_range, $chatbot_id): \OpenAPI\Client\Model\SchemasExtrasChartsChartData
```

Get chatbot sessions chart

retrieve chatbot sessions chart

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlslabApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ChatbotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_range = new \OpenAPI\Client\Model\DomainPaginationDateRange(); // DomainPaginationDateRange
$chatbot_id = 'chatbot_id_example'; // string

try {
    $result = $apiInstance->getChatbotSessionsChart($date_range, $chatbot_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatbotApi->getChatbotSessionsChart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **date_range** | [**DomainPaginationDateRange**](../Model/.md)|  | |
| **chatbot_id** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SchemasExtrasChartsChartData**](../Model/SchemasExtrasChartsChartData.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChatbots()`

```php
getChatbots(): \OpenAPI\Client\Model\SchemasResponsesChatbotChatbotResponse
```

Get chatbots for a user

retrieve chatbots data for a given user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlslabApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ChatbotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getChatbots();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatbotApi->getChatbots: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\SchemasResponsesChatbotChatbotResponse**](../Model/SchemasResponsesChatbotChatbotResponse.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `streamChatbotSession()`

```php
streamChatbotSession($session_id, $schemas_requests_chatbot_chat_completion_request): string
```

Stream Chatbot Session

stream chatbot session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlslabApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ChatbotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string
$schemas_requests_chatbot_chat_completion_request = new \OpenAPI\Client\Model\SchemasRequestsChatbotChatCompletionRequest(); // \OpenAPI\Client\Model\SchemasRequestsChatbotChatCompletionRequest | Chatbot session stream input data

try {
    $result = $apiInstance->streamChatbotSession($session_id, $schemas_requests_chatbot_chat_completion_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatbotApi->streamChatbotSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**|  | |
| **schemas_requests_chatbot_chat_completion_request** | [**\OpenAPI\Client\Model\SchemasRequestsChatbotChatCompletionRequest**](../Model/SchemasRequestsChatbotChatCompletionRequest.md)| Chatbot session stream input data | |

### Return type

**string**

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateChatbot()`

```php
updateChatbot($id, $schemas_requests_chatbot_chatbot_create): \OpenAPI\Client\Model\SchemasResponsesChatbotChatbotResponse
```

Update chatbot

update a chatbot

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: UrlslabApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('X-URLSLAB-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-URLSLAB-KEY', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ChatbotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$schemas_requests_chatbot_chatbot_create = new \OpenAPI\Client\Model\SchemasRequestsChatbotChatbotCreate(); // \OpenAPI\Client\Model\SchemasRequestsChatbotChatbotCreate | Chatbot to update

try {
    $result = $apiInstance->updateChatbot($id, $schemas_requests_chatbot_chatbot_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChatbotApi->updateChatbot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **schemas_requests_chatbot_chatbot_create** | [**\OpenAPI\Client\Model\SchemasRequestsChatbotChatbotCreate**](../Model/SchemasRequestsChatbotChatbotCreate.md)| Chatbot to update | |

### Return type

[**\OpenAPI\Client\Model\SchemasResponsesChatbotChatbotResponse**](../Model/SchemasResponsesChatbotChatbotResponse.md)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
