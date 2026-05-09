<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        

        $this->call([
            PersonSeeder::class,
            UserSeeder::class,
            DepartmentSeeder::class,
            JobPositionSeeder::class,
            AcademicProgramSeeder::class,
            AcademicInstitutionSeeder::class,
            AcademicBackgroundSeeder::class,
            EmployeeSeeder::class,
            CustomerSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
