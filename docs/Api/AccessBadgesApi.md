# OptimaBridge\AccessBadgesApi

All URIs are relative to http://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAccessBadges()**](AccessBadgesApi.md#deleteAccessBadges) | **DELETE** /access_badges/ | Disallow some allowed access badges on Optima-Box
[**patchAccessBadges()**](AccessBadgesApi.md#patchAccessBadges) | **PATCH** /access_badges/ | Update some allowed access badges on Optima-Box
[**postAccessBadges()**](AccessBadgesApi.md#postAccessBadges) | **POST** /access_badges/ | Allow some new access badges on Optima-Box
[**putAccessBadges()**](AccessBadgesApi.md#putAccessBadges) | **PUT** /access_badges/ | Update some allowed access badges on Optima-Box


## `deleteAccessBadges()`

```php
deleteAccessBadges($access_badge): \OptimaBridge\Model\Process
```

Disallow some allowed access badges on Optima-Box

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OptimaBridge\Api\AccessBadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_badge = array(new \OptimaBridge\Model\AccessBadge()); // \OptimaBridge\Model\AccessBadge[] | Access badge objects that must be disallowed on Optima-Box

try {
    $result = $apiInstance->deleteAccessBadges($access_badge);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessBadgesApi->deleteAccessBadges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_badge** | [**\OptimaBridge\Model\AccessBadge[]**](../Model/AccessBadge.md)| Access badge objects that must be disallowed on Optima-Box |

### Return type

[**\OptimaBridge\Model\Process**](../Model/Process.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchAccessBadges()`

```php
patchAccessBadges($access_badge): \OptimaBridge\Model\Process
```

Update some allowed access badges on Optima-Box

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OptimaBridge\Api\AccessBadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_badge = array(new \OptimaBridge\Model\AccessBadge()); // \OptimaBridge\Model\AccessBadge[] | Access badge objects that must be updated on Optima-Box

try {
    $result = $apiInstance->patchAccessBadges($access_badge);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessBadgesApi->patchAccessBadges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_badge** | [**\OptimaBridge\Model\AccessBadge[]**](../Model/AccessBadge.md)| Access badge objects that must be updated on Optima-Box |

### Return type

[**\OptimaBridge\Model\Process**](../Model/Process.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAccessBadges()`

```php
postAccessBadges($access_badge): \OptimaBridge\Model\Process
```

Allow some new access badges on Optima-Box

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OptimaBridge\Api\AccessBadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_badge = array(new \OptimaBridge\Model\AccessBadge()); // \OptimaBridge\Model\AccessBadge[] | Access badge objects that need to be allowed on Optima-Box

try {
    $result = $apiInstance->postAccessBadges($access_badge);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessBadgesApi->postAccessBadges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_badge** | [**\OptimaBridge\Model\AccessBadge[]**](../Model/AccessBadge.md)| Access badge objects that need to be allowed on Optima-Box |

### Return type

[**\OptimaBridge\Model\Process**](../Model/Process.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putAccessBadges()`

```php
putAccessBadges($access_badge): \OptimaBridge\Model\Process
```

Update some allowed access badges on Optima-Box

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OptimaBridge\Api\AccessBadgesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_badge = array(new \OptimaBridge\Model\AccessBadge()); // \OptimaBridge\Model\AccessBadge[] | Access badge objects that must be updated on Optima-Box

try {
    $result = $apiInstance->putAccessBadges($access_badge);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessBadgesApi->putAccessBadges: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_badge** | [**\OptimaBridge\Model\AccessBadge[]**](../Model/AccessBadge.md)| Access badge objects that must be updated on Optima-Box |

### Return type

[**\OptimaBridge\Model\Process**](../Model/Process.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
