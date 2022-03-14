<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bryanjamesdelaluya\ExchangeRatesAPI\ExchangeRatesAPI;

/**
* Class ExchangeRatesAPIController
* @package App\Http\API\Controllers
* @author Bryan James Dela Luya
**/

class ExchangeRatesAPIController extends Controller
{
    public function fetchRates(Request $request, $code) 
    {
        $baseRate = $request->code;
        return ExchangeRatesAPI::fetch($baseRate)->rates[$code];
    }
}