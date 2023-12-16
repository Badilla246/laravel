<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BandsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'BandName' => $this->faker->name,
            'Genre' => $this->faker->word,
            'CountryOfOrigin' => $this->faker->country,
            'FormationYear' => $this->faker->year,
            'AlbumsReleased' => $this->faker->numberBetween(1, 10),
        ];
    }
}
