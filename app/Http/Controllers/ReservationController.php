<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\Reservation;
use App\Services\ReservationService;

class ReservationController extends Controller
{
    public function __construct(ReservationService $reservationService)
    {
        $this->reservationService = $reservationService;
    }
    public function show(Request $request)
    {
        $query = $request->input('query');
        $reservationSearch = $this->reservationService->getReservationList($query);
        return view('dashboard.reservation', compact('reservationSearch'));   
    }
}
