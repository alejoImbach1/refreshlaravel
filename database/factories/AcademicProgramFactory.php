<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AcademicProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'degree_title' => fake()->regexify('[A-Za-z0-9]{100}'),
            'academic_level' => fake()->randomElement(["PRIMARIA","BASICA","MEDIA","PREGRADO","POSGRADO"]),
        ];
    }
}
