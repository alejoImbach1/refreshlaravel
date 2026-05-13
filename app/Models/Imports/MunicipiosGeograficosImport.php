<?php

namespace App\Models\Imports;

use App\Models\MunicipioGeografico;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class MunicipiosGeograficosImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        return new MunicipioGeografico([
            'codigo_municipio' => $row[0],
            'nombre' => $row[1],
            'codigo_departamento' => $row[2],
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
