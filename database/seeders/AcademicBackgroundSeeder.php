<?php

namespace Database\Seeders;

use App\Models\AcademicBackground;
use Illuminate\Database\Seeder;

class AcademicBackgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AcademicBackground::factory()->count(5)->create();
    }
}
