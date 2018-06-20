# Laravel Recursive Collection

Convert nested arrays, associative, and multidimensional arrays into nested collections.

## Install

Install using composer.

```bash
composer require daikazu/laravel-recursive-collection
```

## Setup
NOTE This package supports Laravel 5.5 auto-discovery, so you can skip the setup if you are using 5.5 and above.

And add the service provider in `config/app.php`:
```php
Daikazu\Laravel\RecursiveCollectionServiceProvider::class,
```

## Usage

```php
$data = [
    "foo" => "bar",
    "a"   => [1, 2, 3],
    "b"   => [
        [1, 2, 3],
        [
            "4" => "",
            "5" => "",
            "3" => "",
        ],
    ],
];

$collection = (new Collection($data))->recursive();
$collection = collect($data)->recursive();
```