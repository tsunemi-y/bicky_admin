<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    protected $table = 'reservations';

    protected $fillable = [
        'user_id',
        'reservation_date',
        'reservation_time',
        'end_time',
    ];

    protected $dates = [
        'reservation_date',
        'reservation_time',
        'end_time',
        'created_at',
        'updated_at',
    ];
}