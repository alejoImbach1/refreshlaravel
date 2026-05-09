<?php

namespace App\Enums\Traits;

trait HasNames
{
    public static function getAllNames(): array
    {
        return array_map(fn(self $case) => $case->name, self::cases());
    }
}
