<?php

namespace Database\Seeders;

use App\Models\Imports\MunicipiosGeograficosImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class MunicipioGeograficoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Excel::import(new MunicipiosGeograficosImport, storage_path('app\\private\\models\\imports\\municipios_geograficos.csv'));
    }
}
