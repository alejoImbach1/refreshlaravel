<?php

namespace Database\Seeders;

use App\Models\AcademicInstitution;
use Illuminate\Database\Seeder;

class AcademicInstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AcademicInstitution::factory()->count(5)->create();
    }
}
