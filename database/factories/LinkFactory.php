<?php

namespace Database\Factories;

use App\Services\Api\V1\HashService;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Link>
 */
class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hash' => HashService::hash(),
            'redirect' => $this->faker->url(),
        ];
    }
}
