<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
#[Fillable([
    'code',
    'name',
    'physical_location',
])]

class Department extends Model
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

    //     ];
    // }

    /**
     * Relaciones
     */
    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class);
    }
}
