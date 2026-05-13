<?php

namespace App\Models\Imports;

use App\Models\Colegio;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithStartRow;

class ColegiosImport implements ToModel, WithStartRow, WithBatchInserts, WithChunkReading
{
    /**
     * @return Model|null
     */
    public function model(array $row)
    {
        return new Colegio([
            // 'codigo_establecimiento' => $row[6],
            'nombre_establecimiento' => $row[7],
            'nombre_departamento' => $row[3],
            'nombre_municipio' => $row[5],
            'zona' => $row[8],
            'nombre_rector' => $row[11],
            'especialidad' => $row[19],
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
