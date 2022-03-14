# exchangeratesapi-laravel
Laravel wrapper package for Exchange Rates API

## Installation
1. run this to terminal
```
composer require bryanjamesdelaluya/exchangeratesapi
```
2. add this to .env
```
EXCHANGERATESAPI_ACCESS_KEY=XXXXXXXXXXXXXXXX
EXCHANGERATESAPI_BASE_URL=https://api.exchangeratesapi.io/latest
```
3. run this to terminal
```
php artisan vendor:publish --provider="Bryanjamesdelaluya\ExchangeRatesAPI\ExchangeRatesAPIServiceProvider"
```

## Usage
- Sample code at app\Http\Controllers\API\ExchangeRatesAPIController.php
