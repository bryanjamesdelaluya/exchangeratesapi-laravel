<?php

namespace Bryanjamesdelaluya\ExchangeRatesAPI;

/**
* Class ExchangeRatesAPI
* @package Bryanjamesdelaluya\ExchangeRatesAPI
* @author Bryan James Dela Luya
**/

class ExchangeRatesAPI
{
    const BASE_URI = 'https://api.exchangeratesapi.io/latest';

    /**
     * Fetch latest foreign exchange rates.
     *
     * @param string $baseCurrency
     * @param array $currencies
     * @return object
     */
    public function fetch($baseCurrency = 'USD', $currencies = [])
    {
        if (empty($currencies))
            $currencies = config('exchangerates.currencies');

        $params = $this->getParameters($baseCurrency, $currencies);

        return (object) $this->httpGet(self::BASE_URI, $params);
    }

    /**
     * Format the response data.
     *
     * @param string $baseCurrency
     * @param array $currencies
     * @return \Illuminate\Support\Collection
     */
    public function rates($baseCurrency = 'USD', $currencies = [])
    {
        $response = $this->fetch($baseCurrency, $currencies);

        return collect($response->rates)->map(function ($rate, $currency) {
            return (object) [
                'rate' => $rate,
                'symbol' => getCurrencySign($currency)
            ];
        });
    }

    /**
     * Concatenate strings for later use when calling the API.
     *
     * @param string $baseCurrency
     * @param array $currencies
     * @return string
     */
    private function getParameters($baseCurrency, $currencies)
    {
        return collect([
            'access_key' => config('exchangerates.access_key'),
            'base' => $baseCurrency,
            'symbols' => implode(',', $currencies)
        ])->map(function ($value, $key) {
            return "{$key}={$value}";
        })->implode('&');
    }

    /**
     * Make a get api call.
     *
     * @param string $url
     * @param string $params
     * @return mixed
     */
    private function httpGet($url = self::BASE_URI, $params = '')
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, "{$url}?{$params}");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

        $response = curl_exec($curl);
        curl_close($curl);

        return json_decode($response, true);
    }
}