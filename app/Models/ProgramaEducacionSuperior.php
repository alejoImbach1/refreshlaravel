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
    'codigo_sines_del_programa',
        'nombre del programa',
        'titulo_otorgado',
        'estado_programa',
        'reconocimiento_del_ministerio',
        'nivel_academico',
        'modalidad',
        'institucion_educacion_superior_id',
])]

/*
Vinculo a la tabla 'programas_educacion_superior' en la base de datos.
timestamps se establece en false para indicar que no se deben gestionar automáticamente los campos de fecha de creación y actualización
 */

#[Table(
    'programas_educacion_superior',
    timestamps: false,
)]

class ProgramaEducacionSuperior extends Model
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
            'codigo_sines_del_programa' => 'integer',
            'institucion_educacion_superior_id' => 'integer',
        ];
    }

    public function institucionEducacionSuperior(): BelongsTo
    {
        return $this->belongsTo(InstitucionEducacionSuperior::class);
    }
}
