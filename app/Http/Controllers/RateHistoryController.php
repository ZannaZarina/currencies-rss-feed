<?php

namespace App\Http\Controllers;

use App\Currency;

class RateHistoryController extends Controller
{
    public function __invoke(Currency $currency)
    {
        $currencyRates = Currency::RateHistory($currency->currency)->get();

        return view('history', [
            'currencyRates' => $currencyRates,
        ]);
    }
}
