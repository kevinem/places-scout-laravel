# Places Scout Laravel 5 

[![Latest Stable Version](https://poser.pugx.org/kevinem/places-scout-laravel/v/stable?format=flat-square)](https://packagist.org/packages/kevinem/places-scout-laravel)
[![License](https://poser.pugx.org/kevinem/places-scout-laravel/license?format=flat-square)](https://packagist.org/packages/kevinem/places-scout-laravel)

The Places Scout API is a highly scalable SAAS platform based on the popular Service Stack open source solution for 
high performance REST web services, and can deliver a wide range of valuable SEO data for enterprise level clients.

## Install

You can pull in the package via composer:
``` bash
$ composer require kevinem/places-scout-laravel
```

## Configuration

After installing the package, register the `KevinEm\PlacesScoutLaravel\PlacesScoutLaravelServiceProvider`
in your `config/app.php` configuration file:

```php
'providers' => [
    // Other service providers...

    KevinEm\PlacesScoutLaravel\PlacesScoutLaravelServiceProvider::class,
],
```

Also, you can add the `PlacesScoutLaravel` facade to the `aliases` array in your `config/app.php` configuration file:

```php
'aliases' => [
    // Other facades...
    
    'PlacesScoutLaravel' => KevinEm\PlacesScoutLaravel\Facades\PlacesScoutLaravel::class,
],
```

To publish the config using the following command:

```php
$ php artisan vendor:publish
```

Add your credentials to your `.env` file:

```
PLACES_SCOUT_USERNAME=
PLACES_SCOUT_PASSWORD=
```

## Documentation

[documentation](https://apihost1.placesscout.com/documentation/index.html)

## Example Usage

```php
$clients = PlacesScoutLaravel::clients()->lists();

$rankingReports = PlacesScoutLaravel::rankingReports()->lists();

$run = PlacesScoutLaravel::rankingReports()->getRun('7Qs0xGHWuE', '53mM466');
```

## License 

The MIT License (MIT)
Copyright (c) 2016 Kevin Em

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
documentation files (the "Software"), to deal in the Software without restriction, including without limitation
the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software,
and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of
the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED
TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF
CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS
IN THE SOFTWARE.
