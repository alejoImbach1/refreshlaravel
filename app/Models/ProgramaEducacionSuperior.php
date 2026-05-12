<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
#[Fillable([
    'codigo_snies_del_programa',
    'nombre_del_programa',
    'titulo_otorgado',
    'estado_programa',
    'reconocimiento_del_ministerio',
    'nivel_academico',
    'modalidad',
    'codigo_ies',
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
            'codigo_snies_del_programa' => 'integer',
            'codigo_ies' => 'integer',
        ];
    }

    public function institucionEducacionSuperior(): BelongsTo
    {
        return $this->belongsTo(InstitucionEducacionSuperior::class, 'codigo_ies','codigo_institucion');
    }

    public function academicBackgrounds(): HasMany
    {
        return $this->hasMany(AcademicBackground::class, 'programa_ies_id');
    }
}
