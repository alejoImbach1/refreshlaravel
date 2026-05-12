<?php

namespace Database\Seeders;

use App\Models\Imports\ProgramasEducacionSuperiorImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class ProgramaEducacionSuperiorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Excel::import(new ProgramasEducacionSuperiorImport, storage_path('app\\private\\models\\imports\\programas_educacion_superior.csv'));

    }
}
