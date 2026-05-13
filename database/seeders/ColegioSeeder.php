<?php

namespace Database\Seeders;

use App\Models\Imports\ColegiosImport;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class ColegioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Excel::import(new ColegiosImport, storage_path('app\\private\\models\\imports\\colegios.csv'));
    }
}
