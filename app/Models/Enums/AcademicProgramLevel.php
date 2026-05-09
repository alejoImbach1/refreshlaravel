<?php

namespace App\Models\Enums;

use App\Enums\Interfaces\DescriptivelyNamed;
use App\Enums\Traits\HasDescriptiveNames;
use App\Enums\Traits\HasNames;

enum AcademicProgramLevel implements DescriptivelyNamed
{
    use HasNames, HasDescriptiveNames;

    case PRIMARIA;
    case BASICA;
    case MEDIA;
    case PREGRADO;
    case POSGRADO;

    public function getDescriptiveName(): string
    {
        return match($this) {
            self::PRIMARIA => 'Básica primaria',
            self::BASICA => 'Bachiller básico',
            self::MEDIA => 'Bachiller (Grado once culminado)',
            self::PREGRADO => 'Pregrado',
            self::POSGRADO => 'Posgrado',
            default => $this->name,
        };
    }
}
