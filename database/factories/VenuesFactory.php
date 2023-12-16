<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VenuesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'VenueName' => $this->faker->company,
            'Location' => $this->faker->city . ', ' . $this->faker->country,
            'Capacity' => $this->faker->numberBetween(50, 1000),
            'ContactPerson' => $this->faker->name,
            'OpeningDate' => $this->faker->date,
        ];
    }
}
