<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class ReservationRepository
{
    public function reservationSearch($query)
    {
        $reservationList = DB::select('
            SELECT "users"."childName", "reservations"."reservation_date"
            FROM "users"
            INNER JOIN "reservations" ON "users"."id" = "reservations"."user_id"
            WHERE "users"."childName" = :query', ['query' => $query]);

        return $reservationList;
    }
}
