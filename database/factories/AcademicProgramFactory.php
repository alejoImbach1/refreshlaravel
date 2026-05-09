<?php

namespace Database\Factories;

use App\Models\Enums\AcademicProgramLevel;
use Illuminate\Database\Eloquent\Factories\Factory;

class AcademicProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->words(rand(3,5),true),
            'degree_title' => fake()->unique()->words(rand(3,5),true),
            'academic_level' => fake()->randomElement(AcademicProgramLevel::cases()),
        ];
    }
}
