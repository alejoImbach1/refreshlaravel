<?php

namespace App\Enums\Traits;

trait HasDescriptiveNames
{
    public static function getAllDescriptiveNames(): array
    {
        return array_map(
            fn(self $case) => $case->getDescriptiveName(),
            self::cases()
        );
    }

    public static function getDescriptiveNamesToSelect(): array
    {
        return array_combine(
                self::getAllNames(),
                self::getAllDescriptiveNames()
            );
    }
}
