<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ReservationController;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/reservation', function(){
    return view('dashboard.reservation');
});

Route::get('/chart/sales', [ChartController::class, 'sales'])->name('chart.sales');

Route::get('/chart/registration', [ChartController::class, 'registration'])->name('chart.registration');

Route::get('/reservation/show', [ReservationController::class, 'show'])
    ->name('reservation.show');
Route::delete('/reservation/delete{id}', [ReservationController::class, 'delete'])
    ->name('reservation.delete');
