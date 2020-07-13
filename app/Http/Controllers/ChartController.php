<?php

namespace App\Http\Controllers;

use App\Charts\UserLineChart;

class ChartController extends Controller
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function chartLine()
    {
        return view('chart-line');
    }
}
