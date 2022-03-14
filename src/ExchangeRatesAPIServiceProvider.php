<?php

namespace Bryanjamesdelaluya\ExchangeRatesAPI;

use Illuminate\Support\ServiceProvider;

/**
* Class ExchangeRatesAPIServiceProvider
* @package Bryanjamesdelaluya\ExchangeRatesAPI
* @author Bryan James Dela Luya
**/

class ExchangeRatesAPIServiceProvider extends ServiceProvider
{
    public function boot() 
    {
        $this->publishes([
            __DIR__ . '/../config/exchangerates.php' => config_path('exchangerates.php'),
            __DIR__ . '/../samples/ExchangeRatesAPIController.php' => app_path('Http/Controllers/API/ExchangeRatesAPIController.php')
        ]);
    }

    public function register() 
    {
        $this->app->singleton(ExchangeRatesAPI::class, function() {
            return new ExchangeRatesAPI();
        });
    }
}