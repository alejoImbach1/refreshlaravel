<?php

namespace Database\Seeders;

use App\Models\Imports\InstitucionesEducacionSuperiorImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class InstitucionEducacionSuperiorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Excel::import(new InstitucionesEducacionSuperiorImport, storage_path('app\\private\\models\\imports\\instituciones_educacion_superior.csv'));
    }
}
