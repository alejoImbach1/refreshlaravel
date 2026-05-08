<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
#[Fillable([
    'status',
    'starting_date',
    'finishing_date',
    'person_id',
    'academic_program_id',
])]

class AcademicBackground extends Model
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
            'starting_date' => 'date',
            'finishing_date' => 'date',
            'person_id' => 'integer',
            'academic_program_id' => 'integer',
        ];
    }

    
    /**
     * Relaciones
     */

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    public function academicProgram(): BelongsTo
    {
        return $this->belongsTo(AcademicProgram::class);
    }
}
