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

    public function getRegistration($year)
    {
        // リポジトリを使用してデータを取得
        $registrations = $this->salesRepository->getAllRegistration($year);
        
        return $registrations;
    }

    public function extractMonthAndRegistration($registrations)
    {
        $months = [];
        $totalRegistration = [];

        foreach ($registrations as $entry) {
            $months[] = $entry->month;
            $totalRegistration[] = $entry->total_registration;
        }

        return [$months, $totalRegistration];
    }

}