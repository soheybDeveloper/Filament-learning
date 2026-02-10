<?php

namespace Database\Factories;

use App\Enums\Region;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venue>
 */
class VenueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->bothify('Venue - ##?#?'),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'postal_code' => $this->faker->postcode(),
            'region' => $this->faker->randomElement(Region::cases()),
        ];
    }
}
