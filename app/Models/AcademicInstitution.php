<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
#[Fillable([
    'name',
    'address',
])]

class AcademicInstitution extends Model
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
    
    public function academicPrograms(): BelongsToMany
    {
        return $this->belongsToMany(AcademicProgram::class);
    }
}
