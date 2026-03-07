<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StoreLinkControllerTest extends TestCase
{
    use RefreshDatabase;

    private const TEST_URL = 'https://google.com';

    /**
     * Провереряем успешность добавление ссылки.
     *
     * @return void
     */
    public function test_store_link_success_appended(): void
    {
        $payload = [
            'redirect' => self::TEST_URL,
        ];

        $response = $this->postJson('/api/v1/links', $payload);

        $response->assertStatus(201)
            ->assertJsonPath('data.redirect', self::TEST_URL);
    }

    /**
     * Проверяем что ссылка не добавилась, ввиду не верного параметра.
     *
     * @return void
     */
    public function test_store_link_fail_appended(): void
    {
        $payload = [
            'id' => 123,
        ];

        $response = $this->postJson('/api/v1/links', $payload);

        $response->assertStatus(422)
            ->assertJsonMissingPath('data.redirect');
    }
}
