<?php

namespace App\Filament\Resources\People\Tables;

use App\Models\Person;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PeopleTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nuip_type')
                    ->label('NUIP Type')
                    ->state(fn (Person $record): ?string => $record->nuip_type?->getAbbreviation()),
                TextColumn::make('nuip')
                    ->label('NUIP')
                    ->searchable(),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('surname')
                    ->searchable(),
                TextColumn::make('gender')
                    ->state(fn (Person $record): ?string => $record->gender?->getAbbreviation()),
                TextColumn::make('birth_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('email')
                    ->label('Email address')
                    ->searchable(),
                TextColumn::make('phone_number')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
