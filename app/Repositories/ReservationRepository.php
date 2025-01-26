<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class ReservationRepository
{
    public function reservationSearch($query)
    {
        $reservationList = DB::select('
            SELECT "users"."parentName", "reservations"."reservation_date", "reservations"."id"
            FROM "users"
            INNER JOIN "reservations" ON "users"."id" = "reservations"."user_id"
            WHERE "users"."parentName" LIKE :query', ['query' =>  '%' . $query . '%']);

        return $reservationList;
    }

    public function reservationDelete($id)
    {
        DB::delete('
        DELETE FROM "reservations"
        WHERE "reservations"."id" = :id', ['id' => $id]);
    }
}
