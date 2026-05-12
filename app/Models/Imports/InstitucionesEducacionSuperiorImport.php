<?php

namespace App\Models\Imports;

use App\Models\InstitucionEducacionSuperior;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class InstitucionesEducacionSuperiorImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new InstitucionEducacionSuperior([
            'codigo_institucion' => $row[1],
            'nombre_institucion' => $row[2],
            'estado' => $row[3],
            'nit' => $row[4],
            'departamento_domicilio' => $row[9],
            'municipio_domicilio' => $row[10],
            'direccion_domicilio' => $row[11],
            'telefono_domicilio' => $row[12],
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }
}
