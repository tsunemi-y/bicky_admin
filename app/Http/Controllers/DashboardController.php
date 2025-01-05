<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        \Log::debug('デバッグメッセージ');
        return view('dashboard.index');
    }
}
