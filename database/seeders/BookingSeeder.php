<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Booking;
use App\Models\User;
use App\Models\Trip;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    $users = User::all();
    $trips = Trip::all();

    foreach ($users as $user) {
        Booking::create([
            'user_id' => $user->id,
            'trip_id' => $trips->random()->id,
            'seat_number' => 'A' . rand(1, 30),
            'status' => 'confirmed',
        ]);
    }
    }
}
