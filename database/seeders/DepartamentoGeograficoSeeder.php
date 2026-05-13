<?php

namespace Database\Seeders;

use App\Models\DepartamentoGeografico;
use App\Models\Imports\DepartamentosGeograficosImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class DepartamentoGeograficoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Excel::import(new DepartamentosGeograficosImport, storage_path('app\\private\\models\\imports\\departamentos_geograficos.csv'));
    }
}
