<?php

namespace App\Services\Api\V1;

use Illuminate\Support\Str;

class HashService
{
    public static function hash(): string
    {
        return md5(Str::orderedUuid());
    }
}
