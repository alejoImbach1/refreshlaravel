<?php

namespace App\Models\Imports;

use App\Models\DepartamentoGeografico;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DepartamentosGeograficosImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    
    public function model(array $row)
    {
        return new DepartamentoGeografico([
            'codigo_departamento' => $row[0],
            'nombre' => $row[1],
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
