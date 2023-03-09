# Swagger\Client\PublicAssetsApi

All URIs are relative to *https://api.urlslab.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**loadCarouselThumbnail**](PublicAssetsApi.md#loadcarouselthumbnail) | **GET** /v1/public/screenshot/thumbnail/carousel/{bucketId} | Fetching thumbnail of carousel screenshot of url
[**loadFullPageThumbnail**](PublicAssetsApi.md#loadfullpagethumbnail) | **GET** /v1/public/screenshot/thumbnail/fullpage/{bucketId} | Fetching thumbnail of fullpage screenshot of url
[**loadImageCarousel**](PublicAssetsApi.md#loadimagecarousel) | **GET** /v1/public/screenshot/carousel/{bucketId} | Fetching carousel screenshot of url
[**loadOriginalImage**](PublicAssetsApi.md#loadoriginalimage) | **GET** /v1/public/screenshot/fullpage/{bucketId} | Fetching fullpage screenshot of url
[**loadTechnologyLogo**](PublicAssetsApi.md#loadtechnologylogo) | **GET** /v1/public/technologies/logos/{iconName} | Fetching icon logo of technology

# **loadCarouselThumbnail**
> loadCarouselThumbnail($bucket_id)

Fetching thumbnail of carousel screenshot of url

Fetching thumbnail of carousel screenshot of url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: UrlslabApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X_URLSLAB_API_KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X_URLSLAB_API_KEY', 'Bearer');

$apiInstance = new Swagger\Client\Urlslab\PublicAssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket_id = "bucket_id_example"; // string | 

try {
    $apiInstance->loadCarouselThumbnail($bucket_id);
} catch (Exception $e) {
    echo 'Exception when calling PublicAssetsApi->loadCarouselThumbnail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loadFullPageThumbnail**
> loadFullPageThumbnail($bucket_id)

Fetching thumbnail of fullpage screenshot of url

Fetching thumbnail of fullpage screenshot of url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: UrlslabApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X_URLSLAB_API_KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X_URLSLAB_API_KEY', 'Bearer');

$apiInstance = new Swagger\Client\Urlslab\PublicAssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket_id = "bucket_id_example"; // string | 

try {
    $apiInstance->loadFullPageThumbnail($bucket_id);
} catch (Exception $e) {
    echo 'Exception when calling PublicAssetsApi->loadFullPageThumbnail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loadImageCarousel**
> loadImageCarousel($bucket_id)

Fetching carousel screenshot of url

Fetching carousel screenshot of url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: UrlslabApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X_URLSLAB_API_KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X_URLSLAB_API_KEY', 'Bearer');

$apiInstance = new Swagger\Client\Urlslab\PublicAssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket_id = "bucket_id_example"; // string | 

try {
    $apiInstance->loadImageCarousel($bucket_id);
} catch (Exception $e) {
    echo 'Exception when calling PublicAssetsApi->loadImageCarousel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loadOriginalImage**
> loadOriginalImage($bucket_id)

Fetching fullpage screenshot of url

Fetching fullpage screenshot of url

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: UrlslabApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X_URLSLAB_API_KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X_URLSLAB_API_KEY', 'Bearer');

$apiInstance = new Swagger\Client\Urlslab\PublicAssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bucket_id = "bucket_id_example"; // string | 

try {
    $apiInstance->loadOriginalImage($bucket_id);
} catch (Exception $e) {
    echo 'Exception when calling PublicAssetsApi->loadOriginalImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bucket_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loadTechnologyLogo**
> loadTechnologyLogo($icon_name)

Fetching icon logo of technology

Fetching icon logo of technology

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: UrlslabApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('X_URLSLAB_API_KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X_URLSLAB_API_KEY', 'Bearer');

$apiInstance = new Swagger\Client\Urlslab\PublicAssetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$icon_name = "icon_name_example"; // string | 

try {
    $apiInstance->loadTechnologyLogo($icon_name);
} catch (Exception $e) {
    echo 'Exception when calling PublicAssetsApi->loadTechnologyLogo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **icon_name** | **string**|  |

### Return type

void (empty response body)

### Authorization

[UrlslabApiKeyAuth](../../README.md#UrlslabApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

