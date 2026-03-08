<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IndexHashRedirectControllerTest extends TestCase
{
    use RefreshDatabase;

    private const TEST_URL = 'https://google.com';

    /**
     * Проверка создания короткой ссылки и редиректа по короткой ссылке.
     *
     * @return void
     */
    public function test_redirect_short_url()
    {
        $payload = [
            'redirect' => self::TEST_URL,
        ];

        // Добавляем ссылку
        $response = $this->postJson('/api/v1/links', $payload);
        $hash = $response->json('data.hash');

        // Проходим по сокращенной ссылке
        $response = $this->get('/' . $hash);
        $response->assertStatus(302);
        $response->assertRedirectContains(self::TEST_URL);
    }
}
