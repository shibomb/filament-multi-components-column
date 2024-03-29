# This repository will no longer be maintained.
You can use [Filament Tables Stack](https://filamentphp.com/docs/3.x/tables/layout#collapsible-content).

---

# Filament MultiComponents Column

[![Latest Version on Packagist](https://img.shields.io/packagist/v/shibomb/filament-multi-components-column.svg?style=flat-square)](https://packagist.org/packages/shibomb/filament-multi-components-column)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/shibomb/filament-multi-components-column/php-cs-fixer.yml?branch=main&style=flat-square)](https://github.com/shibomb/filament-multi-components-column/actions/workflows/php-cs-fixer.yml?query=branch%3Amain++)
[![Total Downloads](https://img.shields.io/packagist/dt/shibomb/filament-multi-components-column.svg?style=flat-square)](https://packagist.org/packages/shibomb/filament-multi-components-column)

A Simple Mutli Components Column for Filament Table.

![](./art/screen1.png)

## Filament Admin Panel

This package is tailored for [Filament Admin Panel](https://filamentphp.com/).

Make sure you have installed the admin panel before you continue with the installation. You can check the [documentation here](https://filamentphp.com/docs/admin)

## Supported Versions

PHP: `8.0`

Laravel: `8` & `9`

## Installation

You can install the package via composer:

```bash
composer require shibomb/filament-multi-components-column
php artisan filament-multi-components-column:install
```

### Placing components horizontally in a single column

```php
use Shibomb\FilamentMultiComponentColumn\Components\MultiComponentsColumn;

class FooBarResource extends Resource
{
    :
    public static function table(Table $table): Table
    {
        :
        return $table
            ->columns([
                MultiComponentsColumn::make('foo')
                    ->components([
                        Tables\Columns\TextColumn::make('foo'),
                        Tables\Columns\TextColumn::make('bar')
                    ]),
        :
```

### Placing components verticaly in a single column

```php
                MultiComponentsColumn::make('foo')
                    ->components([
                        Tables\Columns\TextColumn::make('foo'),
                        Tables\Columns\TextColumn::make('bar')
                    ])
                    ->verticaly(),
```

### Override ClassNames

```php
                MultiComponentsColumn::make('foo')
                    ->components([
                        Tables\Columns\TextColumn::make('foo'),
                        Tables\Columns\TextColumn::make('bar')
                    ])
                    ->classNames('your-original-class'),
```

### Append ClassNames

```php
                MultiComponentsColumn::make('foo')
                    ->components([
                        Tables\Columns\TextColumn::make('foo'),
                        Tables\Columns\TextColumn::make('bar')
                    ])
                    ->appendClassNames('rounded-lg bg-primary-500'),
```

Note: If calling `verticaly()`, `appendClassNames()` must be called after `verticaly()`.

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

-   [shibomb](https://github.com/shibomb)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
