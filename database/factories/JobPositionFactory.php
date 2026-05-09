<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JobPositionFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->words(rand(2,5),true),
        ];
    }
}
