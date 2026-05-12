<?php

namespace Database\Seeders;

use App\Models\ProgramaEducacionSuperior;
use Illuminate\Database\Seeder;

class ProgramaEducacionSuperiorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProgramaEducacionSuperior::factory()->count(5)->create();
    }
}
