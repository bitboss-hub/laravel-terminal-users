# Laravel Terminal users

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bitboss-hub/laravel-terminal-users.svg?style=flat-square)](https://packagist.org/packages/bitboss-hub/laravel-terminal-users)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/bitboss-hub/laravel-terminal-users/run-tests?label=tests)](https://github.com/bitboss-hub/laravel-terminal-users/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/bitboss-hub/laravel-terminal-users/Check%20&%20fix%20styling?label=code%20style)](https://github.com/bitboss-hub/laravel-terminal-users/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)

This package provides some functionalities to manage your users from laravel artisan terminal

## Installation

You can install the package via composer:

```bash
composer require bitboss-hub/laravel-terminal-users
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="manage-terminal-users-config"
```

This is the contents of the published config file:

```php
   return [

    /**
     * With field to check when the user can prompt. Ex: email, id
     */
    'field_to_check' => 'email',

    /**
     * Which field to update. Ex: password
     */
    'field_to_update' => 'password',

    /**
     * Should the password be encrypted? Default value: hash. Possible values: plain
     */
    'hash' => 'hash',

    /**
     * Which is the authenticable model? If null, we get it from the auth configuration
     */
    'model' => null,

    /**
     * Express optional password validation using Laravel Validation syntax
     */
    'validation' => null
];
```

## Usage

```php
> php artisan bitboss:manage-users
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Riccardo Barbotti](https://github.com/bitboss)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
