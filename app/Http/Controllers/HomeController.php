<?php

namespace App\Http\Controllers;

use App\Models\AreaChart;
use App\Models\Information;
use App\Models\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
//        $chart =collect();
//        $chart->put('labels',AreaChart::query()->first()->labels);
//        $chart->put('datasets',AreaChart::query()->first()->datasets);

        return view('welcome', [
            'information' => Information::query()->first(),
            'orders' => Order::all(),
            'chart' => AreaChart::query()->first()
        ]);
    }
}
