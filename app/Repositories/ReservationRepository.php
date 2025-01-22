<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class ReservationRepository
{
    public function reservationSearch($query)
    {
        $reservationList = DB::select('
            SELECT "users"."parentName", "reservations"."reservation_date", "reservations"."user_id"
            FROM "users"
            INNER JOIN "reservations" ON "users"."id" = "reservations"."user_id"
            WHERE "users"."parentName" LIKE :query', ['query' =>  '%' . $query . '%']);

        return $reservationList;
    }

    public function reservationDelete($id)
    {
        DB::delete('
        DELETE FROM "reservations"
        USING "users"
        WHERE "reservations"."user_id" = "users"."id"
        AND "reservations"."user_id" = :id', ['id' => $id]);
    }
}
