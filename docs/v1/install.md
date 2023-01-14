---
title: Install
---

## Installation 

Take a note of the API key and add it to your .env file

```php
COMPANIES_HOUSE_KEY=
```

Via Composer

```php
composer require dcblogdev/laravel-companies-house
```

You can publish the config file with:

```php
php artisan vendor:publish --provider="Dcblogdev\CompaniesHouse\CompaniesHouseServiceProvider" --tag="config"
```

When published, the `config/companieshouse.php` config file contains:

```php
<?php

return [

    /*
    * the key is set from the Companies House to identify the application
    * https://developer.companieshouse.gov.uk/developer/applications
    */
    'key' => env('COMPANIES_HOUSE_KEY'),
];
```

## Usage

In a controller import the class:

```php 
use Dcblogdev\CompaniesHouse\Facades\CompaniesHouse;
```

In a view or closure call the facade:

```php
CompaniesHouse::get('path');
```

You call CompaniesHouse followed by `get::` this will run a GET request followed by the endpoint you want to call, for instance, to call company profile (https://developer.companieshouse.gov.uk/api/docs/company/company_number/company_number.html)

```php
CompaniesHouse::get('company/123456');
```

To make things a little easier there is also trait classes provided.

Each Trait class provides convenient methods that call the endpoints, processes the data, and returns JSON of the results.

