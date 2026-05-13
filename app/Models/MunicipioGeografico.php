<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
#[Fillable([
    'codigo_municipio',
    'nombre',
    'codigo_departamento',
])]

/*
Vinculo a la tabla 'programas_educacion_superior' en la base de datos.
timestamps se establece en false para indicar que no se deben gestionar automáticamente los campos de fecha de creación y actualización
 */

#[Table(
    'municipios_geograficos',
    timestamps: false,
)]

class MunicipioGeografico extends Model
{
    use HasFactory;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'codigo_municipio' => 'integer',
            'codigo_departamento' => 'integer',
        ];
    }

    public function departamentoGeografico(): BelongsTo
    {
        return $this->belongsTo(DepartamentoGeografico::class);
    }

    public function departamentosGeografico(): BelongsTo
    {
        return $this->belongsTo(DepartamentoGeografico::class, 'codigo_departamento', 'codigo_departamento');
    }
}
