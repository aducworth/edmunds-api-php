# edmunds-api-php
PHP library for the Edmunds Api

Overview
------------

The library has methods to recieve data from the API.

Please read the [Edmunds API documentation](http://developer.edmunds.com/api-documentation/overview/) to see what endpoints are available.

There is a generic EdmundsApi class included that can work for any v1 or v2 calls, and there is a VehicleApi class that has a few methods available, but is in progress.

Installation
------------

### With Composer

```
$ composer require aducworth/edmunds-api-php
```

**Or**

Add `aducworth/edmunds-api-php` to your `composer.json`:

``` json
{
    "require" : {
        "aducworth/edmunds-api-php" : "1.0"
    }
}
```
