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
            'code' => fake()->regexify('[A-Za-z0-9]{15}'),
            'name' => fake()->name(),
            'physical_location' => fake()->regexify('[A-Za-z0-9]{50}'),
        ];
    }
}
