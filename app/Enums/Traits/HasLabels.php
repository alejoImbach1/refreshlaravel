<?php

namespace App\Enums\Traits;

trait HasLabels
{
    public static function getAllLabels(): array
    {
        return array_map(
            fn(self $case) => $case->getLabel(),
            self::cases()
        );
    }

    public static function getLabelsToSelect(): array
    {
        return array_combine(
                self::getAllNames(),
                self::getAllLabels()
            );
    }
}
