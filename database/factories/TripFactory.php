<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\trip>
 */
class TripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'        => fake()->name(),
            'description' => fake()->text(),
            'location'    => fake()->name(),
            'rating'      => fake()->numberBetween(1, 5),
        ];
    }
}
