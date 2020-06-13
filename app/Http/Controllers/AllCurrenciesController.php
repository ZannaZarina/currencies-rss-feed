<?php

namespace App\Http\Controllers;

use App\Currency;
use SebastianBergmann\CodeCoverage\Report\PHP;
use willvincent\Feeds\Facades\FeedsFacade as Feeds;
use Carbon\Carbon;

class AllCurrenciesController extends Controller
{
    public function __invoke()
    {
         Currency::truncate();

        $items = Feeds::make('https://www.bank.lv/vk/ecb_rss.xml')->get_items();

        foreach ($items as $item) {
            $description = explode(' ', $item->get_description());

            $date = $item->get_date();
            $dateFormat = date('Y-m-d' ,strtotime($date));

            for ($i = 0; $i < count($description) - 1; $i += 2) {
                Currency::create([
                    'currency' => $description[$i],
                    'rate' => $description[$i + 1],
                    'date' => $dateFormat
                ]);
            }
        }

        $lastDate = $items[0]->get_date();
        $lastDateOfUpdate = date('Y-m-d', strtotime($lastDate));
        $day = Carbon::today()->format('Y-m-d');

        $x = 0;
        while ($lastDateOfUpdate !== $day)
        {
            $day = Carbon::today()->subDays($x++)->format('Y-m-d');
        }
        $allCurrencies = Currency::OneDayRates($day)->paginate(15);

        return view('home', ['allCurrencies' => $allCurrencies]);
    }


}
