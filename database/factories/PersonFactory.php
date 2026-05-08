<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nuip_type' => fake()->randomElement(["CEDULA_CIUDADANIA","REGISTRO_CIVIL_NACIMIENTO","TARJETA_IDENTIDAD","CEDULA_EXTRANJERIA","PASAPORTE"]),
            'nuip' => fake()->regexify('[A-Za-z0-9]{10}'),
            'name' => fake()->name(),
            'surname' => fake()->regexify('[A-Za-z0-9]{80}'),
            'gender' => fake()->randomElement(["MALE","FEMALE","OTHER"]),
            'birth_date' => fake()->date(),
            'email' => fake()->safeEmail(),
            'phone_number' => fake()->phoneNumber(),
        ];
    }
}
