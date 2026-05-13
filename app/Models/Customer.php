<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Tags\HasTags;

/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
#[Fillable([
    'person_id',
])]

class Customer extends Model
{
    use HasFactory, HasTags;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'person_id' => 'integer',
        ];
    }

    /**
     * Relaciones
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }
}
