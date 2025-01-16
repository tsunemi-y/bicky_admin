<?php

namespace App\Http\Controllers;

use App\Services\ChartService;

class ChartController extends Controller
{
    protected $chartService;

    public function __construct(ChartService $chartService)
    {
        $this->chartService = $chartService;
    }

    public function sales()
    {
        $year = request()->input('year', date('Y'));
        
        $salesData = $this->chartService->getSalesData($year);

        list($months, $totalSales) = $this->chartService->extractMonthAndSales($salesData);

        return view('chart.sales', compact('year', 'months', 'totalSales'));
    }
}
