<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AttendeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'performances_id' => \App\Models\Performances::factory(),
            'TicketNumber' => $this->faker->uuid,
            'AttendeeName' => $this->faker->name,
            'Age' => $this->faker->numberBetween(18, 99),
            'ContactInfo' => $this->faker->email,
        ];
    }
}
