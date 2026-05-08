<?php

namespace Database\Factories;

use App\Models\AcademicProgram;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class AcademicBackgroundFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'status' => fake()->randomElement(["FINISHED","IN_PROGRESS"]),
            'starting_date' => fake()->date(),
            'finishing_date' => fake()->date(),
            'person_id' => Person::factory(),
            'academic_program_id' => AcademicProgram::factory(),
        ];
    }
}
