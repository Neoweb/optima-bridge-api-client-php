# optima-bridge-client

No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/Neoweb/optima-bridge-api-client-php.git"
    }
  ],
  "require": {
    "neoweb/optima-bridge-api-client-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/optima-bridge-client/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *http://localhost:8080*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccessBadgesApi* | [**deleteAccessBadges**](docs/Api/AccessBadgesApi.md#deleteaccessbadges) | **DELETE** /access_badges/ | Disallow some allowed access badges on Optima-Box
*AccessBadgesApi* | [**patchAccessBadges**](docs/Api/AccessBadgesApi.md#patchaccessbadges) | **PATCH** /access_badges/ | Update some allowed access badges on Optima-Box
*AccessBadgesApi* | [**postAccessBadges**](docs/Api/AccessBadgesApi.md#postaccessbadges) | **POST** /access_badges/ | Allow some new access badges on Optima-Box
*AccessBadgesApi* | [**putAccessBadges**](docs/Api/AccessBadgesApi.md#putaccessbadges) | **PUT** /access_badges/ | Update some allowed access badges on Optima-Box

## Models

- [AccessBadge](docs/Model/AccessBadge.md)
- [Company](docs/Model/Company.md)
- [Owner](docs/Model/Owner.md)
- [Person](docs/Model/Person.md)
- [Process](docs/Model/Process.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

quentin.guerin@neoweb.fr

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
