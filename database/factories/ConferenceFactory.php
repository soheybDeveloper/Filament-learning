<?php

namespace Database\Factories;

use App\Enums\Region;
use App\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conference>
 */
class ConferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(),
            'start_date' => $this->faker->dateTimeBetween('now', '+6 months'),
            'end_date' => $this->faker->dateTimeBetween('+6 months', '+1 year'),
            'status' => $this->faker->randomElement(['draft', 'published', 'cancelled']),
            'venue_id' => Venue::factory(),
            'region' => $this->faker->randomElement(Region::cases()),
        ];
    }
}
