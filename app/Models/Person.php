<?php

namespace App\Models;

use App\Enums\PersonGender;
use App\Enums\PersonNuipType;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * The attributes that are mass assignable.
 *
 * @var array
 */
#[Fillable([
    'nuip_type',
    'nuip',
    'name',
    'surname',
    'gender',
    'birth_date',
    'email',
    'phone_number',
])]

class Person extends Model
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
            'nuip_type' => PersonNuipType::class,
            'gender' => PersonGender::class,
            'birth_date' => 'date',
        ];
    }

    /**
     * Relaciones
     */
    public function employee(): HasOne
    {
        return $this->hasOne(Employee::class);
    }

    public function customer(): HasOne
    {
        return $this->hasOne(Customer::class);
    }

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function academicBackgrounds(): HasMany
    {
        return $this->hasMany(AcademicBackground::class);
    }
}
