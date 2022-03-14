<?php

/**
* ExchangeRatesAPI Config
* @package Bryanjamesdelaluya\ExchangeRatesAPI
* @author Bryan James Dela Luya
**/

return [
    'access_key' => env('EXCHANGERATESAPI_ACCESS_KEY'),
    'base_url' => env('EXCHANGERATESAPI_BASE_URL'),
    'currencies' => [ 'USD', 'EUR', 'JPY', 'GBP', 'AUD', 'CAD', 'CHF', 'CNY', 'SEK', 'NZD']
];