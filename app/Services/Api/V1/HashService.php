<?php

namespace App\Services\Api\V1;

use Illuminate\Support\Str;

class HashService
{
    /**
     * Сгенерировать time-ordered UUID.
     */
    public static function generateHash(): string
    {
        return md5(Str::orderedUuid());
    }
}
