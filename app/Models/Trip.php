<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trip extends Model
{
        use HasFactory;

    protected $fillable = [
    'type',
    'origin',
    'destination',
    'departure_time',
    'arrival_time',
    'price',
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

}
