<?php

namespace App\Models\Enums;

use App\Enums\Interfaces\AbbreviationInterface;
use App\Enums\Interfaces\DescriptivelyNamed;
use App\Enums\Traits\HasAbbreviations;
use App\Enums\Traits\HasDescriptiveNames;
use App\Enums\Traits\HasNames;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum PersonNuipType:string implements HasLabel, AbbreviationInterface
{
    use HasNames, HasAbbreviations ;
    
    case CEDULA_CIUDADANIA = 'cedula_ciudadania';
    case REGISTRO_CIVIL_NACIMIENTO = 'registro_civil_nacimiento';
    case TARJETA_IDENTIDAD = 'tarjeta_identidad';
    case CEDULA_EXTRANJERIA = 'cedula_extranjera';
    case PASAPORTE = 'pasaporte';

    public function getLabel(): string
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
