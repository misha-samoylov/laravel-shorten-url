<?php
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\Api\V1\HashService;

class HashServiceTest extends TestCase
{
    private const MD5_MAX_LENGTH = 32;

    public function test_check_hash_length(): void
    {
        $hash = HashService::hash();
        $this->assertEquals(self::MD5_MAX_LENGTH, strlen($hash));
    }
}
