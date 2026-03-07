<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexLinkControllerTest extends TestCase
{
    use RefreshDatabase;

    private const TEST_URL = 'https://google.com';

    /**
     * Добавляем ссылку и проверяем наличие сокращенной ссылки.
     * @return void
     */
    public function test_index_link(): void
    {
        $payload = [
            'redirect' => self::TEST_URL,
        ];

        // Appending link
        $response = $this->postJson('/api/v1/links', $payload);
        $response->assertStatus(201);

        // Checking link in list
        $response = $this->get('/api/v1/links');
        $response->assertOk()
            ->assertJsonPath('data.0.redirect', self::TEST_URL);
    }
}
