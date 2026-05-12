<?php

namespace Database\Seeders;

use App\Models\InstitucionEducacionSuperior;
use Illuminate\Database\Seeder;

class InstitucionEducacionSuperiorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InstitucionEducacionSuperior::factory()->count(5)->create();
    }
}
