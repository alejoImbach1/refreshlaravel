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
    'codigo_departamento',
    'nombre',
])]

/*
Vinculo a la tabla 'departamentos_geograficos' en la base de datos.
timestamps se establece en false para indicar que no se deben gestionar automáticamente los campos de fecha de creación y actualización
 */

#[Table(
    'departamentos_geograficos',
    timestamps: false,
)]

class DepartamentoGeografico extends Model
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
            'codigo_departamento' => 'integer',
        ];
    }

    public function municipios(): HasMany
    {
        return $this->hasMany(MunicipioGeografico::class, 'codigo_departamento', 'codigo_departamento');
    }
}
