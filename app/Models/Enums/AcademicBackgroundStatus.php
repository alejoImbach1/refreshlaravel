<?php

namespace App\Models\Enums;

use App\Enums\Interfaces\DescriptivelyNamed;
use App\Enums\Traits\HasDescriptiveNames;
use App\Enums\Traits\HasNames;

enum AcademicBackgroundStatus implements DescriptivelyNamed
{
    use HasNames, HasDescriptiveNames;

    case FINISHED;
    case IN_PROGRESS;
    
    public function getDescriptiveName(): string
    {
        return match($this) {
            self::FINISHED => 'Finalizado',
            self::IN_PROGRESS => 'En progreso',
            default => $this->name,
        };
    }
}
