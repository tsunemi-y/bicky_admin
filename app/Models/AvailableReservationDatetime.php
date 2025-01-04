<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AvailableReservationDatetime extends Model
{
    protected $fillable = [
        'available_date',
        'available_time',
        'fee_id',
    ];
    protected $table = 'available_reservation_datetimes';

    public $timestamps = false;

    public function fee()
    {
        return $this->belongsTo(Fee::class);
    }
}