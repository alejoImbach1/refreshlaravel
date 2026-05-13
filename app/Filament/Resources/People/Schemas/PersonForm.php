<?php

namespace App\Filament\Resources\People\Schemas;

use App\Models\Enums\PersonGender;
use App\Models\Enums\PersonNuipType;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PersonForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('nuip_type')
                    ->options(PersonNuipType::class)
                    ->default('CEDULA_CIUDADANIA')
                    ->required(),
                TextInput::make('nuip'),
                TextInput::make('name')
                    ->required(),
                TextInput::make('surname')
                    ->required(),
                Select::make('gender')
                    ->options(PersonGender::class)
                    ->required(),
                DatePicker::make('birth_date')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                TextInput::make('phone_number')
                    ->tel(),
            ]);
    }
}
