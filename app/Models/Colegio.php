<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
#[Fillable([
    // 'codigo_establecimiento',
    'nombre_establecimiento',
    'nombre_departamento',
    'nombre_municipio',
    'zona',
    'nombre_rector',
    'especialidad',
])]

/*
timestamps se establece en false para indicar que no se deben gestionar automáticamente los campos de fecha de creación y actualización
 */

#[Table(
    timestamps: false,
)]

class Colegio extends Model
{
    use HasFactory;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    // protected function casts(): array
    // {
    //     return [
    //         'codigo_establecimiento' => 'integer',
    //     ];
    // }
}
