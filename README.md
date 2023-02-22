# Laravel query builder - order by field

[![Latest Version on Packagist](https://img.shields.io/packagist/v/oneduo/laravel-order-by-field.svg?style=flat-square)](https://packagist.org/packages/oneduo/laravel-order-by-field)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/oneduo/laravel-order-by-field/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/oneduo/laravel-order-by-field/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/oneduo/laravel-order-by-field/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/oneduo/laravel-order-by-field/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/oneduo/laravel-order-by-field.svg?style=flat-square)](https://packagist.org/packages/oneduo/laravel-order-by-field)

This package adds a `orderByField` macro on the query Builder.

## Installation

You can install the package via composer:

```bash
composer require oneduo/laravel-order-by-field
```

## Usage

```php
$keys = [42, 1, 100]
$users = User::query()
    ->whereKey($keys)
    ->orderByField('id', $keys)
    ->get();
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mikaël Popowicz](https://github.com/mikaelpopowicz)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
