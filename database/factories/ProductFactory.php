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
            'sku' => fake()->regexify('[A-Za-z0-9]{10}'),
            'slug' => fake()->slug(),
            'name' => fake()->name(),
            'price' => fake()->randomFloat(0, 0, 9999999999.),
        ];
    }
}
