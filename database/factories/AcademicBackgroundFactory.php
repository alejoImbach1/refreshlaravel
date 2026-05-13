<?php

namespace Database\Factories;

use App\Models\Colegio;
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
            // 'programa_ies_id' => ProgramaEducacionSuperior::all()->random()->id,
            'acad_bgable_type' => fake()->randomElement(['App\Models\ProgramaEducacionSuperior', 'App\Models\Colegio']), // Reemplaza 'OtherModel' con el nombre de otro modelo relacionado
            'acad_bgable_id' => function (array $attributes) {
                if ($attributes['acad_bgable_type'] === 'App\Models\ProgramaEducacionSuperior') {
                    return ProgramaEducacionSuperior::all()->random()->id;
                } else if ($attributes['acad_bgable_type'] === 'App\Models\Colegio') {
                    return Colegio::all()->random()->id;
                } else {
                    // Aquí puedes agregar lógica para obtener un ID de otro modelo relacionado si es necesario
                    return null; // O algún valor predeterminado
                }
            },
        ];
    }
}
