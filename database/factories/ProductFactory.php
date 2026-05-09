<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'sku' => fake()->unique()->regexify('[A-Za-z0-9]{10}'),
            'slug' => fake()->unique()->slug(),
            'name' => fake()->unique()->words(rand(3,6),true),
            'price' => fake()->randomFloat(2, 0, 99999999.99),
        ];
    }
}
