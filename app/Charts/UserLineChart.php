<?php

// declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use App\User;

class UserLineChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $users = User::select(\DB::raw("COUNT(*) as count"))
                 ->whereYear('created_at', '2020')
                 ->groupBy(\DB::raw("Month(created_at)"))
                 ->pluck('count');
        return Chartisan::build()
               ->labels(['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月'])
               ->dataset('使用者圖表', $users->toArray());
    }
}