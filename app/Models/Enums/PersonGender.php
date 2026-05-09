<?php

namespace App\Models\Enums;

use App\Enums\Interfaces\AbbreviationInterface;
use App\Enums\Interfaces\DescriptivelyNamed;
use App\Enums\Traits\HasAbbreviations;
use App\Enums\Traits\HasDescriptiveNames;
use App\Enums\Traits\HasNames;

enum PersonGender implements DescriptivelyNamed, AbbreviationInterface
{
    use HasNames, HasAbbreviations, HasDescriptiveNames;

    case MALE;
    case FEMALE;
    case RATHER_NOT_SAY;

    public function getDescriptiveName(): string
    {
        return match($this) {
            self::MALE => 'Masculino',
            self::FEMALE => 'Femenino',
            self::RATHER_NOT_SAY => 'Prefiero no decir',
            default => $this->name,
        };
    }

    public function getAbbreviation(): string
    {
        return match($this) {
            self::MALE => 'M',
            self::FEMALE => 'F',
            self::RATHER_NOT_SAY => 'N.A.',
            default => $this->name,
        };
    }
}
