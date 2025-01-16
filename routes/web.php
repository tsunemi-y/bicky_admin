<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChartController;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/reservation', function(){
    return view('dashboard.reservation');
});

Route::get('/chart/sales', [ChartController::class, 'sales'])->name('chart.sales');
