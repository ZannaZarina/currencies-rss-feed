<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'AllCurrenciesController')->name('home');
Route::get('/{currency}', 'RateHistoryController')->name('history');
