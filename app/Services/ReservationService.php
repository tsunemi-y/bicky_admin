<?php

namespace App\Services;

use App\Repositories\ReservationRepository;

class ReservationService
{
    protected $ReservationRepository;

    public function __construct(ReservationRepository $reservationRepository)
    {
        $this->reservationRepository = $reservationRepository;
    }

    public function getReservationList($query)
    {
        $reservationList = $this->reservationRepository->reservationSearch($query);
        return $reservationList;
    }

    public function deleteReservation($id)
    {
        $this->reservationRepository->reservationDelete($id);
    }
}
