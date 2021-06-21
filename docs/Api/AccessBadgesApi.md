# Swagger\Client\AccessBadgesApi

All URIs are relative to *{protocol}://{host}:{port}*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAccessBadges**](AccessBadgesApi.md#deleteaccessbadges) | **DELETE** /access_badges/ | Disallow some allowed access badges on Optima-Box
[**patchAccessBadges**](AccessBadgesApi.md#patchaccessbadges) | **PATCH** /access_badges/ | Update some allowed access badges on Optima-Box
[**postAccessBadges**](AccessBadgesApi.md#postaccessbadges) | **POST** /access_badges/ | Allow some new access badges on Optima-Box
[**putAccessBadges**](AccessBadgesApi.md#putaccessbadges) | **PUT** /access_badges/ | Update some allowed access badges on Optima-Box

# **deleteAccessBadges**
> \Swagger\Client\Model\Process deleteAccessBadges($body)

Disallow some allowed access badges on Optima-Box

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccessBadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \Swagger\Client\Model\AccessBadge()); // \Swagger\Client\Model\AccessBadge[] | Access badge objects that must be disallowed on Optima-Box

try {
    $result = $apiInstance->deleteAccessBadges($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessBadgesApi->deleteAccessBadges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AccessBadge[]**](../Model/AccessBadge.md)| Access badge objects that must be disallowed on Optima-Box |

### Return type

[**\Swagger\Client\Model\Process**](../Model/Process.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchAccessBadges**
> \Swagger\Client\Model\Process patchAccessBadges($body)

Update some allowed access badges on Optima-Box

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccessBadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \Swagger\Client\Model\AccessBadge()); // \Swagger\Client\Model\AccessBadge[] | Access badge objects that must be updated on Optima-Box

try {
    $result = $apiInstance->patchAccessBadges($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessBadgesApi->patchAccessBadges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AccessBadge[]**](../Model/AccessBadge.md)| Access badge objects that must be updated on Optima-Box |

### Return type

[**\Swagger\Client\Model\Process**](../Model/Process.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAccessBadges**
> \Swagger\Client\Model\Process postAccessBadges($body)

Allow some new access badges on Optima-Box

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccessBadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \Swagger\Client\Model\AccessBadge()); // \Swagger\Client\Model\AccessBadge[] | Access badge objects that need to be allowed on Optima-Box

try {
    $result = $apiInstance->postAccessBadges($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessBadgesApi->postAccessBadges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AccessBadge[]**](../Model/AccessBadge.md)| Access badge objects that need to be allowed on Optima-Box |

### Return type

[**\Swagger\Client\Model\Process**](../Model/Process.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putAccessBadges**
> \Swagger\Client\Model\Process putAccessBadges($body)

Update some allowed access badges on Optima-Box

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AccessBadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = array(new \Swagger\Client\Model\AccessBadge()); // \Swagger\Client\Model\AccessBadge[] | Access badge objects that must be updated on Optima-Box

try {
    $result = $apiInstance->putAccessBadges($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessBadgesApi->putAccessBadges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AccessBadge[]**](../Model/AccessBadge.md)| Access badge objects that must be updated on Optima-Box |

### Return type

[**\Swagger\Client\Model\Process**](../Model/Process.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

