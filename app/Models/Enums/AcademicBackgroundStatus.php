<?php

namespace App\Models\Enums;

use App\Enums\Interfaces\Labeled;
use App\Enums\Traits\HasLabels;
use App\Enums\Traits\HasNames;
use Filament\Support\Contracts\HasLabel;

enum AcademicBackgroundStatus: string implements HasLabel
{
    use HasNames;

    case FINISHED = 'finished';
    case IN_PROGRESS = 'in_progress';

    public function getLabel(): string
    {
        return match($this) {
            self::FINISHED => 'Finalizado',
            self::IN_PROGRESS => 'En progreso',
            default => $this->name,
        };
    }
}
