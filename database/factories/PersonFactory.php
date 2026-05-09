<?php

namespace Database\Factories;

use App\Models\Enums\PersonGender;
use App\Models\Enums\PersonNuipType;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nuip_type' => fake()->randomElement(PersonNuipType::cases()),
            'nuip' => (string) random_int(1000000,9999999),
            'name' => fake()->name(),
            'surname' => fake()->lastName(),
            'gender' => fake()->randomElement(PersonGender::cases()),
            'birth_date' => fake()->date(),
            'email' => fake()->safeEmail(),
            'phone_number' => strval(rand(300,320)) . strval(fake()->randomNumber(7,true)),
        ];
    }
}
