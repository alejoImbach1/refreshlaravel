<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
#[Fillable([
    'codigo_institucion',
    'nombre_institucion',
    'estado',
    'nit',
    'departamento_domicilio',
    'municipio_domicilio',
    'direccion_domicilio',
    'telefono_domicilio',
])]

/*
Vinculo a la tabla 'instituciones_educacion_superior' en la base de datos.
timestamps se establece en false para indicar que no se deben gestionar automáticamente los campos de fecha de creación y actualización
 */

#[Table(
    'instituciones_educacion_superior',
    timestamps: false,
)]

class InstitucionEducacionSuperior extends Model
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
            'codigo_institucion' => 'integer',
        ];
    }

    public function programasEducacionSuperior(): HasMany
    {
        return $this->hasMany(ProgramaEducacionSuperior::class, 'codigo_ies','codigo_institucion');
    }
}
