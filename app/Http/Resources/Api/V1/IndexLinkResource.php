<?php

namespace App\Http\Resources\Api\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class IndexLinkResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            /**
             * Хэш ссылки
             * @example fa5ea8ecc066611f52fe4e69db269f0b
             */
            'hash' => $this->hash,
            /**
             * Начальная ссылка
             * @example http://example.com
             */
            'redirect' => $this->redirect,
            /**
             * Сокращенная ссылка
             * @example http://localhost/fa5ea8ecc066611f52fe4e69db269f0b
             */
            'url' => config('app.url') . '/' . $this->hash
        ];
    }
}
