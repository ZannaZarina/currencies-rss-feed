<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = [
        'currency',
        'rate',
        'date'
    ];

    public function scopeOneDayRates($query, $oneDay)
    {
        $query->where('date', $oneDay);
    }

    public function scopeRateHistory($query, $currency)
    {
        $query->where('currency', $currency);
    }

}
