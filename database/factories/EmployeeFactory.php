<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\JobPosition;
use App\Models\Person;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'salary' => fake()->randomFloat(2, 0, 9999999999.99),
            'hiring_date' => fake()->date(),
            'job_position_id' => JobPosition::all()->random()->id,
            'person_id' => Person::all()->random()->id,
            'department_id' => Department::all()->random()->id,
        ];
    }
}
