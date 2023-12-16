<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PerformancesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'bands_id' => \App\Models\Bands::factory(),
            'venues_id' => \App\Models\Venues::factory(),
            'Date' => $this->faker->date,
            'Time' => $this->faker->time,
            'TicketPrice' => $this->faker->randomFloat(2, 10, 100),
        ];
    }
}
