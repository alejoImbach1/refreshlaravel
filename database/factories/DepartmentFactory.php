<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'code' => fake()->unique()->regexify('[A-Za-z0-9]{15}'),
            'name' => fake()->unique()->words(rand(1,3),true),
            'physical_location' => fake()->words(rand(1,3),true),
        ];
    }
}
