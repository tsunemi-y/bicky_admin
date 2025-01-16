<?php

namespace App\Services;

use App\Repositories\SalesRepository;

class ChartService
{
    protected $salesRepository;

    public function __construct(SalesRepository $salesRepository)
    {
        $this->salesRepository = $salesRepository;
    }

    public function getSalesData($year)
    {
        // リポジトリを使用してデータを取得
        $salesData = $this->salesRepository->getAllSales($year);
        
        return $salesData;
    }

    public function extractMonthAndSales($salesData)
    {
        $months = [];
        $totalSales = [];

        foreach ($salesData as $entry) {
            $months[] = $entry->month;
            $totalSales[] = $entry->total_sales;
        }

        return [$months, $totalSales];
    }
}
