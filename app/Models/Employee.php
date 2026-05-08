<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
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
    'salary',
    'hiring_date',
    'job_position_id',
    'person_id',
    'department_id',
])]

class Employee extends Model
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
            'salary' => 'decimal:2',
            'hiring_date' => 'date',
            'job_position_id' => 'integer',
            'person_id' => 'integer',
            'department_id' => 'integer',
        ];
    }

    /**
     * Relaciones
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function jobPosition(): BelongsTo
    {
        return $this->belongsTo(JobPosition::class);
    }

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }
}
