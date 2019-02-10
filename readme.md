
# Laravel Companies House

A Laravel package for reading Companies House.

## Installation

To use Companies House an application needs creating at https://developer.companieshouse.gov.uk/developer/applications

Take a note of the API key and add it to your .env file

```
COMPANIES_HOUSE_KEY=
```

Via Composer

``` bash
$ composer require daveismyname/laravel-companies-house
```

In Laravel 5.5 the service provider will automatically get registered. In older versions of the framework just add the service provider in config/app.php file:

```
'providers' => [
    // ...
    Daveismyname\CompaniesHouse\CompaniesHouseServiceProvider::class,
];
```

You can publish the config file with:

```
php artisan vendor:publish --provider="Daveismyname\CompaniesHouse\CompaniesHouseServiceProvider" --tag="config"
```

When published, the config/companieshouse.php config file contains:

```
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

```
use Daveismyname\CompaniesHouse\Facades\CompaniesHouse;
```

In a view or closure call the facade:

```
CompaniesHouse::get('path');

```

You call CompaniesHouse followed by get:: this will run a GET request followed by the end point you want to call, for instance to call company profile (https://developer.companieshouse.gov.uk/api/docs/company/company_number/company_number.html)

```
CompaniesHouse::get('company/123456');

```

To make things a little easier there is also trait classes provided:

Each Trait class provides convinient methods that call the end points, processes the data and returns json of the results.

Search
* CompaniesHouse::search($term) - search across all indexed information. 
* CompaniesHouse::searchCompany($term) - searches companies



## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.


## Contributing

Contributions are welcome and will be fully credited.

Contributions are accepted via Pull Requests on [Github](https://github.com/daveismyname/laravel-companies-house).

## Pull Requests

- **Document any change in behaviour** - Make sure the `readme.md` and any other relevant documentation are kept up-to-date.

- **Consider our release cycle** - We try to follow [SemVer v2.0.0](http://semver.org/). Randomly breaking public APIs is not an option.

- **One pull request per feature** - If you want to do more than one thing, send multiple pull requests.

## Security

If you discover any security related issues, please email dave@daveismyname.com email instead of using the issue tracker.

## License

license. Please see the [license file](license.md) for more information.
