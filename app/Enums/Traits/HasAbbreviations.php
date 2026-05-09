<?php

namespace App\Enums\Traits;

trait HasAbbreviations
{
    public static function getAllAbbreviations(): array
    {
        return array_map(
            fn (self $case) => $case->getAbbreviation(),
            self::cases()
        );
    }

    public static function getAbbreviationsToSelect(): array
    {
        return array_combine(
                self::getAllNames(),
                self::getAllAbbreviations()
            );
    }
}
