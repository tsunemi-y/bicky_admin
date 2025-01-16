<?php

namespace App\Repositories;

use App\Models\Sale;
use Illuminate\Support\Facades\DB;

class SalesRepository
{
    public function getAllSales($year)
    {
        $salesData = DB::select('
            SELECT 
                TO_CHAR(reservation_date, \'MM\') AS month,
                SUM(CAST(users.fee AS NUMERIC)) AS total_sales
            FROM reservations
            INNER JOIN users ON reservations.user_id = users.id
            WHERE TO_CHAR(reservation_date, \'YYYY\') = :year
            GROUP BY TO_CHAR(reservation_date, \'MM\')
        ', ['year' => $year]);
        
        return $salesData;
    }
}
