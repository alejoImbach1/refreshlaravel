<?php

namespace App\Models\Enums;

use App\Enums\Interfaces\AbbreviationInterface;
use App\Enums\Interfaces\DescriptivelyNamed;
use App\Enums\Traits\HasAbbreviations;
use App\Enums\Traits\HasDescriptiveNames;
use App\Enums\Traits\HasNames;

enum PersonNuipType implements DescriptivelyNamed, AbbreviationInterface
{
    use HasNames, HasAbbreviations, HasDescriptiveNames;
    
    case CEDULA_CIUDADANIA;
    case REGISTRO_CIVIL_NACIMIENTO;
    case TARJETA_IDENTIDAD;
    case CEDULA_EXTRANJERIA;
    case PASAPORTE;

    public function getDescriptiveName(): string
    {
        return match($this) {
            self::CEDULA_CIUDADANIA => 'Cédula de ciudadanía',
            self::REGISTRO_CIVIL_NACIMIENTO => 'Registro civil de nacimiento',
            self::TARJETA_IDENTIDAD => 'Tarjeta de identidad',
            self::CEDULA_EXTRANJERIA => 'Cédula extranjera',
            self::PASAPORTE => 'Pasaporte',
            default => $this->name,
        };
    }

    public function getAbbreviation(): string
    {
        return match($this) {
            self::CEDULA_CIUDADANIA => 'C.C.',
            self::REGISTRO_CIVIL_NACIMIENTO => 'R.C.',
            self::TARJETA_IDENTIDAD => 'T.I.',
            self::CEDULA_EXTRANJERIA => 'C.E.',
            self::PASAPORTE => 'P.P.',
            default => $this->name,
        };
    }
}
