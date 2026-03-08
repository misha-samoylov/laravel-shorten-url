<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Requests\Api\V1\StoreLinkRequest;
use App\Http\Resources\Api\V1\IndexLinkResource;
use App\Http\Resources\Api\V1\StoreLinkResource;
use App\Services\Api\V1\LinkService;

class LinksController
{
    public function __construct(
        private LinkService $linkService,
    )
    {
    }

    /**
     * Показать список ссылок.
     *
     * Показать весь список сокращенных ссылок.
     *
     * @return JsonResource
     */
    public function index(): JsonResource
    {
        $data = $this->linkService->getAllLinks();
        return IndexLinkResource::collection($data);
    }

    /**
     * Создать сокращенную ссылку.
     *
     * Создать сокращенную ссылку по указанному адресу.
     *
     * @param StoreLinkRequest $request
     * @return JsonResource
     */
    public function store(StoreLinkRequest $request): JsonResource
    {
        $link = $request->validated()['redirect'];
        $model = $this->linkService->storeLink($link);
        return new StoreLinkResource($model);
    }
}
