<?php

namespace App\Models;

use App\Models\Enums\AcademicProgramLevel;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
#[Fillable([
    'name',
    'degree_title',
    'academic_level',
])]

class AcademicProgram extends Model
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
            'academic_level' => AcademicProgramLevel::class,
        ];
    }

    /**
     * Relaciones
     */
    public function academicBackgrounds(): HasMany
    {
        return $this->hasMany(AcademicBackground::class);
    }

    public function academicInstitutions(): BelongsToMany
    {
        return $this->belongsToMany(AcademicInstitution::class);
    }
}
