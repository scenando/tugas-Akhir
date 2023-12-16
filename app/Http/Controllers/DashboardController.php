<?php

namespace App\Http\Controllers;

use App\Charts\TotalChart;
use App\Models\PLE;
use App\Models\Pulsa;
use App\Models\Token;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(TotalChart $chart)
    {
        $data = PLE::latest()->first();
        // return $data;
        $pulsa = Pulsa::latest()->first();

        // return $pulsa;
        $chart = $chart->build();
        return view('Dashboard.dashboard', compact('chart', 'data', 'pulsa'));
    }

    public function cek()
    {
        return "ok";
    }
}
