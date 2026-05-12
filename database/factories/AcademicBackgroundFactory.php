<?php

namespace Database\Factories;

use App\Models\Enums\AcademicBackgroundStatus;
use App\Models\Person;
use App\Models\ProgramaEducacionSuperior;
use Illuminate\Database\Eloquent\Factories\Factory;

class AcademicBackgroundFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'status' => fake()->randomElement(AcademicBackgroundStatus::cases()),
            'starting_date' => fake()->date(),
            'finishing_date' => fake()->date(),
            'person_id' => Person::all()->random()->id,
            'programa_ies_id' => ProgramaEducacionSuperior::all()->random()->id,
        ];
    }
}
