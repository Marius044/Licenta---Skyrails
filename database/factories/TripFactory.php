<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            return [
        'type' => $this->faker->randomElement(['flight', 'train']),
        'origin' => $this->faker->city(),
        'destination' => $this->faker->city(),
        'departure_time' => now()->addDays(rand(1, 5)),
        'arrival_time' => now()->addDays(rand(1, 5))->addHours(rand(2, 6)),
        'price' => $this->faker->randomFloat(2, 50, 300),
    ];
    }
}
