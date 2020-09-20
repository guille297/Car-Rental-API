<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    protected $fillable = [
        'from_date',
        'ret_date',
        'price_booking',
        'status',
        'user_id',
        'car_id'
    ];
}
