<?php

namespace App\Models\Enums;

use App\Enums\Interfaces\AbbreviationInterface;
use App\Enums\Interfaces\DescriptivelyNamed;
use App\Enums\Traits\HasAbbreviations;
use App\Enums\Traits\HasDescriptiveNames;
use App\Enums\Traits\HasNames;
use Filament\Support\Contracts\HasLabel;

enum PersonGender: string implements HasLabel, AbbreviationInterface
{
    use HasNames, HasAbbreviations;

    case MALE = 'male';
    case FEMALE = 'female';
    case RATHER_NOT_SAY = 'rather_not_say';

    public function getLabel(): string
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
