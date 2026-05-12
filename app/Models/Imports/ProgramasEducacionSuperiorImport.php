<?php

namespace App\Models\Imports;

use App\Models\ProgramaEducacionSuperior;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ProgramasEducacionSuperiorImport implements ToModel, WithStartRow, WithBatchInserts, WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ProgramaEducacionSuperior([
            'codigo_ies' => $row[1],
            'codigo_snies_del_programa' => $row[7],
            'nombre_del_programa' => $row[9],
            'titulo_otorgado' => $row[10],
            'estado_programa' => $row[11],
            'reconocimiento_del_ministerio' => $row[14],
            'nivel_academico' => $row[25],
            'modalidad' => $row[27],
        ]);
    }

    public function startRow(): int
    {
        return 2;
    }

    public function batchSize(): int
    {
        return 1000;
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
